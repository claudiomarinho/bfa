<?php

class Estabelecimento extends MY_Model
{
    protected $_table = 'TB_BFA_EAS_VISIVEL';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_EAS_VISIVEL';
    protected $_sequence = 'SQ_BFAEASVISIV_COSEQEASVISIV';

    public function updateZerarEasVisiveis($easVinculadosFamilia = null, $codMunicipioIbge)
    {
        $and = "";
        $resParams = [];
        if ($easVinculadosFamilia) {
            $result = $this->montarIn($easVinculadosFamilia, 'CO_EAS_VISIVEL');
            $and = "AND CO_SEQ_EAS_VISIVEL NOT IN ( {$result['query']} )";
            $resParams = $result['params'];
        }

        $sql = "UPDATE {$this->_schema}.{$this->_table} SET  ST_REGISTRO_ATIVO = :ST_REGISTRO_N
        WHERE CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND ST_REGISTRO_ATIVO = :ST_REGISTRO_S {$and}";
        $params = array_merge($resParams, ['CO_MUNICIPIO_IBGE' => $codMunicipioIbge, 'ST_REGISTRO_N' => 'N', 'ST_REGISTRO_S' => 'S']);
        $params = $this->prepararDadosSqlDml($params);
        $sqlPreparado = self::$conexao->prepare($sql);
        foreach ($params as $bind) {
            $sqlPreparado->bindParam($bind[0], $bind[1]);
        }
        $this->execRole();
        return $sqlPreparado->execute();
    }

