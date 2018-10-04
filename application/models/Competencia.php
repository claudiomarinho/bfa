<?php

class Competencia extends \MY_Model
{   
    public function retornarAnoComp($coMunicipioIbge, $coGrupo, $coMicronutriente)
    {
//        $whereGrupo = '';
//        if ( !isset($this->session->userdata['CO_MUNICIPIO_GESTOR']) && ($coGrupo == 4) ) {
//            $whereGrupo = 'AND B.CO_GRUPO = :CO_GRUPO';
//            $this->_params['CO_GRUPO'] = $coGrupo;
//        }
//        $sql = "
//            SELECT 
//            DISTINCT 
//                A.NU_ANO_COMPETENCIA
//            FROM
//                DBCGPAN.RL_MN_MICRONUTRI_MUNICIPIO_ANO A
//                INNER JOIN DBCGPAN.RL_ACESSO_PF_PJ B ON B.CO_MUNICIPIO_IBGE = A.CO_MUNICIPIO_IBGE AND CO_PROGRAMA = 3
//            WHERE
//                A.DT_ENCERRAMENTO > SYSDATE
//                AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE                
//                AND A.CO_MICRONUTRIENTE = :CO_MICRONUTRIENTE
//                AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
//                $whereGrupo
//            ";
//
//        $this->params(array(
//        'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
//        'CO_MICRONUTRIENTE' => $coMicronutriente,
//        'ST_REGISTRO_ATIVO' => 'S'
//        ));
//        $this->fetchOne(true);
//
//        return  $this->query($sql);
    }
}