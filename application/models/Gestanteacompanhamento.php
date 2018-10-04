<?php

class Gestanteacompanhamento extends MY_Model
{
    protected $_table = 'TH_BFA_GESTANTE_ACOMPANHAMENTO';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_GESTANTE_ACOMP';
    protected $_sequence = 'SQ_BFAGESTACOMP_COSEQBFAGEST';

    public function retornaAcompanhamentosGestante($coAcomp)
    {
        $sql = "SELECT CO_BFA_ACOMPANHAMENTO 
                      FROM DBSISVAN.TH_BFA_GESTANTE_ACOMPANHAMENTO 
                      WHERE CO_BFA_ACOMPANHAMENTO = :CO_BFA_ACOMPANHAMENTO 
                      AND ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'CO_BFA_ACOMPANHAMENTO' => $coAcomp,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }
}