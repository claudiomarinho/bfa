<?php
class Regiaosaude extends MY_Model
{
    public function retornarRegiao($nuAno, $coRegiao = null)
    {

        $sqlAux = '';
        if (!is_null($coRegiao) && $coRegiao != '99') {
            $sqlAux = ' AND UF.CO_REGIAO = :CO_REGIAO ';
            $this->params(array(
                'CO_REGIAO' => $coRegiao
            ));
        }

        $sql = "
            SELECT 
            REGIAO.CO_REGIAO,
            REGIAO.NO_REGIAO
            FROM 
            DBCGPAN.TB_VITA_MUNICIPIO VITA
            INNER JOIN DBGERAL.TB_MUNICIPIO MUN ON (MUN.CO_MUNICIPIO_IBGE = VITA.CO_MUNICIPIO_IBGE AND MUN.ST_MUNICIPIO = :ST_MUNICIPIO)
            INNER JOIN DBGERAL.TB_UF UF ON (UF.CO_UF_IBGE = MUN.CO_UF_IBGE AND UF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            INNER JOIN DBGERAL.TB_REGIAO REGIAO ON (REGIAO.CO_REGIAO = UF.CO_REGIAO AND REGIAO.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            WHERE
                    VITA.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                    AND VITA.NU_ANO_REFERENCIA = :NU_ANO_REFERENCIA
                    {$sqlAux}
            GROUP BY 
            REGIAO.CO_REGIAO,
            REGIAO.NO_REGIAO
            ORDER BY 
            REGIAO.NO_REGIAO";

        $this->params(array(
            'NU_ANO_REFERENCIA' => $nuAno,
            'ST_MUNICIPIO' => 'ATIVO',
            'ST_REGISTRO_ATIVO' => 'S'
         ));
        return $this->query($sql);
    }

    public function retornarRegional($sgUf)
    {

        $sql = "SELECT
                       B.CO_REGIONAL_SAUDE, B.NO_REGIONAL_SAUDE
                    FROM
                       DBGERAL.TB_MUNICIPIO A, DBGERAL.TB_REGIONAL_SAUDE B
                    WHERE
                       A.CO_REGIONAL_SAUDE = B.CO_REGIONAL_SAUDE
                       AND A.SG_UF = :SG_UF
                       AND B.ST_REGISTRO_ATIVO = 'S'
                    GROUP BY
                        B.CO_REGIONAL_SAUDE,
                        B.NO_REGIONAL_SAUDE
                    ORDER BY
                       B.NO_REGIONAL_SAUDE";

        $this->params(array(
            'SG_UF' => $sgUf
        ));
        return $this->query($sql);
    }

    public function retornarRegiaoSaude($sgUf)
    {

        $sql = "SELECT
                     B.CO_SEQ_REGIAO_SAUDE, B.NO_REGIAO_SAUDE
                 FROM
                     DBGERAL.TB_MUNICIPIO A, DBGERAL.TB_REGIAO_SAUDE B
                 WHERE
                     A.CO_REGIAO_SAUDE = B.CO_SEQ_REGIAO_SAUDE
                     AND A.SG_UF = :SG_UF
                 GROUP BY
                     B.CO_SEQ_REGIAO_SAUDE, B.NO_REGIAO_SAUDE
                 ORDER BY
                     B.NO_REGIAO_SAUDE";

        $this->params(array(
            'SG_UF' => $sgUf
        ));
        return $this->query($sql);
    }

    public function retornarDsei($coPessoaJuridica = null)
    {
        $sqlAux = '';
        if (!is_null($coPessoaJuridica)) {
            $sqlAux = " AND PJ.CO_SEQ_PESSOA_JURIDICA = :CO_PESSOA_JURIDICA ";
            $this->params['CO_PESSOA_JURIDICA'] = $coPessoaJuridica;
        }

        $sql = "
            SELECT DISTINCT
                    PJ.CO_SEQ_PESSOA_JURIDICA AS CO_DSEI, 
                    PJ.NO_PESSOA_JURIDICA, 
                    PJ.NU_CNPJ
            FROM
            DBCGPAN.TB_PESSOA_JURIDICA PJ
            INNER JOIN DBCGPAN.TB_CADASTRO_PESSOA PES ON (PES.CO_SEQ_CADASTRO = PJ.CO_CADASTRO)
            INNER JOIN DBGERAL.TB_MUNICIPIO MUN ON ( MUN.CO_MUNICIPIO_IBGE = PES.CO_MUNICIPIO_IBGE AND MUN.ST_MUNICIPIO = 'ATIVO' )
            WHERE
            PJ.CO_TIPO_ENTIDADE = :CO_TIPO_ENTIDADE
            {$sqlAux}
            ORDER BY
            PJ.NO_PESSOA_JURIDICA";

        $this->params(array(
            'CO_TIPO_ENTIDADE' => '42'
        ));
        return $this->query($sql);
    }
    
    public function retornarPovosIndigenas($coMunicipio, $nuVigencia)
    {        
        $sql = "
                SELECT
                    DISTINCT F.NO_POVO_INDIGENA
                FROM 
                    DBSISVAN.TB_BFA_PESSOA P
                    INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                    INNER JOIN DBSISVAN.TB_BFA_FAMILIA F ON F.CO_SEQ_BFA_FAMILIA = P.CO_BFA_FAMILIA
                WHERE 
                    P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                    AND F.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                    AND F.ST_RESIDE_INDIGENA = :ST_RESIDE_INDIGENA
                    AND V.NU_VIGENCIA = :NU_VIGENCIA
                    AND P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
                ORDER BY
                    F.NO_POVO_INDIGENA";

        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'ST_RESIDE_INDIGENA' => 1,
            'NU_VIGENCIA' => $nuVigencia,
            'CO_MUNICIPIO_IBGE' => $coMunicipio
        ));
        return $this->query($sql);
    }
}