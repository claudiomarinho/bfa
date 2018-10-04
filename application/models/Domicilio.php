<?php

class Domicilio extends MY_Model
{
    protected $_table = 'TB_BFA_DOMICILIO';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_DOMICILIO';

    public function retornarBairros($coMunicipioIbge, $nuVigencia)
    {
        $sql = "SELECT DISTINCT DECODE(A.NO_AREA, null, D.NO_BAIRRO, A.NO_AREA) NO_BAIRRO
                                FROM DBSISVAN.TB_BFA_DOMICILIO D
                                LEFT JOIN DBSISVAN.TB_BFA_AREA A ON A.CO_SEQ_BFA_AREA = D.CO_BFA_AREA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                                WHERE D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                                AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                                ORDER BY NO_BAIRRO";

        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'ST_REGISTRO_ATIVO' => 'S',
        ));
        return $this->query($sql);
    }

    public function retornarBairrosTodos($coMunicipioIbge,$nuVigencia)
    {
        $sql = "SELECT DISTINCT D.NO_BAIRRO, A.CO_SEQ_BFA_AREA, DECODE(A.CO_SEQ_BFA_AREA, null, 0, 1) DISABLED
                        FROM DBSISVAN.TB_BFA_DOMICILIO D
                        LEFT JOIN DBSISVAN.TB_BFA_AREA A 
                                ON A.CO_SEQ_BFA_AREA = D.CO_BFA_AREA 
                                AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                                AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                        WHERE 
                                D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                                AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                                AND D.NO_BAIRRO IS NOT NULL
                        ORDER BY NO_BAIRRO";

        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'ST_REGISTRO_ATIVO' => 'S',
        ));
        return $this->query($sql);
    }
    public function retornarLogradouroArea($coMunicipioIbge,$coArea)
    {

        $sql = "SELECT DISTINCT D.NO_LOGRADOURO
                        FROM DBSISVAN.TB_BFA_DOMICILIO D
                        INNER JOIN DBSISVAN.TB_BFA_AREA A 
                                ON A.CO_SEQ_BFA_AREA = D.CO_BFA_AREA 
                                AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                                AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                                AND A.CO_SEQ_BFA_AREA = :CO_SEQ_BFA_AREA
                        WHERE D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                        AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                        ORDER BY D.NO_LOGRADOURO ";

        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'CO_SEQ_BFA_AREA' => $coArea,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }

    public function retornarLogradouro($coMunicipioIbge,$bairro)
    {

        $sql = "SELECT DISTINCT NO_LOGRADOURO
                        FROM DBSISVAN.TB_BFA_DOMICILIO D
                        WHERE D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                        AND D.NO_BAIRRO = :NO_BAIRRO
                        AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                        ORDER BY NO_LOGRADOURO ";

        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NO_BAIRRO' => $bairro,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }
}