<?php

/**
 * Created by PhpStorm.
 * User: dimas.filho
 * Date: 03/12/2015
 * Time: 16:41
 */
class Estado extends MY_Model
{
    protected $_table = 'TB_UF';
    protected $_schema = 'DBGERAL';
    protected $_primaryKey = 'CO_UF_IBGE';

    public function mostrarTodos()
    {
        $sql = "SELECT CO_UF_IBGE, SG_UF, NO_UF
                    FROM DBGERAL.TB_UF
                    WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                    ORDER BY SG_UF";
        $this->params(array('ST_REGISTRO_ATIVO' => 'S'));
        return $this->query($sql);
    }

    public function mostrarPorUf($uf)
    {
        $sql = "SELECT CO_UF_IBGE, SG_UF, NO_UF
                    FROM DBGERAL.TB_UF
                    WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                    AND CO_UF_IBGE = :CO_UF_IBGE
                    ORDER BY SG_UF";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'CO_UF_IBGE' => $uf 
        ));
        return $this->query($sql);
    }

    public function mostrarPorRegiao($coRegiao)
    {
        $sql = "
            SELECT                 
                CO_UF_IBGE, SG_UF, NO_UF                
            FROM
                DBGERAL.TB_UF
            WHERE 
                ST_REGISTRO_ATIVO = :ST_REGISTRO 
                AND CO_REGIAO = :CO_REGIAO            
            ORDER BY
                SG_UF";
        $this->params(array(
            'ST_REGISTRO' => 'S',
            'CO_REGIAO' => $coRegiao
        ));
        return $this->query($sql);
    }
}