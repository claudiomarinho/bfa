<?php

class Rlpessoamapa extends MY_Model
{
    protected $_table = 'RL_BFA_PESSOA_MAPA';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_BFA_PESSOA';
    protected $_sequence = '';

    public function consultarMapa($coMapa)
    {
        $sql = "
            SELECT DISTINCT CO_BFA_MAPA FROM DBSISVAN.RL_BFA_PESSOA_MAPA WHERE CO_BFA_MAPA = :CO_BFA_MAPA               
        ";
        $this->params(array('CO_BFA_MAPA' => $coMapa ));
        $this->fetchOne(true);
        return $this->query($sql);
    }

}