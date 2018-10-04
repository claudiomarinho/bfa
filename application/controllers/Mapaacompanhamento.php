<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapaacompanhamento extends MY_Controller
{
    public function index()
    {
        $this->verificarSessaoAtiva();
        $this->load->template('mapa/index');
    }

    public function gerenciar()
    {
        $this->verificarSessaoAtiva();
        $this->load->template('mapa/gerenciar');
    }

    public function localiza()
    {
        $this->verificarSessaoAtiva('json');
        $dados = $this->postJson();
        $dados['CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;
        $dados['NU_VIGENCIA'] = $this->session->NU_VIGENCIA;
        $this->load->model('Mapa');
        $result = $this->Mapa->consultarMapas($dados);

        return $this->toJson($result);
    }

    public function excluir()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Mapa');
        $this->load->model('Rlpessoamapa');
        $resultRlMapa = $this->Rlpessoamapa->consultarMapa($this->uri->segment(3));
        $rlResult = true;
        if ($resultRlMapa) {
            $rlResult = $this->Rlpessoamapa->delete(array('CO_BFA_MAPA' => $this->uri->segment(3)), array('CO_BFA_MAPA' => $this->uri->segment(3)));
        }
        $result = $this->Mapa->delete(array('CO_SEQ_BFA_MAPA' => $this->uri->segment(3)));       
        if ($rlResult && $result) {
            return $this->toJson(true);
        } else {
            return $this->toJson(false);
        }
    }

    public function acompanhamento()
    {
        $this->verificarSessaoAtiva();
        $dados['A.CO_SEQ_BFA_MAPA'] = $this->uri->segment(3);
        $dados['A.CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;
        $dados['A.NU_VIGENCIA'] = $this->session->NU_VIGENCIA;
        $this->load->model('Mapa');
        $result = $this->Mapa->consultarMapaPorId($dados);

        $filtros = json_decode($result['DS_FILTROS'], true);

        if (isset($filtros['CO_CNES_ATENDIMENTO'])) {
            $this->load->model('Estabelecimento');
            $noCnes = $this->Estabelecimento->existeCnes($filtros['CO_CNES_ATENDIMENTO']);
            $filtros['NO_EAS_VISIVEL'] = $noCnes['NO_EAS_VISIVEL'];
            if (isset($filtros['CO_CNS_PROFISSIONAL'])) {
                $noCnes = $this->Estabelecimento->noProfissional($filtros['CO_CNS_PROFISSIONAL']);
                $filtros['NO_PROFISSIONAL'] = $noCnes['NO_PROFISSIONAL'];
            }
        }

        if (isset($filtros['CO_ETNIA'])) {
            $filtros['CO_ETNIA'] = $filtros['CO_ETNIA'];
            if ($filtros['CO_ETNIA'] == '99') {
                $filtros['CO_ETNIA'] = 'TODAS';
            }
        }

        if (isset($filtros['ST_ACOMPANHAMENTO'])) {
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $filtros['SITUACAO'] = 'Indivíduos a serem acompanhados (SEM INFORMAÇÃO)';
            } elseif ($filtros['ST_ACOMPANHAMENTO'] == '2') {
                $filtros['SITUACAO'] = 'Indivíduos não acompanhados (COM MOTIVO DE NÃO ACOMPANHAMENTO)';
            } else {
                $filtros['SITUACAO'] = 'Todos os indivíduos';
            }
        } else {
            $filtros['SITUACAO'] = 'Familiar';
        }

        $filtros['TITULO'] = $this->retornarTipoDeMapa($filtros['TP_MAPA']);
        $this->load->template('mapa/localiza', array('filtros' => $filtros, 'coSeq' => $this->uri->segment(3), 'dtCadastro' => $result['DT_CADASTRO'], 'dtCadastro' => $result['DT_CADASTRO']));
    }

    public function listaFamiliasMapa()
    {
        $this->verificarSessaoAtiva('json');
        $dados = array();
        $dados['A.CO_SEQ_BFA_MAPA'] = $this->uri->segment(3);
        $dados['A.CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;
        $dados['A.NU_VIGENCIA'] = $this->session->NU_VIGENCIA;
        $this->load->model('Tbacompanhamento');
        $this->load->model('Mapa');
        $this->load->model('Rlpessoamapa');
        $result = $this->Mapa->consultarMapaPorId($dados);

        $resultRlMapa = $this->Rlpessoamapa->consultarMapa($result['CO_SEQ_BFA_MAPA']);

        if (!$resultRlMapa) {

            $resMapa = $this->Mapa->gerarMapa($result['DS_SQL'], json_decode($result['DS_PARAMETROS'], 1));
            foreach ($resMapa as $i => $value) {
                $resMapa[$i]['CO_BFA_MAPA'] = $dados['A.CO_SEQ_BFA_MAPA'];

                $resultAcomp = $this->Tbacompanhamento->buscaAcompPessoaNuNis($value['NU_NIS'], $this->session->NU_VIGENCIA);
                if ($value['NU_NIS'] == $resultAcomp['NU_NIS']) {
                    $resMapa[$i]['ST_ACOMPANHADO'] = 'SIM';
                } else {
                    $resMapa[$i]['ST_ACOMPANHADO'] = 'NÃO';
                }
            }

        } else {
            //SE A CONSULTA de beneficiarios que não tem acompanhamento ou tiveram acompanhamento registrado com motivo de não acompanhado
            $filtro['V.NU_VIGENCIA'] = $this->session->NU_VIGENCIA;
            $filtro['MAPA.CO_BFA_MAPA'] = $resultRlMapa['CO_BFA_MAPA'];
            $resMapa = $this->Mapa->gerarMapaNaoAcomp($filtro);
        }

        return $this->toJson($resMapa);
    }

    public function listaBairros()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Domicilio');
        $result = $this->Domicilio->retornarBairros($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        $this->toJson($result);
    }

    public function listaLogradouro()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Domicilio');
        $this->load->model('Area');
        $area = $this->Area->retornarBairroVinculado($this->uri->segment(3),$this->session->CO_MUNICIPIO_IBGE);
        if($area){
            $result = $this->Domicilio->retornarLogradouroArea($this->session->CO_MUNICIPIO_IBGE, $area['EXISTE']);
        }else{
            $result = $this->Domicilio->retornarLogradouro($this->session->CO_MUNICIPIO_IBGE, str_replace("_", " ",$this->uri->segment(3) ));
        }

        $this->toJson($result);
    }

    public function consultaEasVisiveis()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Estabelecimento');
        $result = $this->Estabelecimento->buscaEasVisivel($this->session->CO_MUNICIPIO_IBGE);
        $this->toJson($result);
    }

    public function consultaProfissionaisEasVisiveis()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Estabelecimento');
        $result = $this->Estabelecimento->buscaProfissionaisEasVisivel($this->uri->segment(3));
        $this->toJson($result);
    }

    public function consultaPovosIndigenas()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Regiaosaude');
        $result = $this->Regiaosaude->retornarPovosIndigenas($this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);
        $this->toJson($result);
    }

    protected function filtroDados($filtros)
    {
        $result = array();
        foreach ($filtros as $index => $filtro) {
            if (trim($filtro) !== '') {
                $result[$index] = $filtro;
            }
        }
        return $result;
    }

    public function mapa()
    {
        $this->verificarSessaoAtiva();
        $dados = $this->input->post();
        if ($this->uri->segment(3)) {
            $dados['CO_SEQ_BFA_MAPA'] = $this->uri->segment(3);
            $dados['TP_MAPA'] = 9;
        }
//        var_dump($dados); die;
        $download = isset($dados['download']);
        if ($download) {
            unset($dados['download']);
        }
        $this->load->model('Mapa');
        $this->load->model('Rlpessoamapa');
        $msgErro = '';

        if ($dados['CO_SEQ_BFA_MAPA']) {
            $codMapa = [];
            $codMapa['A.CO_SEQ_BFA_MAPA'] = $dados['CO_SEQ_BFA_MAPA'];
            $result = $this->Mapa->consultarMapaPorId($codMapa);
            $msgErro .= 'Código do mapa inválido ou sem registros! <br>';
            if ($result['CO_MUNICIPIO_IBGE'] == $this->session->CO_MUNICIPIO_IBGE) {
                $resMapa = $this->Mapa->gerarMapa($result['DS_SQL'], json_decode($result['DS_PARAMETROS'], 1));
            }

        } else {
            $dadosJsonFitros = json_encode($this->filtroDados($dados));
            $filtro['V.NU_VIGENCIA'] = $this->session->NU_VIGENCIA;
            $result = $this->Mapa->consultarPorFiltro($dadosJsonFitros, $this->session->CO_MUNICIPIO_IBGE, $this->session->NU_VIGENCIA);

            //FILTROS FIXOS
            $filtro['ST_ACOMPANHAMENTO'] = $dados['ST_ACOMPANHAMENTO'];
            $filtro['P.CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;
            //ACESSANDO O SELECT CORRETO PARA CADA FILTRO
            $resMapa = $this->gerarMapaPorTipo($dados, $filtro);
            // SALVANDO NA TB_BFA_MAPA A CONSULTA
            if ($resMapa) {
                $dadosTbMapa['DS_SQL'] = trim($this->Mapa->getSql());
                $dadosTbMapa['DS_PARAMETROS'] = json_encode($this->Mapa->getParameters());
                $dadosTbMapa['CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;
                $dadosTbMapa['NU_VIGENCIA'] = $this->session->NU_VIGENCIA;
                $dadosTbMapa['CO_PESSOA_FISICA'] = $this->session->CO_PESSOA_FISICA;
                $dadosTbMapa['DS_FILTROS'] = $dadosJsonFitros;
                $dadosTbMapa['DT_CADASTRO'] = 'SYSDATE';
                $insert = $this->Mapa->insert($dadosTbMapa);
                $result = $this->Mapa->consultarMapaPorId(array('CO_SEQ_BFA_MAPA' => $this->Mapa->id));
                // SALVANDO NA RLBFA_PESSOA_MAPA CASO O ST_ACOMPANHAMENTO FOR DIFERENTE DE TODOS.
                if ($insert) {
                    foreach ($resMapa as $index => $pessoa) {
                        $dadosRl['CO_BFA_MAPA'] = $this->Mapa->id;
                        $dadosRl['CO_BFA_PESSOA'] = $pessoa['CO_SEQ_BFA_PESSOA'];
                        $this->Rlpessoamapa->insert($dadosRl);
                    }
                }
            }
        }

        if (!isset($resMapa)) {
            $this->session->set_flashdata('MSG_RETORNO', $msgErro);
            redirect('mapaacompanhamento');
        }elseif ($resMapa == null){
            $msgErro = 'Nenhum registro encontrado!';
            $this->session->set_flashdata('MSG_RETORNO', $msgErro);
            redirect('mapaacompanhamento');
        }else{
            if($dados['tipoImpressao'] === 'XLS'){
                return $this->mostrarExcelMapa($resMapa, $result, $this->retornarTipoDeMapa($dados['TP_MAPA']));
            }elseif($dados['tipoImpressao'] === 'HTML'){
                return $this->mostrarExcelHTml($resMapa, $result, $this->retornarTipoDeMapa($dados['TP_MAPA']));
            }

        }
    }

    private function retornarTipoDeMapa($tipoMapa)
    {
        $resTitulo = '';
        switch ($tipoMapa) {
            case 1:
                $resTitulo = 'Mapa de Fam&iacute;lias por Bairro';
                break;
            case 2:
                $resTitulo = 'Mapa de Fam&iacute;lias por Estabelecimento de Aten&ccedil;&atilde;o &agrave; Sa&uacute;de';
                break;
            case 3:
                $resTitulo = 'Mapa por Unidade Familiar';
                break;
            case 4:
                $resTitulo = 'Mapa de Fam&iacute;lias com o campo Bairro em branco (acompanhamento n&atilde;o obrigat&oacute;rio)';
                break;
            case 5:
                $resTitulo = 'Mapa de Fam&iacute;lias n&atilde;o vinculadas ao EAS';
                break;
            case 6:
                $resTitulo = 'Mapa de Fam&iacute;lias com mulheres vindas no arquivo complementar (acompanhamento n&atilde;o obrigat&oacute;rio)';
                break;
            case 7:
                $resTitulo = 'Mapa de Fam&iacute;lias Quilombolas';
                break;
            case 8:
                $resTitulo = 'Mapa de Fam&iacute;lias Ind&iacute;genas';
                break;
            case 9:
                $resTitulo = 'Mapa Por C&oacute;digo';
                break;
        }
        return $resTitulo;
    }

    private function gerarMapaPorTipo($dados, $filtro)
    {
        $result = array();
        $this->load->model('Mapa');
        switch ($dados['TP_MAPA']) {
            case 1:
                $this->load->model('Area');
                $resArea = $this->Area->retornarBairroVinculado($dados['NO_BAIRRO'], $this->session->CO_MUNICIPIO_IBGE);
                if ($resArea) {
                    $filtro['A.NO_AREA'] = $dados['NO_BAIRRO'];
                } else {
                    $filtro['D.NO_BAIRRO'] = $dados['NO_BAIRRO'];
                }                
                $filtro['D.NO_LOGRADOURO'] = $dados['NO_LOGRADOURO'];
                $result = $this->Mapa->gerarMapaBairro($filtro);
                break;
            case 2:
                $filtro['EAS.CO_CNES'] = $dados['CO_CNES_ATENDIMENTO'];
                $filtro['P.CO_CNS_PROF_VISIVEL'] = $dados['CO_CNS_PROFISSIONAL'];
                $result = $this->Mapa->gerarMapaEas($filtro);
                break;
            case 3:
                $this->load->model('Pessoa');
                $coBfaFamilia = $this->Pessoa->buscaCoBfaFamiliaNuNisPessoa($dados['NU_NIS'], $this->session->NU_VIGENCIA);
                $filtro['P.CO_BFA_FAMILIA'] = $coBfaFamilia['CO_BFA_FAMILIA'];
                $result = $this->Mapa->gerarMapaUnidadeFamiliar($filtro);
                break;
            case 4:
                $result = $this->Mapa->gerarMapaBairroEmBranco($filtro);
                break;
            case 5:
                $this->load->model('Area');
                $resArea = $this->Area->retornarBairroVinculado($dados['NO_BAIRRO'], $this->session->CO_MUNICIPIO_IBGE);
                if ($resArea) {
                    $filtro['A.NO_AREA'] = $dados['NO_BAIRRO'];
                } else {
                    $filtro['D.NO_BAIRRO'] = $dados['NO_BAIRRO'];
                }
                $filtro['D.NO_LOGRADOURO'] = $dados['NO_LOGRADOURO'];
                $result = $this->Mapa->gerarMapaEasNaoVinculada($filtro);
                break;
            case 6:
                $result = $this->Mapa->gerarMapaArquivoComplementar($filtro);
                break;
            case 7:
                $result = $this->Mapa->gerarMapaQuilombola($filtro);
                break;
            case 8:
                if ($dados['CO_ETNIA'] != 99) {
                    $filtro['F.NO_POVO_INDIGENA'] = $dados['CO_ETNIA'];
                }
                $result = $this->Mapa->gerarMapaIndigena($filtro);
                break;
            case 9:
                $result = '';
                break;
        }
        return $result;
    }

    private function mostrarExcelMapa($resFamilia, $resultMapa, $tituloMapa)
    {
        header("Content-type: application/vnd.ms-excel");
        header("Content-type: application/force-download");
        header("Content-Disposition: attachment; filename=mapa_acompanhamento_bfa_codigo_".($resultMapa['CO_SEQ_BFA_MAPA']).".xls");
        header("Pragma: no-cache");
        header('X-Accel-Buffering: no');
        echo $this->load->view('mapa/gerar_pdf', array(
            'grupoFamilia' => $this->agruparFamiliar($resFamilia),
            'resMapa' => $resultMapa,
            'resTitulo' => $tituloMapa,
            'countPessoas' => count($resFamilia)
        ), true);
        exit;
    }

    private function mostrarExcelHTml($resFamilia, $resultMapa, $tituloMapa)
    {
        header("Content-type: application/force-download");
        header("Content-Disposition: attachment; filename=mapa_acompanhamento_bfa_codigo_".($resultMapa['CO_SEQ_BFA_MAPA']).".html");
        header("Pragma: no-cache");
        header('X-Accel-Buffering: no');
        echo $this->load->view('mapa/gerar_html', array(
            'grupoFamilia' => $this->agruparFamiliar($resFamilia),
            'resMapa' => $resultMapa,
            'resTitulo' => $tituloMapa,
            'countPessoas' => count($resFamilia)
        ), true);
        exit;
    }

    private function mostrarTelaMapa($resFamilia, $resultMapa, $tituloMapa, $dados)
    {
        $dados['download'] = true;
        $this->load->templateMapa('mapa/gerar', array(
            'grupoFamilia' => $this->agruparFamiliar($resFamilia),
            'resMapa' => $resultMapa,
            'resTitulo' => $tituloMapa,
            'impressao' => $dados,
            'countPessoas' => count($resFamilia)
        ));

    }

    protected function agruparFamiliar($mapa)
    {
        $arrMapaNovo = array();
        foreach ($mapa as $i => $m) {
            $arrMapaNovo[$m['CO_BFA_FAMILIA']]['CO_FAMILIA'] = $m['CO_BFA_FAMILIA'];
            $arrMapaNovo[$m['CO_BFA_FAMILIA']]['DS_ENDERECO'] = $m['DS_ENDERECO'];
            $arrMapaNovo[$m['CO_BFA_FAMILIA']]['DS_EAS'] = $m['DS_EAS'];
            $arrMapaNovo[$m['CO_BFA_FAMILIA']]['DS_PROFISSIONAL'] = $m['DS_PROFISSIONAL'];
            unset($mapa[$i]['DS_ENDERECO']);
            unset($mapa[$i]['DS_EAS']);
            unset($mapa[$i]['DS_PROFISSIONAL']);
            $arrMapaNovo[$m['CO_BFA_FAMILIA']]['PESSOAS'] = array();
        }
        foreach ($arrMapaNovo as $index => $mn) {
            foreach ($mapa as $m) {
                if ($index == $m['CO_BFA_FAMILIA']) {
                    $arrMapaNovo[$index]['PESSOAS'][] = $m;
                }
            }
        }
        return $arrMapaNovo;
    }

}