    public function buscaEas($coMunicipioIbge)
    {
        $sql = "
            SELECT DISTINCT EAS.CO_CNES, EAS.NO_FANTASIA, EAS.CO_CNES||' - '||EAS.NO_FANTASIA NO_FANTASIA_CO_CNES,EASV.CO_SEQ_EAS_VISIVEL, EASV.NO_EAS_VISIVEL,A.CO_EAS_VISIVEL
            FROM DBCNES.TB_ESTABELECIMENTO EAS 
            LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EASV ON (EASV.CO_CNES = EAS.CO_CNES AND EASV.ST_REGISTRO_ATIVO = 'S' AND EASV.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE)   
            LEFT JOIN DBSISVAN.TB_BFA_PESSOA A ON (A.CO_EAS_VISIVEL = EASV.CO_SEQ_EAS_VISIVEL AND A.ST_REGISTRO_ATIVO = 'S' AND A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE)
            WHERE DECODE(SUBSTR(EAS.CO_MUNICIPIO_GESTOR,0,2),'53','530010',EAS.CO_MUNICIPIO_GESTOR) = :CO_MUNICIPIO_IBGE            
            AND EAS.CO_MOTIVO_DESAB IS NULL
            AND SUBSTR(EAS.CO_NATUREZA_JUR,0,1) = :CO_NATUREZA_JUR
            AND EAS.TP_UNIDADE IN (:TP_UNIDADE_01, :TP_UNIDADE_02, :TP_UNIDADE_04, :TP_UNIDADE_05, :TP_UNIDADE_15, :TP_UNIDADE_22, :TP_UNIDADE_32, :TP_UNIDADE_36, :TP_UNIDADE_40, :TP_UNIDADE_42, :TP_UNIDADE_61, :TP_UNIDADE_70, :TP_UNIDADE_71, :TP_UNIDADE_72, :TP_UNIDADE_73, :TP_UNIDADE_74, :TP_UNIDADE_77, :TP_UNIDADE_78, :TP_UNIDADE_83)
            ORDER BY EAS.NO_FANTASIA 
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge
        , 'CO_NATUREZA_JUR' => 1
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
        ));
        return $this->query($sql);
    }

    public function buscaEasFamilia($coMunicipioIbge)
    {
        $sql = "
            SELECT A.CO_EAS_VISIVEL
            FROM DBCNES.TB_ESTABELECIMENTO EAS 
            INNER JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EASV ON (EASV.CO_CNES = EAS.CO_CNES AND EASV.ST_REGISTRO_ATIVO = 'S' AND EASV.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE)   
            INNER JOIN DBSISVAN.TB_BFA_PESSOA A ON (A.CO_EAS_VISIVEL = EASV.CO_SEQ_EAS_VISIVEL AND A.ST_REGISTRO_ATIVO = 'S')
            WHERE DECODE(SUBSTR(EAS.CO_MUNICIPIO_GESTOR,0,2),'53','530010',EAS.CO_MUNICIPIO_GESTOR) = :CO_MUNICIPIO_IBGE            
            AND EAS.CO_MOTIVO_DESAB IS NULL
            AND SUBSTR(EAS.CO_NATUREZA_JUR,0,1) = :CO_NATUREZA_JUR
            AND EAS.TP_UNIDADE IN (:TP_UNIDADE_01, :TP_UNIDADE_02, :TP_UNIDADE_04, :TP_UNIDADE_05, :TP_UNIDADE_15, :TP_UNIDADE_22, :TP_UNIDADE_32, :TP_UNIDADE_36, :TP_UNIDADE_40, :TP_UNIDADE_42, :TP_UNIDADE_61, :TP_UNIDADE_70, :TP_UNIDADE_71, :TP_UNIDADE_72, :TP_UNIDADE_73, :TP_UNIDADE_74, :TP_UNIDADE_77, :TP_UNIDADE_78, :TP_UNIDADE_83)
            GROUP BY A.CO_EAS_VISIVEL
            ORDER BY A.CO_EAS_VISIVEL
        ";
        $this->params(array(
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge
        , 'CO_NATUREZA_JUR' => 1
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

    public function existeCnes($coCnes)
    {
        $sql = "SELECT CO_SEQ_EAS_VISIVEL, CO_CNES, NO_EAS_VISIVEL FROM DBSISVAN.TB_BFA_EAS_VISIVEL WHERE CO_CNES = :CO_CNES AND ST_REGISTRO_ATIVO = 'S'";
        $this->params(array('CO_CNES' => $coCnes));
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function noProfissional($coCns)
    {
        $sql = "SELECT D.NO_PROFISSIONAL FROM DBCNES.TB_DADOS_PROFISSIONAL_SUS D WHERE D.CO_CNS = :CO_CNS";
        $this->params(array('CO_CNS' => $coCns));
        return $this->query($sql);
    }

    public function buscaProfissionaisEasVisivel($coCnes)
    {
//        $dataAtual = date('Y/m');
//        $dtComp = explode('/',$dataAtual);
//
//        if ( strlen($dtComp[1]) > 1) { // MESES ATÉ SETEMBRO
//            if ($dtComp[1] == 1) { //SE FOR JANEIRO
//                $dtComp[0] = $dtComp[0] - 1; //ANO -1
//                $dtComp[1] = 11; //MÊS NOVEMBRO
//            } elseif ($dtComp[1] == 2) { //SE FOR FEVEREIRO
//                $dtComp[0] = $dtComp[0] - 1; //ANO -1
//                $dtComp[1] = 12; //MÊS DEZEMBRO
//            } else {
//                $dtComp[1] = '0'.($dtComp[1] - 2);
//            }
//        } else {
//            $dtComp[1] = $dtComp[1] - 2;
//        }
//        $nuComp = $dtComp[0] . $dtComp[1];

        $sql = "
        SELECT
            DISTINCT
              D.CO_CNS,
              D.NO_PROFISSIONAL
            FROM DBCNES.TB_ESTABELECIMENTO A            
            INNER JOIN DBCNES.TB_COMP_CARGA_HORARIA_SUS B ON A.CO_UNIDADE = B.CO_UNIDADE
            AND B.NU_COMP >= TO_CHAR(ADD_MONTHS(TO_DATE(TO_CHAR(SYSDATE, 'YYYYMM'), 'YYYYMM'), -3), 'YYYYMM')            
            INNER JOIN DBCNES.TB_COMP_DADOS_PROFISSIONAL_SUS D ON
                B.CO_PROFISSIONAL_SUS = D.CO_PROFISSIONAL_SUS
                AND B.NU_COMP = D.NU_COMP
                AND D.CO_CNS IS NOT NULL         
            WHERE A.CO_MOTIVO_DESAB IS NULL
            AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            AND A.CO_CNES = :CO_CNES            
            ORDER BY D.NO_PROFISSIONAL
        ";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S'
            , 'CO_CNES' => $coCnes
        ));

        return $this->query($sql);
    }

}