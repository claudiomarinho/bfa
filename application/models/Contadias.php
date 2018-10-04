<?php

class Contadias extends MY_Model
{
    public function calculaDias($dt1,$dt2)
    {
        $sql  = "SELECT DBSISVAN.FC_CALCULA_IDADE(:DT1, :DT2, 'DS') AS QT_DIAS FROM DUAL";

        $this->params(array( 'DT1' => $dt2, 'DT2' => $dt1));

        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function getIdadeDias($coPessoa,$dt)
    {
        $sql = "
            SELECT
                DBSISVAN.FC_CALCULA_IDADE(A.DT_NASCIMENTO,:DT,'A') AS NU_IDADE_ANO,
                DBSISVAN.FC_CALCULA_IDADE(A.DT_NASCIMENTO,:DT,'M') AS NU_IDADE_MES,
                DBSISVAN.FC_CALCULA_IDADE(A.DT_NASCIMENTO,:DT,'D') AS NU_IDADE_DIA,
                DBSISVAN.FC_CALCULA_IDADE(A.DT_NASCIMENTO,:DT,'DS') AS QT_IDADE_DIAS
            FROM
                DBSISVAN.TB_BFA_PESSOA A
            WHERE
                A.CO_SEQ_BFA_PESSOA = :COPESSOA ";

        $this->params(array('DT' => $dt, 'COPESSOA' => $coPessoa));

        $this->fetchOne(true);
        return $this->query($sql);
    }

}