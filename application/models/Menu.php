<?php
class Menu extends \MY_Model
{
    public function retornarMenu($coPrograma, $coProgramaModulo, $coGrupo, $coMenu = null) {
//        $partSql = ' CO_MENU IS NULL AND ';
//        if($coMenu){
//            $partSql = ' CO_MENU = :CO_MENU AND ';
//            $this->_params['CO_MENU'] = $coMenu;
//        }
//        $sql = "SELECT CO_SEQ_MENU, NO_MENU, DS_URL, NU_ORDEM, CO_MENU, CO_PROGRAMA, CO_PROGRAMA_MODULO, CO_GRUPO, NO_CLASSECSS
//                             FROM DBCGPAN.TB_MENU
//                             WHERE
//                             $partSql
//                             CO_PROGRAMA = :CO_PROGRAMA AND
//                             CO_PROGRAMA_MODULO = :CO_PROGRAMA_MODULO AND
//                             CO_GRUPO = :CO_GRUPO AND
//                             ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
//                             ORDER BY NU_ORDEM";
//        $this->_params['CO_PROGRAMA'] = $coPrograma;
//        $this->_params['CO_PROGRAMA_MODULO'] = $coProgramaModulo;
//        $this->_params['CO_GRUPO'] = $coGrupo;
//        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
//        return  $this->query($sql)->result_array();
    }
}