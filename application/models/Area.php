<?php
/**
 * Created by PhpStorm.
 * User: dimas.filho
 * Date: 19/06/2018
 * Time: 11:14
 */

class Area extends MY_Model
{
    protected $_table = 'TB_BFA_AREA';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_AREA';
    protected $_triggerSequence = true;
    protected $_sequence = 'SQ_BFAAREA_COSEQBFAAREA';

    public function retornarVinculados($coMunicipioIbge)
    {
        $sql = "SELECT DISTINCT A.CO_SEQ_BFA_AREA,
                                  A.NO_AREA NO_AREA_BAIRRO,
                                  TO_CHAR(DECODE(A.DT_ATUALIZACAO, NULL, A.DT_CADASTRO, A.DT_ATUALIZACAO),'DD/MM/YYYY') DT_ATUALIZACAO
                                FROM DBSISVAN.TB_BFA_AREA A
                                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO DOM
                                ON (DOM.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                                AND DOM.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
                                AND DOM.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO )
                                WHERE  A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
                                ORDER BY A.NO_AREA";
        $this->params(array('CO_MUNICIPIO_IBGE' => $coMunicipioIbge, 'ST_REGISTRO_ATIVO' => 'S'));
        return $this->query($sql);
    }

    public function retornarBairrosVinculados($coMunicipioIbge, $coArea)
    {
        $sql =  "SELECT DISTINCT 
                              D.NO_BAIRRO,
                              D.CO_BFA_AREA,
                              D.CO_MUNICIPIO_IBGE
                            FROM DBSISVAN.TB_BFA_DOMICILIO D
                            WHERE D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                            AND D.CO_MUNICIPIO_IBGE   = :CO_MUNICIPIO_IBGE
                            AND D.CO_BFA_AREA = :CO_BFA_AREA
                        ORDER BY D.NO_BAIRRO";
        $this->params(array('CO_MUNICIPIO_IBGE' => $coMunicipioIbge, 'CO_BFA_AREA' => $coArea,  'ST_REGISTRO_ATIVO' => 'S'));
        return $this->query($sql);
    }

    public function retornarVinculadosComNaoVinculados($coMunicipioIbge, $nuVigencia)
    {

        $sql = "SELECT DISTINCT DECODE(A.NO_AREA, null, D.NO_BAIRRO, A.NO_AREA) NO_BAIRRO
                                FROM DBSISVAN.TB_BFA_DOMICILIO D
                                LEFT JOIN DBSISVAN.TB_BFA_AREA A 
                                ON A.CO_SEQ_BFA_AREA = D.CO_BFA_AREA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                                WHERE D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                                AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO  
                                ORDER BY NO_BAIRRO";
        $this->params(array('CO_MUNICIPIO_IBGE' => $coMunicipioIbge, 'ST_REGISTRO_ATIVO' => 'S'));
        return $this->query($sql);
    }

    public function retornarBairroVinculado($noBairro, $coMunicipioIbge)
    {
        $sql = "SELECT DISTINCT 
                            A.CO_SEQ_BFA_AREA AS EXISTE
                            FROM DBSISVAN.TB_BFA_DOMICILIO D
                            INNER JOIN DBSISVAN.TB_BFA_AREA A 
                            ON A.CO_SEQ_BFA_AREA = D.CO_BFA_AREA 
                               AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                               AND A.NO_AREA = :NO_BAIRRO AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
                            WHERE D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE 
                            AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array('NO_BAIRRO' => $noBairro, 'CO_MUNICIPIO_IBGE' => $coMunicipioIbge, 'ST_REGISTRO_ATIVO' => 'S'));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function verificarBairroArea($noBairro, $coMunicipioIbge){
        $sql = "SELECT DISTINCT 
                            A.CO_SEQ_BFA_AREA AS EXISTE
                            FROM  DBSISVAN.TB_BFA_AREA A 
                            INNER JOIN DBSISVAN.TB_BFA_DOMICILIO B ON B.CO_BFA_AREA = A.CO_SEQ_BFA_AREA AND B.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                            WHERE A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                               AND A.NO_AREA = :NO_BAIRRO AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE";
        $this->params(array('NO_BAIRRO' => $noBairro, 'CO_MUNICIPIO_IBGE' => $coMunicipioIbge, 'ST_REGISTRO_ATIVO' => 'S'));
        $this->fetchOne(true);
        return $this->query($sql);
    }

}