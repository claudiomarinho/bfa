<?php

class Limites extends MY_Model
{
    protected $_table = 'TB_BFA_LIMITE_ANTROPOMETRICO';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_LIMITE_ANTROPOMET';

    public function buscaLimites($idadeDias)
    {
        $sql = "
            SELECT    
                NU_ALTURA_MINIMA AS NU_ALTURA_MINIMA,
                NU_ALTURA_MAXIMA AS NU_ALTURA_MAXIMA,
                NU_PESO_MINIMO AS NU_PESO_MINIMO,
                NU_PESO_MAXIMO AS NU_PESO_MAXIMO
            FROM 
                DBSISVAN.TB_BFA_LIMITE_ANTROPOMETRICO
            WHERE
                TP_SEXO = :TP_SEXO 
                AND QT_IDADE_DIA_MINIMO <= :IDADE_DIAS
                AND QT_IDADE_DIA_MAXIMO >= :IDADE_DIAS
                AND ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'TP_SEXO' => 'F',
            'ST_REGISTRO_ATIVO' => 'S',
            'IDADE_DIAS' => $idadeDias
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

}