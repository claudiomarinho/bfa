<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bairro extends MY_Controller
{

    public function index()
    {
        $this->verificarSessaoAtiva();
        $this->load->setTituloPag('Bolsa Familia - Bairros - Agrupar');
        $this->load->template('bairro/agrupar', array('coMunicipioIbge' => $this->session->CO_MUNICIPIO_IBGE));
    }

    public function lista()
    {
        $this->verificarSessaoAtiva('json');
        $coMunicipio = $this->uri->segment(3);
        $this->load->model('Domicilio');
        $result = $this->Domicilio->retornarBairrosTodos($coMunicipio, $this->session->NU_VIGENCIA);
        $arr = array();
        foreach ($result as $i => $r) {
            $arr[$i]['CO_BFA_AREA'] = $r['CO_SEQ_BFA_AREA'];
            $arr[$i]['NO_BAIRRO'] = utf8_encode($r['NO_BAIRRO']);
            $arr[$i]['disabled'] = (bool)$r['DISABLED'];
        }
        $this->toJson($arr);
    }

    public function vinculados()
    {
        $coMunicipio = $this->uri->segment(3);
        $this->load->model('Area');
        $result = $this->Area->retornarVinculados($coMunicipio);
        foreach ($result as $i => $r) {
            $result[$i]['DS_BAIRROS_AGRUPADO'] = '';
            $arrResult = $this->Area->retornarBairrosVinculados($coMunicipio, $r['CO_SEQ_BFA_AREA']);
            foreach ($arrResult as $res) {
                $result[$i]['DS_BAIRROS_AGRUPADO'] .= utf8_encode($res['NO_BAIRRO']) . '<br>';
            }
        }
        $this->toJson($result);
    }

    public function todosVinculados()
    {
        $this->verificarSessaoAtiva('json');
        $coMunicipio = $this->uri->segment(3);
        $this->load->model('Domicilio');
        $result = $this->Domicilio->retornarBairros($coMunicipio, $this->session->NU_VIGENCIA);
        $this->toJson($result);
    }

    public function salvar()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Area');
        $this->load->model('Domicilio');
        $postTela = $this->postJson();
        if (isset($postTela['data']['CO_SEQ_BFA_AREA']) && $postTela['data']['CO_SEQ_BFA_AREA'] != '') {
            $coBfaArea = $postTela['data']['CO_SEQ_BFA_AREA'];
            $this->Domicilio->beginTransaction();
            try {
                $this->Area->update(
                    array(
                        'CO_SEQ_BFA_AREA' => $coBfaArea,
                        'DT_ATUALIZACAO' => 'SYSDATE',
                        'CO_MUNICIPIO_IBGE' => $postTela['data']['CO_MUNICIPIO_IBGE'],
                        'CO_PESSOA_FISICA' => $this->session->CO_PESSOA_FISICA,
                        'ST_REGISTRO_ATIVO' => 'S')
                );
                foreach ($postTela['data']['DS_BAIRROS_AGRUPADO'] as $bairro) {
                    if ($bairro['disabled'] === false) {
                        $this->Domicilio->update(array('CO_BFA_AREA' => $coBfaArea), array('NO_BAIRRO' => $bairro['NO_BAIRRO'], 'CO_MUNICIPIO_IBGE' => $postTela['data']['CO_MUNICIPIO_IBGE'], 'ST_REGISTRO_ATIVO' => 'S'));
                    }
                }
                $this->Domicilio->commit();
                $result = true;
            } catch (PDOException $e) {
                $this->Domicilio->rollback();
                $result = ['status' => false, 'msg' => $e->getMessage()];
            }
        } else {
            $this->Area->beginTransaction();
            try {
                $this->Area->insert(
                    array('NO_AREA' => $postTela['data']['NO_AREA_BAIRRO'],
                        'DT_CADASTRO' => 'SYSDATE',
                        'CO_MUNICIPIO_IBGE' => $postTela['data']['CO_MUNICIPIO_IBGE'],
                        'CO_PESSOA_FISICA' => $this->session->CO_PESSOA_FISICA,
                        'ST_REGISTRO_ATIVO' => 'S')
                );
                if ($this->Area->id !== null) {
                    foreach ($postTela['data']['DS_BAIRROS_AGRUPADO'] as $bairro) {
                        $this->Domicilio->update(array('CO_BFA_AREA' => $this->Area->id), array('NO_BAIRRO' => $bairro['NO_BAIRRO'], 'CO_MUNICIPIO_IBGE' => $postTela['data']['CO_MUNICIPIO_IBGE'], 'ST_REGISTRO_ATIVO' => 'S'));
                    }
                }
                $this->Area->commit();
                $result = true;
            } catch (PDOException $e) {
                $this->Area->rollback();
                $result = ['status' => false, 'msg' => $e->getMessage()];
            }
        }
        $this->toJson($result);
    }

    public function desvincular()
    {
        $this->verificarSessaoAtiva('json');
        $dados = $this->postJson();
        $id = $dados['id'];
        $this->load->model('Area');
        $this->load->model('Domicilio');
        $this->Domicilio->beginTransaction();
        try {
            $this->Domicilio->update(array('CO_BFA_AREA' => ''), array('CO_BFA_AREA' => $id, 'CO_MUNICIPIO_IBGE' => $this->session->CO_MUNCIPIO_IBGE, 'ST_REGISTRO_ATIVO' => 'S'));
            $this->Area->inativar([$id]);
            $this->Domicilio->commit();
            $this->toJson(true);
        } catch (PDOException $e) {
            $this->Domicilio->rollback();
            $this->toJson(['status' => false, 'msg' => $e->getMessage()]);
        }

    }
}
