<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eas extends MY_Controller
{

    public function index()
    {
        $this->verificarSessaoAtiva();
        $this->load->setTituloPag('Bolsa Familia - Eas - Vinculações Visiveis');
        $this->load->template('vinculo/easvisiveis/index');
    }

    public function carregaEas()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Estabelecimento');
        $result = $this->Estabelecimento->buscaEas($this->session->CO_MUNICIPIO_IBGE);
        if ($result) {
            foreach ($result as $i => $r) {
                $r['disabled'] = false;
                if ($r['CO_EAS_VISIVEL']) {
                    $r['disabled'] = true;
                }
                $result[$i] = $r;
            }
        }
        return $this->toJson($result);
    }

    public function carregaEasVisiveis()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Estabelecimento');
        $this->toJson($this->Estabelecimento->buscaEasVisivel($this->session->CO_MUNICIPIO_IBGE));
    }

    public function cadastrar()
    {
        $this->verificarSessaoAtiva('json');
        $dados = $this->postJson();
        $this->load->model('Estabelecimento');
        $eas = [];
        $this->Estabelecimento->beginTransaction();
        try {
            $arr = $this->Estabelecimento->buscaEasFamilia($this->session->CO_MUNICIPIO_IBGE);
            $this->Estabelecimento->updateZerarEasVisiveis($arr, $this->session->CO_MUNICIPIO_IBGE);
            foreach ($dados as $value) {
                $eas['CO_SEQ_EAS_VISIVEL'] = $value['CO_SEQ_EAS_VISIVEL'];
                $eas['CO_CNES'] = $value['CO_CNES'];
                $eas['NO_EAS_VISIVEL'] = $value['NO_FANTASIA'];
                $eas['DT_CADASTRO'] = 'SYSDATE';
                $eas['ST_REGISTRO_ATIVO'] = 'S';
                $eas['CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;
                $eas['CO_PESSOA_FISICA'] = $this->session->CO_PESSOA_FISICA;
                $this->Estabelecimento->save($eas);
            }
            $this->Estabelecimento->commit();
            $result = true;
        } catch (PDOException $e) {
            $this->Estabelecimento->rollback();
            $result = ['status' => false, 'msg' => $e->getMessage()];
        }
        $this->toJson($result);
    }

}
