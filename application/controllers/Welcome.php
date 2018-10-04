<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function index()
    {
        $this->load->template('principal/index');
    }

    public function documentos()
    {
        $this->load->template("principal/documentos");
    }

    public function suporte()
    {
        $this->load->template("principal/suporte");
    }

    public function principal()
    {
        $this->verificarSessaoAtiva();
        $this->load->setTituloPag('Bolsa Familia - Principal');
        if ($this->session->userdata['autenticado']) {
            $this->load->template("principal/principal");
        }
    }

    public function indicadores()
    {
        $this->verificarSessaoAtiva();
        $this->load->template("principal/indicadores");
    }
    
    public function carregarMunicipio()
    {
        $coUf = $this->uri->segment(3);
        if ($coUf != '99') {
            $this->load->model('Municipio');
            $result = $this->Municipio->mostrarMunicipios($coUf, false);
            $this->toJson($result);
        } else {
            $this->toJson(array('' => "NENHUM REGISTRO ENCONTRADO!"));
        }
    }

    public function adicionarSessao()
    {
        $this->load->library('session');
        $coMunicipioIbge = $this->uri->segment(3);
        if (!isset($this->session->userdata['CO_MUNICIPIO_GESTOR'])) {
            $this->session->userdata['CO_MUNICIPIO_GESTOR'] = $this->session->userdata['CO_MUNICIPIO_IBGE'];
            $this->session->userdata['NO_MUNICIPIO_GESTOR'] = $this->session->userdata['NO_MUNICIPIO_ACENTUADO'];
        }
        $this->load->model('Municipio');
        $result = $this->Municipio->selecionaMunicipio($coMunicipioIbge);
        $this->session->userdata['NO_MUNICIPIO_SELECIONADO'] = $result['NO_MUNICIPIO_ACENTUADO'];
        $this->session->userdata['NO_MUNICIPIO_ACENTUADO'] = $result['NO_MUNICIPIO_ACENTUADO'];
        $this->session->userdata['CO_MUNICIPIO_IBGE'] = $result['CO_MUNICIPIO_IBGE'];
        $this->toJson(true);

    }

    //INICIO INDICADORES - Total de beneficiários obrigatórios 
    public function montaGraficoBeneficiariosMunicipio()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Indicadores');

        //GRAFICO INICIAL
        //Beneficiários de acompanhamento obrigatório
        //Beneficiários de acompanhamento não obrigatório
        //Beneficiários Indígenas e Quilombolas
        //Beneficiários Crianças
        //Beneficiários Gestantes Estimadas
        $resultG1 = $this->Indicadores->retornarConsolidado($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        //Gestantes Beneficiárias Acompanhadas
        $resultGestante = $this->Indicadores->retornarTotalBeneficiariosGestantes($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        //Acompanhados em Outros Municípios
        $resultOutros = $this->Indicadores->retornarTotalBeneficiariosAcompanhadosOutroMunicipio($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);

        $arrResultGrafico1 = array();
        $arrResultGrafico1[] = array('name' => 'Acompanhamento obrigatório', 'y' => (int) $resultG1['QT_OBRIGATORIO'], 'drilldown' => 'Beneficiarios', 'color' => '#00a65a');
        $arrResultGrafico1[] = array('name' => 'Acompanhamento não obrigatório', 'y' => (int) $resultG1['QT_NAO_OBRIGATORIO'], 'drilldown' => 'Beneficiarios2', 'color' => '#00a65a');
        $arrResultGrafico1[] = array('name' => 'Gestantes', 'y' => (int) $resultGestante['TOTAL'], 'drilldown' => 'Gestantes', 'color' => '#00a65a');
        $arrResultGrafico1[] = array('name' => 'Acompanhados em outros municípios', 'y' => (int) $resultOutros['TOTAL'], 'drilldown' => 'Outros', 'color' => '#00a65a');
        $arrResultGrafico1[] = array('name' => 'Indígenas e Quilombolas', 'y' => (int) $resultG1['QT_INDIGENA_QUILOMBOLA'], 'drilldown' => 'Indigenas', 'color' => '#00a65a');
        $arrResultGrafico1[] = array('name' => 'Crianças', 'y' => (int) $resultG1['QT_CRIANCA'], 'drilldown' => 'Criancas', 'color' => '#00a65a');

        //GRAFICO Beneficiários de acompanhamento obrigatório
        $result2 = $this->Indicadores->retornarTotalBeneficiariosAcompanhados($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA, 1);
        $result3 = ($resultG1['QT_OBRIGATORIO'] - $result2['TOTAL']);
        $result4 = $this->Indicadores->retornarTotalBeneficiariosAcompanhadosMotivoNaoAcomp($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA, 1);

        $arrResultGrafico2 = array();
        $arrResultGrafico2[] = array('name' => 'Acompanhados', 'y' => (int) $result2['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico2[] = array('name' => 'Sem informação de acompanhamento', 'y' => (int) $result3, 'color' => '#CE2837');
        $arrResultGrafico2[] = array('name' => 'Não acompanhados com ocorrência', 'y' => (int) $result4['TOTAL'], 'color' => 'orange');

        //GRAFICO Beneficiários de acompanhamento não obrigatório
        $result6 = $this->Indicadores->retornarTotalBeneficiariosAcompanhados($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA, 0);
        $result7 = ($resultG1['QT_NAO_OBRIGATORIO'] - $result6['TOTAL']);
        $result8 = $this->Indicadores->retornarTotalBeneficiariosAcompanhadosMotivoNaoAcomp($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA, 0);

        $arrResultGrafico3 = array();
        $arrResultGrafico3[] = array('name' => 'Acompanhados', 'y' => (int) $result6['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico3[] = array('name' => 'Sem informação de acompanhamento', 'y' => (int) $result7, 'color' => '#CE2837');
        $arrResultGrafico3[] = array('name' => 'Não acompanhados com ocorrência', 'y' => (int) $result8['TOTAL'], 'color' => 'orange');

        //GRAFICO Gestantes Beneficiárias Acompanhadas
        $resultGestanteComPreNatal = $this->Indicadores->retornarTotalBeneficiariosGestantesComPreNatal($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        $resultGestanteSemPreNatal = $this->Indicadores->retornarTotalBeneficiariosGestantesSemPreNatal($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);

        $arrResultGrafico4 = array();
        $arrResultGrafico4[] = array('name' => 'Estimadas no Município', 'y' => (int) $resultG1['QT_GESTANTE_ESTIMADA'], 'color' => '#3c8dbc');
        $arrResultGrafico4[] = array('name' => 'Localizadas', 'y' => (int) $resultGestante['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico4[] = array('name' => 'Acompanhadas com Pré-Natal', 'y' => (int) $resultGestanteComPreNatal['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico4[] = array('name' => 'Acompanhadas sem Pré-Natal', 'y' => (int) $resultGestanteSemPreNatal['TOTAL'], 'color' => 'orange');

        //GRAFICO Acompanhados em Outros Municípios
        $resultOutrosObrigatorios = $this->Indicadores->retornarTotalBeneficiariosAcompanhadosOutroMunicipio($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA, 1);
        $resultOutrosNaoObrigatorios = $this->Indicadores->retornarTotalBeneficiariosAcompanhadosOutroMunicipio($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA, 0);

        $arrResultGrafico5 = array();
        $arrResultGrafico5[] = array('name' => 'Obrigatórios', 'y' => (int) $resultOutrosObrigatorios['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico5[] = array('name' => 'Não Obrigatórios', 'y' => (int) $resultOutrosNaoObrigatorios['TOTAL'], 'color' => '#00a65a');


        //GRAFICO Beneficiários Indígenas e Quilombolas
        $resultIndigQuil1 = $this->Indicadores->retornarTotalBeneficiariosIndQuilAcompanhados($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        $resultIndigQuil2 = ($resultG1['QT_INDIGENA_QUILOMBOLA'] - $resultIndigQuil1['TOTAL']);
        $resultIndigQuil3 = $this->Indicadores->retornarTotalBeneficiariosIndQuilAcompanhadosMotivoNaoAcomp($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        
        $arrResultGrafico6 = array();
        $arrResultGrafico6[] = array('name' => 'Acompanhados', 'y' => (int) $resultIndigQuil1['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico6[] = array('name' => 'Sem informação de acompanhamento', 'y' => (int) $resultIndigQuil2, 'color' => '#CE2837');
        $arrResultGrafico6[] = array('name' => 'Não acompanhados com ocorrência', 'y' => (int) $resultIndigQuil3['TOTAL'], 'color' => 'orange');


        //GRAFICO Beneficiários Crianças
        $resultCriancasAcomp = $this->Indicadores->retornarTotalBeneficiariosCriancasAcompanhadas($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        $resultCriancasNaoAcomp = ($resultG1['QT_CRIANCA'] - $resultCriancasAcomp['TOTAL']);
        $resultCriancasNaoAcompComMotivo = $this->Indicadores->retornarTotalBeneficiariosCriancasNaoAcompanhadasComMotivo($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);

        $arrResultGrafico7 = array();
        $arrResultGrafico7[] = array('name' => 'Acompanhados', 'y' => (int) $resultCriancasAcomp['TOTAL'], 'color' => '#00a65a');
        $arrResultGrafico7[] = array('name' => 'Sem informação de acompanhamento', 'y' => (int) $resultCriancasNaoAcomp, 'color' => '#CE2837');
        $arrResultGrafico7[] = array('name' => 'Não acompanhados com ocorrência', 'y' => (int) $resultCriancasNaoAcompComMotivo['TOTAL'], 'color' => 'orange');

        $result['GRAFICO1'] = $arrResultGrafico1;
        $result['GRAFICO2'] = $arrResultGrafico2;
        $result['GRAFICO3'] = $arrResultGrafico3;
        $result['GRAFICO4'] = $arrResultGrafico4;
        $result['GRAFICO5'] = $arrResultGrafico5;
        $result['GRAFICO6'] = $arrResultGrafico6;
        $result['GRAFICO7'] = $arrResultGrafico7;

        $this->toJson($result);
    }



}
