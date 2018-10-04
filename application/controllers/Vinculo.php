<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vinculo extends MY_Controller
{

    public function index()
    {
        $this->verificarSessaoAtiva();
        $this->load->template('vinculo/index');
    }

    public function familia()
    {
        $this->verificarSessaoAtiva();
        $this->load->template('vinculo/familia/index', array('coMunicipioIbge' => $this->session->CO_MUNICIPIO_IBGE));
    }

    public function listaFamiliasParaVinculacao()
    {
        $this->verificarSessaoAtiva('json');
        $dadosTela = $this->postJson();
        $bairro = $dadosTela['bairro'];
        $coseqeas = $dadosTela['coseqeas'];
        $coprofissional = $dadosTela['profissional'];
        $nis = $dadosTela['nis'];
        $semvinculo = $dadosTela['semvinculo'];
        if ($semvinculo) {
            $coseqeas = "sVinculo";
        }
        $arr = array();
        $this->load->model('Familia');
        $this->load->model('Area');
        $coSeqBfaArea = false;
        if ($nis == '') {
            $resultArea = $this->Area->verificarBairroArea($bairro, $this->session->CO_MUNICIPIO_IBGE);
            if ($resultArea) {
                $coSeqBfaArea = $resultArea['EXISTE'];
            }
        }
        $arrIndividuos = $this->Familia->buscaFamiliasPorFiltrosTemp($this->session->CO_MUNICIPIO_IBGE, $bairro, $coseqeas, $nis, $coprofissional, $this->session->NU_VIGENCIA, $coSeqBfaArea);

        if ($arrIndividuos) {
            $coFamiliaMds = '';
            $i = 0;
            $arrPessoas = [];
            foreach ($arrIndividuos as $k => $v) {
                $arrPessoas[$v['CO_FAMILIA_MDS']][] = array(
                    'CO_PESSOA' => $v['CO_SEQ_BFA_PESSOA'],
                    'NU_NIS' => $v['NU_NIS'],
                    'NO_PESSOA' => utf8_encode($v['NO_PESSOA'])
                );
            }

            foreach ($arrIndividuos as $k => $value) {
                if ($value['CO_FAMILIA_MDS'] !== $coFamiliaMds) {
                    $enderecoFamilia = ($value['ST_QUILOMBOLA'] != '1')
                        ? $value['DS_ENDERECO']
                        : $value['DS_ENDERECO'] . ' <br/><strong> (QUILOMBO: ' . $value['NO_QUILOMBOLA'] . ')</strong>';
                    $arr['data'][$i] = array(
                        'IDX_LISTA' => $i,
                        'CODFAMILIAR' => $value['CO_SEQ_BFA_FAMILIA'],
                        'BENEFICIARIOS' => '',
                        'OBJ_FAMILIA' => $arrPessoas[$value['CO_FAMILIA_MDS']],
                        'ENDERECO' => utf8_encode($enderecoFamilia),
                        'BAIRRO' => utf8_encode($value['NO_BAIRRO']), //linha modificada para o vinculo não ter problemas
                        'EAS' => utf8_encode($value['NO_EAS_VISIVEL']),
                        'NOEASORIGINAL' => utf8_encode($value['NO_EAS_VISIVEL']),
                        'COEASORIGINAL' => $value['CO_EAS_VISIVEL'],
                        'PROFISSIONAL' => utf8_encode($value['NO_PROFISSIONAL']),
                        'NOPROFORIGINAL' => utf8_encode($value['NO_PROFISSIONAL']),
                        'COCNSPROFORIGINAL' => $value['CO_CNS'],
                        'check' => ($value['VINCULADO'] == '1')
                    );
                    $i++;
                }
                $coFamiliaMds = $value['CO_FAMILIA_MDS'];
            }
        }
        return $this->toJson($arr);
    }

    public function listaFamiliaPorFiltros()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Familia');
        $arrIndividuos = $this->Familia->buscaFamiliasPorFiltrosTemp($this->uri->segment(3), $this->session->NU_VIGENCIA);
        return $this->toJson($arrIndividuos);
    }

    public function listaPessoasPorFamilia()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Familia');
        $arrIndividuos = $this->Familia->buscaIndividuosFamiliaTemp($this->uri->segment(3), $this->session->NU_VIGENCIA);
        return $this->toJson($arrIndividuos);
    }

    public function vinculaPessoasPorFamilia()
    {
        $this->verificarSessaoAtiva('json');
        $dadosTela = $this->postJson();
        $this->load->model('Pessoa');
        $arr = array();
        $arr['CO_EAS_VISIVEL'] = $dadosTela['check'] === true ? '' : $dadosTela['coseqeas'];
        $arr['CO_CNS_PROF_VISIVEL'] = $dadosTela['check'] === true ? '' : $dadosTela['cocnsprofvisivel'];
        return $this->toJson(array('status' => $this->Pessoa->update($arr, array('CO_BFA_FAMILIA' => $dadosTela['codfamiliar'], 'ST_REGISTRO_ATIVO' => 'S'))));
    }

    public function vinculaPessoasPorFamiliaTodos()
    {
        $this->verificarSessaoAtiva('json');
        $dadosTela = $this->postJson();
        $this->load->model('Pessoa');
        $this->Pessoa->beginTransaction();
        if ($dadosTela === null) {
            return $this->toJson(['status' => false, 'msg' => 'Ocorreu um erro ao efetuar a operação, tente novamente mais tarde!']);
        }
        try {
            $this->Pessoa->updatePessoaPorFamilias($dadosTela);
            $this->Pessoa->commit();
            return $this->toJson(true);
        } catch (PDOException $e) {
            $this->Pessoa->rollback();
            return $this->toJson(['status' => false, 'msg' => $e->getMessage()]);
        }
    }

    public function lista()
    {
        $this->verificarSessaoAtiva('json');
        $coMunicipio = $this->uri->segment(3);
        $this->load->model('Domicilio');
        $result = $this->Domicilio->retornarBairros($coMunicipio, $this->session->NU_VIGENCIA);
        $this->toJson($result);
    }

    public function listaEasVisiveis()
    {
        //   $this->verificarSessaoAtiva();
        $this->load->model('Vincular');
        $arrEasVisiveis = $this->Vincular->buscaEasVisivel($this->uri->segment(3));
        $this->toJson($arrEasVisiveis);
    }

    public function consulta_profissional($coCnes)
    {
        $this->verificarSessaoAtiva('json');
        $valor = array();
        $this->load->model('Vincular');
        $arrProfissionaisEasVisiveis = $this->Vincular->buscaProfissionaisEasVisivel($this->uri->segment(3));
        foreach ($arrProfissionaisEasVisiveis as $value) {
            array_push($valor, $value['NO_PROFISSIONAL']);
        }
        $total[] = array('co_cnes' => $coCnes,
            'profissionais' => $valor);
        $this->toJson($valor);
    }

    public function consultaProfissionaisEasVisiveis()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Vincular');
        $result = $this->Vincular->buscaProfissionaisEasVisivel($this->uri->segment(3));
        $this->toJson($result);
    }

    public function consultaEstatisticasFamilias()
    {
        $this->verificarSessaoAtiva('json');
        $coMunicipio = $this->postJson();
        $this->load->model('Familia');
        $arrFamilia = $this->Familia->buscaFamiliasPorFiltrosTemp($coMunicipio, null, null, null, null, $this->session->NU_VIGENCIA);
        $this->toJson($arrFamilia);
    }
}