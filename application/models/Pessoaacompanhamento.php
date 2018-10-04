<?php

class Pessoaacompanhamento extends MY_Model
{
    protected $_table = 'RL_BFA_PESSOA_ACOMPANHAMENTO';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_BFA_ACOMPANHAMENTO';

    public function retornaPessoaAcompanhamentos($coPessoa)
    {
        $sql = "SELECT CO_BFA_ACOMPANHAMENTO 
                          FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO 
                          WHERE CO_BFA_PESSOA = :CO_BFA_PESSOA";
        $this->params(array('CO_BFA_PESSOA' => $coPessoa));
        return $this->query($sql);
    }

    public function retornaExisteDados($coPessoa, $coAcomp)
    {
        $sql = "SELECT CO_BFA_ACOMPANHAMENTO 
                          FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO 
                          WHERE CO_BFA_PESSOA = :CO_BFA_PESSOA AND CO_BFA_ACOMPANHAMENTO = :CO_BFA_ACOMPANHAMENTO";
        $this->params(array('CO_BFA_PESSOA' => $coPessoa, 'CO_BFA_ACOMPANHAMENTO' => $coAcomp));
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
}