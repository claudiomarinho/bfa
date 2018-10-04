<?php

class Permissao extends \MY_Model
{
    protected $_table = 'TB_ACESSO_PERMISSAO';
    protected $_schema = 'DBCGPAN';
    protected $_primaryKey = 'CO_SEQ_ACESSO_PERMISSAO';

    public function retornarPermissao($coGrupo, $coPrograma = 7)
    {
        $sql = " 
            SELECT  
                CO_GRUPO,
                CO_MUNICIPIO_IBGE,
                CO_PROGRAMA,
                CO_PROGRAMA_MODULO,
                CO_SEQ_ACESSO_PERMISSAO,
                DS_ACAO,
                DS_CONTROLADOR,
                DS_MODULO,
                ST_ALTERAR,
                ST_EXCLUIR,
                ST_INSERIR,
                ST_VISUALIZAR
            FROM 
                DBCGPAN.TB_ACESSO_PERMISSAO
            WHERE 
                CO_PROGRAMA = :CO_PROGRAMA AND 
               CO_GRUPO = :CO_GRUPO AND 
               ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        
        $this->params(array(
            'CO_PROGRAMA' => $coPrograma,
            'CO_GRUPO' => $coGrupo,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }
}
