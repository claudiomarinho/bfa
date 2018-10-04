<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio extends MY_Controller
{
 
    public function index()
    {
//        $this->load->template('relatorios/index');
        $this->load->template('relatorios/aguarde');
    }

    public function consolidado()
    {
        $this->load->template('relatorios/consolidado');
    }

    public function individualizado()
    {
        $this->load->template('relatorios/individualizado');
    }

    public function geraRelatorioConsolidado()
    {
//        ini_set('max_execution_time', 0);
//        set_time_limit(0);
      //  $this->verificarSessaoAtiva('json');
        $dadosTela = $this->postJson();
        $nuVigencia = $dadosTela['vigencia'];
        $tpRelatorio = $dadosTela['tprelatorio'];
        $varWhere = $dadosTela['varwhere'];
        $noUf = $dadosTela['nouf'];
        $noMunicipio = $dadosTela['nomunicipio'];
        $coMunicipioIbge = $dadosTela['comunicipioibge'];
        $publico = $dadosTela['publico'];

        $arr = array();
        $i = 0;

        if ($tpRelatorio=='null') {
            $arr['data'][] = array();
        }
        else {
            $this->load->model('Relatorios');

            $arrResultado = $this->Relatorios->retornaConsolidadoTipo1($nuVigencia, $tpRelatorio, $varWhere, $publico);
            foreach ($arrResultado as $value) {
                $arr['data'][$i] = array(
                    "IDX_LISTA" => $i,
                    "REGIAO" => isset($value['REGIAO']) ? $value['REGIAO'] : '',
                    "NO_UF" => $noUf,
                    "IBGE" => $coMunicipioIbge,
                    "NO_MUNICIPIO" => $noMunicipio,
                    "NO_PESSOA_JURIDICA" => isset($value['NO_PESSOA_JURIDICA']) ? $value['NO_PESSOA_JURIDICA'] : '',
                    "CO_CNES" => isset($value['CO_CNES']) ? $value['CO_CNES'] : '',
                    "NO_EAS_VISIVEL" => isset($value['NO_EAS_VISIVEL']) ? $value['NO_EAS_VISIVEL'] : '',
                    "QTD_TOTAL_ACOMPANHAMENTOS" => $value["QTD_TOTAL_ACOMPANHAMENTOS"],
                    "QTD_BENEFICIARIOS_ACOMPANHADOS" => $value["QTD_BENEFICIARIOS_ACOMPANHADOS"],
                    "QTD_BENEFICIARIOS_VINCULADOS" => $value["QTD_BENEFICIARIOS_VINCULADOS"],
                    "QTD_BENEF_ACOMP_OBRIGATORIO" => $value["QTD_BENEF_ACOMP_OBRIGATORIO"],
                    "QTD_BENEF_OBR_A_SEREM_ACOMP" => $value["QTD_BENEF_OBR_A_SEREM_ACOMP"],
                    "QTD_BENEF_OBR_ACOMP" => $value["QTD_BENEF_OBR_ACOMP"],
                    "QTD_BENEF_ACOMP_NAO_OBRIGAT" => $value["QTD_BENEF_ACOMP_NAO_OBRIGAT"],
                    "QTD_BENEF_N_OBR_A_SEREM_ACOMP" => $value["QTD_BENEF_N_OBR_A_SEREM_ACOMP"],
                    "QTD_BENEF_N_OBR_ACOMP" => $value["QTD_BENEF_N_OBR_ACOMP"],
                    "QTD_BENEF_CRIAN_A_SEREM_ACOMP" => $value["QTD_BENEF_CRIAN_A_SEREM_ACOMP"],
                    "QTD_BENEF_CRIAN_ACOMP" => $value["QTD_BENEF_CRIAN_ACOMP"],
                    "QTD_CRIANCA_VACINACAO_EM_DIA" => $value["QTD_CRIANCA_VACINACAO_EM_DIA"],
                    "QTD_GESTANTE" => $value["QTD_GESTANTE"],
                    "QTD_GESTANTE_PRE_NATAL_EM_DIA" => $value["QTD_GESTANTE_PRE_NATAL_EM_DIA"],
                    "QTD_GESTANTE_DADOS_NUTRIC" => $value["QTD_GESTANTE_DADOS_NUTRIC"],
                    "QTD_INDIG_OBR_A_SEREM_ACOMP" => $value["QTD_INDIG_OBR_A_SEREM_ACOMP"],
                    "QTD_INDIG_OBR_ACOMP" => $value["QTD_INDIG_OBR_ACOMP"],
                    "QTD_INDIG_N_OBR_A_SEREM_ACOMP" => $value["QTD_INDIG_N_OBR_A_SEREM_ACOMP"],
                    "QTD_INDIG_N_OBR_ACOMP" => $value["QTD_INDIG_N_OBR_ACOMP"],
                    "QTD_QUILOM_OBR_A_SEREM_ACOMP" => $value["QTD_QUILOM_OBR_A_SEREM_ACOMP"],
                    "QTD_QUILOM_OBR_ACOMP" => $value["QTD_QUILOM_OBR_ACOMP"],
                    "QTD_QUILOM_N_OBR_A_SEREM_ACOMP" => $value["QTD_QUILOM_N_OBR_A_SEREM_ACOMP"],
                    "QTD_QUILOM_N_OBR_ACOMP" => $value["QTD_QUILOM_N_OBR_ACOMP"],
                    "QTD_BENEF_NAO_ACOMPANHADO" => $value["QTD_BENEF_NAO_ACOMPANHADO"],
                    "QTD_BEN_N_ACOMP_MOT_AUS" => $value["QTD_BEN_N_ACOMP_MOT_AUS"],
                    "QTD_BEN_N_ACOMP_MOT_N_RESIDE" => $value["QTD_BEN_N_ACOMP_MOT_N_RESIDE"],
                    "QTD_BEN_N_ACOMP_MOT_MUDOU" => $value["QTD_BEN_N_ACOMP_MOT_MUDOU"],
                    "QTD_BEN_N_ACOMP_MOT_FALEC" => $value["QTD_BEN_N_ACOMP_MOT_FALEC"],
                    "QTD_BEN_N_ACOMP_MOT_END_INCOR" => $value["QTD_BEN_N_ACOMP_MOT_END_INCOR"],
                    "QTD_NUTRI_DESC_COND_IMPEDEM" => $value["QTD_NUTRI_DESC_COND_IMPEDEM"],
                    "QTD_NUTRI_DESC_IMPEDE_ACESS" => $value["QTD_NUTRI_DESC_IMPEDE_ACESS"],
                    "QTD_NUTRI_DESC_HORARIO" => $value["QTD_NUTRI_DESC_HORARIO"],
                    "QTD_NUTRI_DESC_RESP_NAO_CUM" => $value["QTD_NUTRI_DESC_RESP_NAO_CUM"],
                    "QTD_NUTRI_DESC_NAO_COLETA" => $value["QTD_NUTRI_DESC_NAO_COLETA"],
                    "QTD_NUTRI_DESC_FALTA_EQUIP" => $value["QTD_NUTRI_DESC_FALTA_EQUIP"],
                    "QTD_NUTRI_DESC_FALTA_PROF" => $value["QTD_NUTRI_DESC_FALTA_PROF"],
                    "QTD_NUTRI_DESC_RESP_N_COMP" => $value["QTD_NUTRI_DESC_RESP_N_COMP"],
                    "QTD_NUTRI_DESC_RECUSA_ACOMP" => $value["QTD_NUTRI_DESC_RECUSA_ACOMP"],
                    "QTD_NUTRI_DESC_RISCO_SOC" => $value["QTD_NUTRI_DESC_RISCO_SOC"],
                    "QTD_NUTRI_DESC_FORA_PROG" => $value["QTD_NUTRI_DESC_FORA_PROG"],
                    "QTD_VACI_DESC_COND_IMPEDEM" => $value["QTD_VACI_DESC_COND_IMPEDEM"],
                    "QTD_VACI_DESC_IMPEDE_ACESS" => $value["QTD_VACI_DESC_IMPEDE_ACESS"],
                    "QTD_VACI_DESC_HORARIO" => $value["QTD_VACI_DESC_HORARIO"],
                    "QTD_VACI_DESC_RESP_NAO_CUM" => $value["QTD_VACI_DESC_RESP_NAO_CUM"],
                    "QTD_VACI_DESC_NAO_COLETA" => $value["QTD_VACI_DESC_NAO_COLETA"],
                    "QTD_VACI_DESC_FALTA_EQUIP" => $value["QTD_VACI_DESC_FALTA_EQUIP"],
                    "QTD_VACI_DESC_FALTA_PROF" => $value["QTD_VACI_DESC_FALTA_PROF"],
                    "QTD_VACI_DESC_RESP_N_COMP" => $value["QTD_VACI_DESC_RESP_N_COMP"],
                    "QTD_VACI_DESC_RECUSA_ACOMP" => $value["QTD_VACI_DESC_RECUSA_ACOMP"],
                    "QTD_VACI_DESC_RISCO_SOC" => $value["QTD_VACI_DESC_RISCO_SOC"],
                    "QTD_VACI_DESC_FORA_PROG" => $value["QTD_VACI_DESC_FORA_PROG"],
                    "QTD_VACI_DESC_COND_ESPEC" => $value["QTD_VACI_DESC_COND_ESPEC"],
                    "QTD_VACI_DESC_FALTA_VACI" => $value["QTD_VACI_DESC_FALTA_VACI"],
                    "QTD_PRENAT_DESC_COND_IMPEDEM" => $value["QTD_PRENAT_DESC_COND_IMPEDEM"],
                    "QTD_PRENAT_DESC_IMPEDE_ACESS" => $value["QTD_PRENAT_DESC_IMPEDE_ACESS"],
                    "QTD_PRENAT_DESC_HORARIO" => $value["QTD_PRENAT_DESC_HORARIO"],
                    "QTD_PRENAT_DESC_RESP_NAO_CUM" => $value["QTD_PRENAT_DESC_RESP_NAO_CUM"],
                    "QTD_PRENAT_DESC_NAO_COLETA" => $value["QTD_PRENAT_DESC_NAO_COLETA"],
                    "QTD_PRENAT_DESC_FALTA_EQUIP" => $value["QTD_PRENAT_DESC_FALTA_EQUIP"],
                    "QTD_PRENAT_DESC_FALTA_PROF" => $value["QTD_PRENAT_DESC_FALTA_PROF"],
                    "QTD_PRENAT_DESC_RESP_N_COMP" => $value["QTD_PRENAT_DESC_RESP_N_COMP"],
                    "QTD_PRENAT_DESC_RECUSA_ACOMP" => $value["QTD_PRENAT_DESC_RECUSA_ACOMP"],
                    "QTD_PRENAT_DESC_RISCO_SOC" => $value["QTD_PRENAT_DESC_RISCO_SOC"],
                    "QTD_PRENAT_DESC_FORA_PROG" => $value["QTD_PRENAT_DESC_FORA_PROG"],
                    "QTD_PRENAT_DESC_FALTA_SERV" => $value["QTD_PRENAT_DESC_FALTA_SERV"],
                    "QTD_BENEC_IMP_ESUS" => $value["QTD_BENEC_IMP_ESUS"],
                    "PERC_BEN_IMP_ESUS" => round($value["QTD_BENEC_IMP_ESUS"] * 100 / ($value["QTD_BENEFICIARIOS_ACOMPANHADOS"] ? $value["QTD_BENEFICIARIOS_ACOMPANHADOS"] : 1), 2) . '%',
                    "QTD_GESTANTE_IMP_ESUS" => $value["QTD_GESTANTE_IMP_ESUS"],
                    "PERC_GESTANTE_IMP_ESUS" => round($value["QTD_GESTANTE_IMP_ESUS"] * 100 / ($value["QTD_GESTANTE"] ? $value["QTD_GESTANTE"] : 1), 2) . '%',
                    "QTD_CRIANCA_IMP_ESUS" => $value["QTD_CRIANCA_IMP_ESUS"],
                    "PERC_CRIANCA_IMP_ESUS" => round($value["QTD_CRIANCA_IMP_ESUS"] * 100 / ($value["QTD_BENEF_CRIAN_ACOMP"] ? $value["QTD_BENEF_CRIAN_ACOMP"] : 1), 2) . '%',
                    "QTD_GESTANTE_IMP_SISPRENATAL" => $value["QTD_GESTANTE_IMP_SISPRENATAL"],
                    "PERC_GESTANTE_IMP_SISPRENATAL" => round($value["QTD_GESTANTE_IMP_SISPRENATAL"] * 100 / ($value["QTD_GESTANTE"] ? $value["QTD_GESTANTE"] : 1), 2) . '%',
                    "QTD_GEST_IMP_SISPR_PRE_EM_DIA" => $value["QTD_GEST_IMP_SISPR_PRE_EM_DIA"],
                    "PERC_GEST_IMP_SISPR_PRE_EM_DIA" => round($value["QTD_GEST_IMP_SISPR_PRE_EM_DIA"] * 100 / ($value["QTD_GESTANTE"] ? $value["QTD_GESTANTE"] : 1), 2) . '%',
                    "QTD_GEST_IMP_SISPR_DADOS_NUTRI" => $value["QTD_GEST_IMP_SISPR_DADOS_NUTRI"],
                    "PERC_GEST_IMP_SISPR_DADOS_NUTRI" => round($value["QTD_GEST_IMP_SISPR_DADOS_NUTRI"] * 100 / ($value["QTD_GESTANTE"] ? $value["QTD_GESTANTE"] : 1), 2) . '%',
                    "QTD_CRIAN_QUIL_A_SER_ACOMP" => $value["QTD_CRIAN_QUIL_A_SER_ACOMP"],
                    "QTD_CRIAN_QUIL_ACOMP" => $value["QTD_CRIAN_QUIL_ACOMP"],
                    "QTD_CRIAN_QUIL_VAC_EM_DIA" => $value["QTD_CRIAN_QUIL_VAC_EM_DIA"],
                    "QTD_CRIAN_QUIL_DAD_NUTRIC" => $value["QTD_CRIAN_QUIL_DAD_NUTRIC"],
                    "QTD_GESTANTE_QUILOMBOLA" => $value["QTD_GESTANTE_QUILOMBOLA"],
                    "QTD_GEST_QUIL_PRE_EM_DIA" => $value["QTD_GEST_QUIL_PRE_EM_DIA"],
                    "QTD_GEST_QUIL_NUTRI_EM_DIA" => $value["QTD_GEST_QUIL_NUTRI_EM_DIA"],
                    "PERC_QUILOM_OBRIGATORIO" => round($value["QTD_QUILOM_OBR_ACOMP"] * 100 / ($value["QTD_QUILOMBOLA"] ? $value["QTD_QUILOMBOLA"] : 1), 2) . '%',
                    "PERC_QUILOM_N_OBRIGATORIO" => round($value["QTD_QUILOM_OBR_ACOMP"] * 100 / ($value["QTD_QUILOMBOLA"] ? $value["QTD_QUILOMBOLA"] : 1), 2) . '%',
                    "PERC_CRIAN_QUILOM_ACOMP" => round($value["QTD_CRIAN_QUIL_ACOMP"] * 100 / ($value["QTD_CRIAN_QUILOMBOLA"] ? $value["QTD_CRIAN_QUILOMBOLA"] : 1), 2) . '%'
                );
                $i++;
            }
        }

        return $this->toJson($arr);
    }


    public function geraRelatorioIndividualizado()
    {
        $this->verificarSessaoAtiva();
//        ini_set('max_execution_time', 0);
//        set_time_limit(0);
    //    $this->verificarSessaoAtiva('json');
        $dadosTela = $this->postJson();
        $nuVigencia = $dadosTela['vigencia'];
        $tpRelatorio = $dadosTela['tprelatorio'];
        $varWhere = $dadosTela['varwhere'];

        $arr = array();
        $i = 0;

        if ($tpRelatorio=='null') {
            $arr['data'][] = array();
        }
        else {
            $this->load->model('Relatorios');

            //   $arrResultado = $this->Indicadores->retornaIndividualizadoTipo1($nuVigencia,'530010',$tpRelatorio,$varWhere);
            $arrResultado = $this->Relatorios->retornaIndividualizadoTipo1($nuVigencia, $this->session->CO_MUNICIPIO_IBGE, $tpRelatorio, $varWhere);

            foreach ($arrResultado as $value) {
                $arr['data'][$i] = array(
                    "IDX_LISTA" => $i,
                    "NIS" => $value['NU_NIS'],
                    "NOME" => $value['NO_PESSOA'],
                    "PERFIL" => $value['ST_ACOMPANHADO'],
                    "STATUSDESCUMPRIMENTO" => $value['DESCUMPRIMENTO'],
                    "DT_NASCIMENTO" => $value['DT_NASCIMENTO'],
                    "IDADE" => $value['DT_NASCIMENTO'],
                    "ENDERECO" => $value["ENDERECO"],
                    "BAIRRO" => $value["BAIRRO"],
                    "DATADOACOMP" => $value["DT_ACOMPANHAMENTO"],
                    "DUM" => $value["DT_ULTIMA_MENSTRUACAO"],
                    "CNESEASDEACOMPANHAMENTO" => $value["CO_CNES"],
                    "NOPROFDEACOMPANHAMENTO" => $value["NO_PROFISSIONAL"],
                    "STATUSGESTANTE" => $value["ST_GESTANTE"],
                    "STATUSSISPRENATAL" => $value["ST_SISPRENATAL"],
                    "STATUSIMPDEOUTROSSIST" => $value["ST_OUTROS_SISTEMAS"],
                    "MOTIVODESCUMPRIMENTO" => $value["DS_MOTIVO"]
                );
                $i++;
            }
        }

        return $this->toJson($arr);
    }

}
