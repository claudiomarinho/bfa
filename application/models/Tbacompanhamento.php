<?php

class Tbacompanhamento extends MY_Model
{
    protected $_table = 'TB_BFA_ACOMPANHAMENTO';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_ACOMPANHAMENTO';
    protected $_sequence = 'SQ_BFAACOMP_COSEQBFAACOMP';

    public function retornaAcompanhamento($coAcomp)
    {
        $sql = "SELECT * 
                          FROM DBSISVAN.TB_BFA_ACOMPANHAMENTO 
                          WHERE CO_SEQ_BFA_ACOMPANHAMENTO = :CO_SEQ_BFA_ACOMPANHAMENTO 
                          AND ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array('CO_SEQ_BFA_ACOMPANHAMENTO' => $coAcomp, 'ST_REGISTRO_ATIVO' => 'S'));
        return $this->query($sql);
    }

    public function retornaCoSeqAcompanhamento($coPessoa,$vigencia)
    {
        $sql = "
            SELECT 
                ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = :CO_BFA_PESSOA     
                AND RL.NU_VIGENCIA = :NU_VIGENCIA
                AND PESS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'CO_BFA_PESSOA' => $coPessoa, 
            'NU_VIGENCIA' => $vigencia, 
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornaPessoaAcompanhamento($coPessoa,$vigencia)
    {
        $sql = "
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA, PESS.CO_BFA_FAMILIA, PESS.TP_PESSOA, PESS.NO_PESSOA, PESS.NU_NIS_PESSOA NU_NIS, PESS.DT_NASCIMENTO, DECODE(PESS.CO_SEXO, 1, 'FEMININO', 'MASCULINO') AS DS_SEXO, PESS.ST_OBRIGATORIO,
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, 
                ACOMP.ST_PESSOA_NAO_ACOMPANHADA AS ST_ACOMPANHADO, 
                ACOMP.CO_BFA_MOTIVO_NAO_ACOMP, 
                ACOMP.CO_SISTEMA_ORIGEM_ACOMP,
                DECODE(ACOMP.CO_CNES_ATENDIMENTO, NULL, DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES), ACOMP.CO_CNES_ATENDIMENTO) AS CO_CNES_ATENDIMENTO,
                DECODE(ACOMP.CO_CNS_PROFISSIONAL, NULL, DECODE(PESS.CO_CNS_PROF_VISIVEL, NULL, '', PESS.CO_CNS_PROF_VISIVEL), ACOMP.CO_CNS_PROFISSIONAL) AS CO_CNS_PROFISSIONAL,
                DECODE(ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA, NULL, 'S', 'N') AS ST_MEDIDAS,
                ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA,
                TO_CHAR(ACOMP.NU_PESO,'999.999') AS NU_PESO,
                TO_CHAR(ACOMP.NU_ALTURA,'9999.9') AS NU_ALTURA,
                ACOMP.ST_VACINACAO,
                ACOMP.CO_BFA_MOTIVO_VACINACAO,
                ACOMP.ST_GESTANTE,
                TO_CHAR(ACOMP.DT_ULTIMA_MENSTRUACAO,'DD/MM/YYYY') DT_ULTIMA_MENSTRUACAO,
                ACOMP.ST_PRE_NATAL,
                ACOMP.CO_BFA_MOTIVO_PRE_NATAL,
                ACOMP.CO_DSEI,
                FAM.ST_RESIDE_INDIGENA
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = PESS.CO_BFA_FAMILIA AND FAM.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = :NU_VIGENCIA
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = PESS.CO_EAS_VISIVEL
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = :CO_BFA_PESSOA 
                AND PESS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                ";
        $this->params(array(
            'CO_BFA_PESSOA' => $coPessoa,
            'NU_VIGENCIA' => $vigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function buscaAcompPessoaNuNis($nuNis,$nuVigencia)
    {
        $sql = "
            SELECT 
                PESS.NU_NIS_PESSOA NU_NIS, PESS.CO_SEQ_BFA_PESSOA
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = :NU_VIGENCIA
            WHERE 
                PESS.NU_NIS_PESSOA = :NU_NIS_PESSOA AND RL.NU_VIGENCIA = :NU_VIGENCIA AND PESS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'NU_NIS_PESSOA' => $nuNis,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
}