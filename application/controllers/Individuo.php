<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individuo extends MY_Controller
{
    public function localiza()
    {
        $this->verificarSessaoAtiva('json');
        $dados = $this->postJson();
        $coMunicipioIbge = $this->session->CO_MUNICIPIO_IBGE;
        $this->load->model('Pessoa');
        $result = $this->Pessoa->retornaBuscaIndividuos($coMunicipioIbge, $dados, $this->session->NU_VIGENCIA);
        return $this->toJson($result);
    }

//    public function localiza2()
//    {
//        $this->verificarSessaoAtiva('json');
//        $start = $this->uri->segment(3);
//        $end = $this->uri->segment(4);
//        $orderBy = $this->uri->segment(5);
//        $orderByName = $this->uri->segment(6);
//        $dados = $this->postJson();
//        $coMunicipioIbge = $this->session->CO_MUNICIPIO_IBGE;
//        $this->load->model('Pessoa');
//        $total = $this->Pessoa->retornarTotalBuscaIndividuo($coMunicipioIbge, $dados, $this->session->NU_VIGENCIA);
//        $result = $this->Pessoa->retornaBuscaIndividuosPaginado($coMunicipioIbge, $dados, $this->session->NU_VIGENCIA, $start, $end, $orderBy,$orderByName);
//        return $this->toJson(array('res' => $result, 'total' => $total));
//    }

}
