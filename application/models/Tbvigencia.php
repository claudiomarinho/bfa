<?php
class Tbvigencia extends MY_Model
{
    protected $_table = 'TB_BFA_MUNICIPIO_VIGENCIA';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = array('CO_SEQ_BFA_VIGENCIA');

    public function retornarDatasAberturaEncerramento($coMunicipioIbge){
        $sql = "
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
        ";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }
}