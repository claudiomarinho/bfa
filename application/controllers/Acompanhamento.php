<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acompanhamento extends MY_Controller
{
    public function index()
    {
        $this->verificarSessaoAtiva();
        $this->load->template('acompanhamento/localiza');
    }

    public function cadastro()
    {
        $this->verificarSessaoAtiva();
        $this->verificarPrazo();
        $coIndividuo = $this->uri->segment(3);
        if ($coIndividuo === null) {
            $this->msgAlertParamentrosUrl('Acompanhamento Cadastro', 'Código do Individuo');
            redirect('/principal');
        }
        $this->load->model('Pessoa');
        $result = $this->Pessoa->buscaIndividuoCompleto($this->uri->segment(3),$this->session->NU_VIGENCIA);
        $result['CO_MAPA'] = ($this->uri->segment(4) ? $this->uri->segment(4) : 0);

        $this->load->model('Contadias');
        $idade = $this->Contadias->getIdadeDias($result['CO_SEQ_BFA_PESSOA'],date('d/m/Y'));
        $idadeDias = $this->Contadias->calculaDias(date('d/m/Y'), $result['DT_NASCIMENTO']);

        $this->load->template('acompanhamento/cadastro', array('individuo' => $result, 'idade' => $idade, 'idadeDias' => $idadeDias));
    }

    public function consultaAcompanhamento()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Tbacompanhamento');
        $result = $this->Tbacompanhamento->retornaPessoaAcompanhamento($this->uri->segment(3),$this->session->NU_VIGENCIA);

        $this->load->model('Contadias');
        $idadeDias = $this->Contadias->calculaDias(date('d/m/Y'), $result['DT_NASCIMENTO']);
        $result['IDADE_DIAS'] = $idadeDias['QT_DIAS'];

        $this->toJson($result);
    }

    public function consultaLimites()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Limites');
        $result = $this->Limites->buscaLimites($this->uri->segment(3));
        $this->toJson($result);
    }

    public function consultaIdadeDias()
    {
        $this->verificarSessaoAtiva('json');
        $dateAcomp = $this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5);
        $this->load->model('Tbacompanhamento');
        $result = $this->Tbacompanhamento->retornaPessoaAcompanhamento($this->uri->segment(6),$this->session->NU_VIGENCIA);

        $this->load->model('Contadias');
        $idadeDias = $this->Contadias->calculaDias($dateAcomp, $result['DT_NASCIMENTO']);
        $result['IDADE_DIAS'] = $idadeDias['QT_DIAS'];

        $this->toJson($result['IDADE_DIAS']);
    }

    public function familiar()
    {
        $this->verificarSessaoAtiva();
        $this->load->setTituloPag('Bolsa Familia - Acompanhamento - Familiar');
        $coFamilia = $this->uri->segment(3);
        if ($coFamilia === null) {
            $this->msgAlertParamentrosUrl('Acompanhemento familiar', 'Código Familiar');
            redirect('/principal');
        }
        $this->load->template('acompanhamento/familiar', array('CO_FAMILIA' => $coFamilia));
    }

    public function listaIndividuosFamilia()
    {
        $this->verificarSessaoAtiva('json');
        $coFamilia = $this->uri->segment(3);
        $this->load->model('Familia');
        $result = $this->Familia->buscaIndividuosFamilia($coFamilia, $this->session->NU_VIGENCIA);
        $this->toJson($result);
    }

    public function consultaMotivosNaoAcomp()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Motivos');
        $result = $this->Motivos->retornaBuscaMotivos();
        $this->toJson($result);
    }

    public function consultaMotivosDescrumprimento()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Motivos');
        $result = $this->Motivos->retornaBuscaMotivosDescumprimento($this->uri->segment(3));
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

    public function consultaEstabelecimentoDsei()
    {
        //Não precisa de sessão, os DSEIS são iguais para todos os estados
        //$this->verificarSessaoAtiva('json');
        $this->load->model('Regiaosaude');
        $result = $this->Regiaosaude->retornarDsei();
        $this->toJson($result);
    }

    public function consultarMunicipioAcomp()
    {
        $this->verificarSessaoAtiva('json');
        $this->load->model('Pessoa');
        $individuo = $this->Pessoa->buscaIndividuoCompleto($this->uri->segment(3),$this->session->NU_VIGENCIA);
        $result = 'N';
        if ($individuo['CO_MUNICIPIO_IBGE'] == $this->session->CO_MUNICIPIO_IBGE) {
            $result = 'S';
        }

        $this->toJson($result);
    }

    //#######################################################################
    //############################ SALVAR INICIO ############################
    //#######################################################################

    public function salvar()
    {
        $this->verificarSessaoAtiva('json');
        $dados = $this->postJson();

        $this->load->model('Tbacompanhamento');
        $dados['ID'] = $this->Tbacompanhamento->retornaCoSeqAcompanhamento($dados['CO_SEQ_BFA_PESSOA'],$this->session->NU_VIGENCIA);
        $resultAcomp = $this->tbAcompanhamento($dados);
        $resultRl = $this->rlPessoaAcompanhamento($dados,($dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] ? $dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] : $resultAcomp));
        $resultPessoa = $this->tbPessoa($dados);

        $resultRlGestante = true;
        $resultPessoaGestante = true;
        if ($dados['ST_ACOMPANHADO'] == 'S') {
            if ($dados['TP_PESSOA'] == 4) {
                $resultRlGestante = $this->tbGestanteAcompanhamento($dados,($dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] ? $dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] : $resultAcomp));
                $resultPessoaGestante = $this->tbPessoaGestante($dados,($dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] ? $dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] : $resultAcomp));
            }
        }

        $this->toJson($resultAcomp && $resultRl && $resultRlGestante && $resultPessoa && $resultPessoaGestante);
    }

    protected function tbAcompanhamento($dados)
    {
        $this->load->model('Tbacompanhamento');
        $this->Tbacompanhamento->beginTransaction();

        $save = array();
        if ($dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO']) {
            $save['CO_SEQ_BFA_ACOMPANHAMENTO'] = $dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'];
            $save['DT_ATUALIZACAO'] = 'SYSDATE';
        }
        $save['CO_PESSOA_FISICA'] = $this->session->CO_PESSOA_FISICA;
        $save['CO_SISTEMA_ORIGEM_ACOMP'] = 2;
        $save['ST_PESSOA_NAO_ACOMPANHADA'] = $dados['ST_ACOMPANHADO'];
        $save['CO_MUNICIPIO_IBGE'] = $this->session->CO_MUNICIPIO_IBGE;

        $mesCompetencia = substr($dados['DT_ACOMPANHAMENTO'], 3, 2);
        $anoCompetencia = substr($dados['DT_ACOMPANHAMENTO'], 6, 4);
        $save['NU_COMPETENCIA'] = $anoCompetencia.$mesCompetencia;

        // SE FOI ACOMPANHADO
        if ($dados['ST_ACOMPANHADO'] == 'S') {
            $save['ST_BFA'] = "S";
            $this->load->model('Calculonutricional');
            $this->load->model('Contadias');

            if (isset($dados['NU_ALTURA']) && ($dados['NU_ALTURA'] != 0)) {
                $estaturaImc = ($dados['NU_ALTURA'] / 100);
                $dsPesoIMC = $dados['NU_PESO'];
                $estaturaImc = ($estaturaImc * $estaturaImc);
                $imc = $dsPesoIMC / $estaturaImc;
                $dsImc = round($imc, 2);
                $save['NU_IMC'] = $dsImc;
            }

            $dias = $this->Contadias->getIdadeDias($dados['CO_SEQ_BFA_PESSOA'], $dados['DT_ACOMPANHAMENTO']);
            $qtDias = $dias['QT_IDADE_DIAS'];
            $save['QT_IDADE_DIAS'] = $qtDias;
            $save['NU_IDADE_ANO'] = $dias['NU_IDADE_ANO'];
            $save['NU_IDADE_MES'] = $dias['NU_IDADE_MES'];
            $save['NU_IDADE_DIA'] = $dias['NU_IDADE_DIA'];

            if ($dados['DS_SEXO'] == 'FEMININO') {
                $tpSexo = 'F';
            } else {
                $tpSexo = 'M';
            }

            $nuSemanaGestacional = '';
            if (isset($dados['ST_GESTANTE']) && ($dados['ST_GESTANTE'] != 'N')) {
                if (isset($dados['DT_ULTIMA_MENSTRUACAO'])) {
                    $diasGestacao = $this->Contadias->calculaDias($dados['DT_ACOMPANHAMENTO'], $dados['DT_ULTIMA_MENSTRUACAO']);
                    $semanasGestacao = $diasGestacao['QT_DIAS'] / 7;
                    $nuSemanaGestacional = round($semanasGestacao, 0);
                    $save['NU_SEMANA_GESTACIONAL'] = $nuSemanaGestacional;
                }
                $coEstadoNutri = $this->Calculonutricional->calculoNutri('5', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], round($dsImc, 1), $nuSemanaGestacional);
                $save['NU_ESTADO_NUTRI_GESTANTE'] = $coEstadoNutri['CO_ESTADO_NUTRI'];
            }

            if (($qtDias > 0) && ($qtDias <= 3650) && ($dados['NU_ALTURA'] != 0)) {
                $coEstadoNutri = $this->Calculonutricional->calculoNutri('1', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], $dsImc, $nuSemanaGestacional);
                $save['NU_ESTADO_NUTRI_AXI_OMS'] = $coEstadoNutri['CO_ESTADO_NUTRI'];

                $coEstadoNutri = $this->Calculonutricional->calculoNutri('3', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], $dsImc, $nuSemanaGestacional);
                $save['NU_ESTADO_NUTRI_PXI_OMS'] = $coEstadoNutri['CO_ESTADO_NUTRI'];

                $coEstadoNutri = $this->Calculonutricional->calculoNutri('4', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], $dsImc, $nuSemanaGestacional);
                $save['NU_ESTADO_NUTRI_IMCXI_OMS'] = $coEstadoNutri['CO_ESTADO_NUTRI'];

                if (($qtDias > 0) && ($qtDias <= 1856)) {
                    $coEstadoNutri = $this->Calculonutricional->calculoNutri('2', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], $dsImc, $nuSemanaGestacional);
                    $save['NU_ESTADO_NUTRI_PXA_OMS'] = $coEstadoNutri['CO_ESTADO_NUTRI'];
                }

            } elseif (($qtDias > 3650) && ($qtDias <= 7300) && ($dados['NU_ALTURA'] != 0)) {
                $coEstadoNutri = $this->Calculonutricional->calculoNutri('1', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], $dsImc, $nuSemanaGestacional);
                $save['NU_ESTADO_NUTRI_AXI_OMS'] = $coEstadoNutri['CO_ESTADO_NUTRI'];

                $coEstadoNutri = $this->Calculonutricional->calculoNutri('4', $tpSexo, $qtDias, $dados['NU_ALTURA'], $dados['NU_PESO'], $dsImc, $nuSemanaGestacional);
                $save['NU_ESTADO_NUTRI_IMCXI_OMS'] = $coEstadoNutri['CO_ESTADO_NUTRI'];

            } elseif (($qtDias > 7300) && ($qtDias <= 21900) && ($dados['NU_ALTURA'] != 0)) {
                $save['NU_ESTADO_NUTRI_ADULTO'] = $this->Calculonutricional->getCalculoNutriAdulto($dsImc);

            } elseif (($qtDias > 21900) && ($dados['NU_ALTURA'] != 0)) {
                $save['NU_ESTADO_NUTRI_IDOSO'] = $this->Calculonutricional->getCalculoNutricionalIdoso($dsImc);
            }
            
            $save['CO_BFA_MOTIVO_NAO_ACOMP'] = "";

            $save['CO_CNES_ATENDIMENTO'] = $dados['CO_CNES_ATENDIMENTO'];
            $save['CO_CNS_PROFISSIONAL'] = $dados['CO_CNS_PROFISSIONAL'];
            if ($dados['ST_MEDIDAS'] == 'S' && $dados['NU_PESO'] !== 0 && $dados['NU_ALTURA'] !== 0) {
                $save['CO_BFA_MOTIVO_NUTRI_CRIANCA'] = "";
                $save['NU_PESO'] = $dados['NU_PESO'];
                $save['NU_ALTURA'] = $dados['NU_ALTURA'];
            } else {
                $save['CO_BFA_MOTIVO_NUTRI_CRIANCA'] = $dados['CO_BFA_MOTIVO_NUTRI_CRIANCA'];
                $save['NU_PESO'] = "";
                $save['NU_ALTURA'] = "";
            }
            if ($dados['ST_VACINACAO'] == 'S') {
                $save['ST_VACINACAO'] = 'S';
                $save['CO_BFA_MOTIVO_VACINACAO'] = "";
            } else {
                $save['ST_VACINACAO'] = 'N';
                $save['CO_BFA_MOTIVO_VACINACAO'] = $dados['CO_BFA_MOTIVO_VACINACAO'];
            }
            $save['CO_DSEI'] = $dados['CO_DSEI'];

            //SE FOR MULHER APTA A SER GESTANTE

            if ($dados['TP_PESSOA'] == 4) {
                if ($dados['ST_GESTANTE'] == 'S') {
                    $save['ST_GESTANTE'] = 'S';
                    $save['DT_ULTIMA_MENSTRUACAO'] = $dados['DT_ULTIMA_MENSTRUACAO'];
                    if ($dados['ST_PRE_NATAL'] == 'S') {
                        $save['ST_PRE_NATAL'] = 'S';
                        $save['CO_BFA_MOTIVO_PRE_NATAL'] = "";
                    } else {
                        $save['ST_PRE_NATAL'] = 'N';
                        $save['CO_BFA_MOTIVO_PRE_NATAL'] = $dados['CO_BFA_MOTIVO_PRE_NATAL'];
                    }
                } else {
                    $save['ST_GESTANTE'] = 'N';
                    $save['DT_ULTIMA_MENSTRUACAO'] = null;
                    $save['ST_PRE_NATAL'] = 'N';
                    $save['CO_BFA_MOTIVO_PRE_NATAL'] = null;
                    $save['NU_SEMANA_GESTACIONAL'] = null;
                }
            }
            //SE NÃO FOI ACOMPANHADO, LIMPA CAMPOS PRENCHIDOS
        } else {
            $save['ST_BFA'] = "N";
            $save['CO_BFA_MOTIVO_NAO_ACOMP'] = $dados['CO_BFA_MOTIVO_NAO_ACOMP'];
            $save['CO_BFA_MOTIVO_NUTRI_CRIANCA'] = null;
            $save['NU_PESO'] = null;
            $save['NU_ALTURA'] = null;
            $save['ST_VACINACAO'] = 'I';
            $save['CO_BFA_MOTIVO_VACINACAO'] = null;
            $save['ST_GESTANTE'] = 'I';
            $save['DT_ULTIMA_MENSTRUACAO'] = null;
            $save['ST_PRE_NATAL'] = 'I';
            $save['CO_BFA_MOTIVO_PRE_NATAL'] = null;
            $save['CO_CNES_ATENDIMENTO'] = null;
            $save['CO_CNS_PROFISSIONAL'] = null;
        }

        try {
            if (isset($save['CO_SEQ_BFA_ACOMPANHAMENTO'])) {
                $this->Tbacompanhamento->update($save);
            } else {
                $this->Tbacompanhamento->insert($save);
            }
            $this->Tbacompanhamento->commit();
            $result = true;
        } catch (PDOException $e) {
            $this->Tbacompanhamento->rollback();
            $result = ['status' => false, 'msg' => $e->getMessage()];
        }

        if($result){
            return ($this->Tbacompanhamento->id === null ? $dados['ID']['CO_SEQ_BFA_ACOMPANHAMENTO'] : $this->Tbacompanhamento->id);
        }
    }

    protected function rlPessoaAcompanhamento($dados,$resultAcomp)
    {
        $mesCompetencia = substr($dados['DT_ACOMPANHAMENTO'], 3, 2);
        $anoCompetencia = substr($dados['DT_ACOMPANHAMENTO'], 6, 4);
        $this->load->model('Pessoaacompanhamento');
        $existe = $this->Pessoaacompanhamento->retornaExisteDados($dados['CO_SEQ_BFA_PESSOA'], $resultAcomp);
        $this->Pessoaacompanhamento->beginTransaction();
        try {
            if (isset($existe['CO_BFA_ACOMPANHAMENTO'])) {
                $this->Pessoaacompanhamento->update(array(
                        'CO_BFA_ACOMPANHAMENTO' => $resultAcomp,
                        'CO_BFA_PESSOA' => $dados['CO_SEQ_BFA_PESSOA'],
                        'DT_ACOMPANHAMENTO' => $dados['DT_ACOMPANHAMENTO'],
                        'NU_ANO' => $anoCompetencia,
                        'NU_MES' => $mesCompetencia,
                        'NU_COMPETENCIA' => $anoCompetencia.$mesCompetencia,
                        'ST_ANO' => 'S',
                        'ST_MES' => 'S',
                        'NU_VIGENCIA' => $this->session->NU_VIGENCIA
                    )
                );
            } else {
                $this->Pessoaacompanhamento->insert(array(
                        'CO_BFA_ACOMPANHAMENTO' => $resultAcomp,
                        'CO_BFA_PESSOA' => $dados['CO_SEQ_BFA_PESSOA'],
                        'DT_ACOMPANHAMENTO' => $dados['DT_ACOMPANHAMENTO'],
                        'NU_ANO' => $anoCompetencia,
                        'NU_MES' => $mesCompetencia,
                        'NU_COMPETENCIA' => $anoCompetencia.$mesCompetencia,
                        'ST_ANO' => 'S',
                        'ST_MES' => 'S',
                        'NU_VIGENCIA' => $this->session->NU_VIGENCIA
                    )
                );
            }

            $this->Pessoaacompanhamento->commit();
            $result = true;
        } catch (PDOException $e) {
            $this->Pessoaacompanhamento->rollback();
            $result = ['status' => false, 'msg' => $e->getMessage()];
        }
        return $result;
    }

    protected function tbGestanteAcompanhamento($dados,$resultAcomp)
    {
        $this->load->model('Gestanteacompanhamento');
        $existeHistorico = $this->Gestanteacompanhamento->retornaAcompanhamentosGestante($resultAcomp);
        if ($existeHistorico || $dados['ST_GESTANTE'] == 'S') {
            $this->Gestanteacompanhamento->beginTransaction();
            try {
                $this->Gestanteacompanhamento->insert(array(
                        'CO_BFA_ACOMPANHAMENTO' => $resultAcomp,
                        'CO_PESSOA_FISICA' => $this->session->CO_PESSOA_FISICA,
                        'DT_CADASTRO' => 'SYSDATE',
                        'ST_GESTANTE' => $dados['ST_GESTANTE'],
                        'ST_REGISTRO_ATIVO' => 'S',
                        'NU_VIGENCIA' => $this->session->NU_VIGENCIA
                    )
                );
                $this->Gestanteacompanhamento->commit();
                $result = true;
            } catch (PDOException $e) {
                $this->Gestanteacompanhamento->rollback();
                $result = ['status' => false, 'msg' => $e->getMessage()];
            }
            return $result;
        } else {
            return true;
        }
    }

    protected function tbPessoaGestante($dados,$resultAcomp)
    {
        $this->load->model('Gestanteacompanhamento');
        $existeHistorico = $this->Gestanteacompanhamento->retornaAcompanhamentosGestante($resultAcomp);
        if ($existeHistorico || $dados['ST_GESTANTE'] == 'S') {

            $this->load->model('Pessoa');
            $this->Pessoa->beginTransaction();
            try {
                $this->Pessoa->update(array(
                        'CO_SEQ_BFA_PESSOA' => $dados['CO_SEQ_BFA_PESSOA'],
                        'ST_GESTANTE' => $dados['ST_GESTANTE']
                    )
                );
                $this->Pessoa->commit();
                $result = true;
            } catch (PDOException $e) {
                $this->Pessoa->rollback();
                $result = ['status' => false, 'msg' => $e->getMessage()];
            }
            return $result;
        } else {
            return true;
        }
    }

    protected function tbPessoa($dados)
    {
        $falecido = "N";
        $easVisivel = null;
        $cnsProf = null;

        $this->load->model('Pessoa');
        $pessoa = $this->Pessoa->buscaIndividuo($dados['CO_SEQ_BFA_PESSOA'],$this->session->NU_VIGENCIA);

        $this->load->model('Estabelecimento');
        $coCnes = $this->Estabelecimento->existeCnes($dados['CO_CNES_ATENDIMENTO']);

        if ($dados['CO_BFA_MOTIVO_NAO_ACOMP'] == '4') {
            $falecido = 'S';
        }

        if ($pessoa['CO_MUNICIPIO_IBGE'] == $this->session->CO_MUNICIPIO_IBGE) {
            $easVisivel = $coCnes['CO_SEQ_EAS_VISIVEL'];
            $cnsProf = $dados['CO_CNS_PROFISSIONAL'];
        }

        $this->Pessoa->beginTransaction();
        try {
        $this->Pessoa->update(array(
                'CO_SEQ_BFA_PESSOA' => $dados['CO_SEQ_BFA_PESSOA'],
                'CO_EAS_VISIVEL' => $easVisivel,
                'CO_CNS_PROF_VISIVEL' => $cnsProf,
                'ST_FALECIDO' => $falecido
            )
        );
            $this->Pessoa->commit();
            $result = true;
        } catch (PDOException $e) {
            $this->Pessoa->rollback();
            $result = ['status' => false, 'msg' => $e->getMessage()];
        }

        return $result;
    }
}