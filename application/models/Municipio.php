<?php

/**
 * Created by PhpStorm.
 * User: dimas.filho
 * Date: 03/12/2015
 * Time: 16:41
 */
class Municipio extends MY_Model
{
    protected $_table = 'TB_MUNICIPIO';
    protected $_schema = 'DBGERAL';
    protected $_primaryKey = 'CO_MUNICIPIO_IBGE';

    public function mostrarPorUf($sgUf)
    {
        $sql = "SELECT CO_UF_IBGE, SG_UF, CO_MUNICIPIO_IBGE, NO_MUNICIPIO, NO_MUNICIPIO_ACENTUADO
                        FROM DBGERAL.TB_MUNICIPIO
                        WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                        AND ST_MUNICIPIO = :ST_MUNICIPIO
                        AND SG_UF = :SG_UF
                        ORDER BY NO_MUNICIPIO";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'ST_MUNICIPIO' => 'ATIVO',
            'SG_UF' => $sgUf
        ));
        return $this->query($sql);
    }

    public function mostrarPorCod($codMunicipio, $umRegistro = true)
    {

        $sql = "SELECT CO_UF_IBGE, SG_UF, CO_MUNICIPIO_IBGE, NO_MUNICIPIO, NO_MUNICIPIO_ACENTUADO
                        FROM DBGERAL.TB_MUNICIPIO
                        WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                        AND ST_MUNICIPIO = :ST_MUNICIPIO
                        AND CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
                        ORDER BY NO_MUNICIPIO";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'ST_MUNICIPIO' => 'ATIVO',
            'CO_MUNICIPIO_IBGE' => $codMunicipio
        ));
        
        if ($umRegistro) {
            $this->fetchOne(true);
            return $this->query($sql);
        } else {
            return $this->query($sql);
        }

    }

    public function mostrarMunicipios($codUf, $umRegistro = true)
    {

        $sql = "SELECT CO_UF_IBGE, SG_UF, CO_MUNICIPIO_IBGE, NO_MUNICIPIO, NO_MUNICIPIO_ACENTUADO
                        FROM DBGERAL.TB_MUNICIPIO
                        WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                        AND ST_MUNICIPIO = :ST_MUNICIPIO
                        AND CO_UF_IBGE = :CO_UF_IBGE
                        ORDER BY NO_MUNICIPIO";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'ST_MUNICIPIO' => 'ATIVO',
            'CO_UF_IBGE' => $codUf
        ));

        if ($umRegistro) {
            $this->fetchOne(true);
            return $this->query($sql);
        } else {
            return $this->query($sql);
        }

    }

    public function selecionaMunicipio($coMunicipioIbge)
    {

        $sql = "SELECT CO_UF_IBGE, SG_UF, CO_MUNICIPIO_IBGE, NO_MUNICIPIO, NO_MUNICIPIO_ACENTUADO
                        FROM DBGERAL.TB_MUNICIPIO
                        WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                        AND ST_MUNICIPIO = :ST_MUNICIPIO
                        AND CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'ST_MUNICIPIO' => 'ATIVO',
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge
        ));
        $this->fetchOne(true);
        return $this->query($sql);        

    }
}