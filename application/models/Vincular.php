<?php
/**
 * Created by PhpStorm.
 * User: leonardo.morais
 * Date: 28/06/2018
 * Time: 13:31
 */
class Vincular extends MY_Model
{

    protected $_table = 'TB_BFA_EAS_VISIVEL';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_EAS_VISIVEL';
    protected $_sequence = 'SQ_BFAEASVISIV_COSEQEASVISIV';

    public function buscaProfissionaisDeEas($coCnes)
    {
        $sql = "
        SELECT
            CO_SEQ_EAS_VISIVEL, CO_CNES, NO_EAS_VISIVEL
        FROM
            DBSISVAN.TB_BFA_EAS_VISIVEL
        WHERE
            ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            AND CO_CNES = :CO_CNES
        ORDER BY
            NO_EAS_VISIVEL
        ";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'CO_CNES' => $coCnes
        ));
        return $this->query($sql);
    }


    public function buscaEasVisivel($coMunicipioIbge)
    {
        $sql = "
        SELECT
            CO_SEQ_EAS_VISIVEL, CO_CNES, NO_EAS_VISIVEL
        FROM
            DBSISVAN.TB_BFA_EAS_VISIVEL
        WHERE
            ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            AND CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
        ORDER BY
            NO_EAS_VISIVEL
        ";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge
        ));
        return $this->query($sql);
    }

    public function buscaProfissionaisEasVisivel($coCnes)
    {
        $sql = "
            SELECT
            DISTINCT
              D.CO_CNS,
              D.CO_PROFISSIONAL_SUS,
              D.NO_PROFISSIONAL
            FROM DBCNES.TB_ESTABELECIMENTO A
            INNER JOIN DBCNES.TB_COMP_CARGA_HORARIA_SUS B
            ON A.CO_UNIDADE = B.CO_UNIDADE
            INNER JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS D
            ON B.CO_PROFISSIONAL_SUS = D.CO_PROFISSIONAL_SUS
            WHERE A.CO_MOTIVO_DESAB IS NULL
            AND SUBSTR(A.CO_NATUREZA_JUR,0,1) = :CO_NATUREZA_JUR
            AND A.TP_UNIDADE IN (:TP_UNIDADE_01, :TP_UNIDADE_02, :TP_UNIDADE_04, :TP_UNIDADE_05, :TP_UNIDADE_15, :TP_UNIDADE_22, :TP_UNIDADE_32, :TP_UNIDADE_36, :TP_UNIDADE_40, :TP_UNIDADE_42, :TP_UNIDADE_61, :TP_UNIDADE_70, :TP_UNIDADE_71, :TP_UNIDADE_72, :TP_UNIDADE_73, :TP_UNIDADE_74, :TP_UNIDADE_77, :TP_UNIDADE_78, :TP_UNIDADE_83)
            AND A.CO_CNES = :CO_CNES
            AND D.CO_CNS IS NOT NULL
            ORDER BY D.NO_PROFISSIONAL
        ";
        $this->params([
         'CO_NATUREZA_JUR' => 1
        , 'TP_UNIDADE_01' => '01'
        , 'TP_UNIDADE_02' => '02'
        , 'TP_UNIDADE_04' => '04'
        , 'TP_UNIDADE_05' => '05'
        , 'TP_UNIDADE_15' => '15'
        , 'TP_UNIDADE_22' => '22'
        , 'TP_UNIDADE_32' => '32'
        , 'TP_UNIDADE_36' => '36'
        , 'TP_UNIDADE_40' => '40'
        , 'TP_UNIDADE_42' => '42'
        , 'TP_UNIDADE_61' => '61'
        , 'TP_UNIDADE_70' => '70'
        , 'TP_UNIDADE_71' => '71'
        , 'TP_UNIDADE_72' => '72'
        , 'TP_UNIDADE_73' => '73'
        , 'TP_UNIDADE_74' => '74'
        , 'TP_UNIDADE_77' => '77'
        , 'TP_UNIDADE_78' => '78'
        , 'TP_UNIDADE_83' => '83'
        , 'CO_CNES' => $coCnes
        ]);

        return $this->query($sql);
    }

}