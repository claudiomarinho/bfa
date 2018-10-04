<?php

class Motivos extends MY_Model
{
    public function retornaBuscaMotivos()
    {
        $sql = "
            SELECT 
                CO_BFA_MOTIVO_NAO_ACOMP, DS_MOTIVO
            FROM 
                DBSISVAN.TB_BFA_MOTIVO_NAO_ACOMP 
            WHERE 
                ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            ORDER BY 
                CO_BFA_MOTIVO_NAO_ACOMP
            ";
        $this->params(array('ST_REGISTRO_ATIVO' => 'S'));
        return $this->query($sql);
    }

    public function retornaBuscaMotivosDescumprimento($motivo)
    {
        if ($motivo == 'GESTANTE') {
            $st = "AND ST_PRE_NATAL = :ST_PRE_NATAL";
            $this->params(array('ST_PRE_NATAL' => 'S'));
        } else if ($motivo == 'VACINA') {
            $st = "AND ST_VACINACAO = :ST_VACINACAO";
            $this->params(array('ST_VACINACAO' => 'S'));
        } else{
            $st = "AND ST_NUTRICIONAL_CRIANCA = :ST_NUTRICIONAL_CRIANCA";
            $this->params(array('ST_NUTRICIONAL_CRIANCA' => 'S'));
        }

        $sql = "
            SELECT 
                CO_BFA_MOTIVO_DESCUMPRIMENTO, DS_MOTIVO
            FROM 
                DBSISVAN.TB_BFA_MOTIVO_DESCUMPRIMENTO
            WHERE 
                ST_REGISTRO_ATIVO = 'S'
                $st
            ORDER BY 
                CO_BFA_MOTIVO_DESCUMPRIMENTO
            ";

        return $this->query($sql);
    }
}