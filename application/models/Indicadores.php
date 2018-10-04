<?php

/**
 * Created by PhpStorm.
 * User: robson.salaberry
 * Date: 25/07/2018
 * Time: 11:27
 */

class Indicadores extends MY_Model
{
    public function retornarConsolidado($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT QT_OBRIGATORIO, QT_NAO_OBRIGATORIO, QT_INDIGENA_QUILOMBOLA, QT_CRIANCA, QT_GESTANTE_ESTIMADA
            FROM DBSISVAN.TH_BFA_INDICADOR_VIGENCIA 
            WHERE NU_VIGENCIA = :NU_VIGENCIA AND CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
    public function retornarTotalBeneficiariosAcompanhados($coMunicipioIbge,$nuVigencia,$stObrigatorio)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND RL.NU_VIGENCIA = :NU_VIGENCIA AND A.ST_OBRIGATORIO = :ST_OBRIGATORIO AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_OBRIGATORIO' => $stObrigatorio,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosAcompanhadosMotivoNaoAcomp($coMunicipioIbge,$nuVigencia,$stObrigatorio)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND RL.NU_VIGENCIA = :NU_VIGENCIA AND A.ST_OBRIGATORIO = :ST_OBRIGATORIO
                AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
        ";
        $this->params( array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_OBRIGATORIO' => $stObrigatorio,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosGestantes($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND RL.NU_VIGENCIA = :NU_VIGENCIA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                AND ACOMP.ST_GESTANTE = :ST_REGISTRO_ATIVO AND ACOMP.DT_ULTIMA_MENSTRUACAO IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosGestantesComPreNatal($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND RL.NU_VIGENCIA = :NU_VIGENCIA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                AND ACOMP.ST_GESTANTE = :ST_REGISTRO_ATIVO AND ACOMP.DT_ULTIMA_MENSTRUACAO IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND ACOMP.ST_PRE_NATAL = 'S'            
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosGestantesSemPreNatal($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND RL.NU_VIGENCIA = :NU_VIGENCIA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                AND ACOMP.ST_GESTANTE = :ST_REGISTRO_ATIVO AND ACOMP.DT_ULTIMA_MENSTRUACAO IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND ACOMP.ST_PRE_NATAL = 'N'
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosAcompanhadosOutroMunicipio($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
        SELECT 
            COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
        FROM 
            DBSISVAN.TB_BFA_PESSOA A
            INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
            INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
        WHERE 
            A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
            AND RL.NU_VIGENCIA = :NU_VIGENCIA             
            AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            AND ACOMP.CO_MUNICIPIO_IBGE <> :CO_MUNICIPIO_IBGE 
            AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
    public function retornarTotalBeneficiariosIndQuilAcompanhados($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = A.CO_BFA_FAMILIA
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.ST_OBRIGATORIO = 1
                AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND (FAM.ST_RESIDE_INDIGENA = 1 OR FAM.ST_QUILOMBOLA = 1)            
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosIndQuilAcompanhadosMotivoNaoAcomp($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = A.CO_BFA_FAMILIA
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.ST_OBRIGATORIO = 1
                AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND (FAM.ST_RESIDE_INDIGENA = 1 OR FAM.ST_QUILOMBOLA = 1)
                AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO          
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
    public function retornarTotalBeneficiariosCriancasAcompanhadas($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.TP_PESSOA = '3' AND A.ST_OBRIGATORIO = 1
                AND RL.NU_VIGENCIA = :NU_VIGENCIA AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO           
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornarTotalBeneficiariosCriancasNaoAcompanhadasComMotivo($coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO  = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.TP_PESSOA = '3' AND A.ST_OBRIGATORIO = 1
                AND RL.NU_VIGENCIA = :NU_VIGENCIA AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

}