<?php

class Mapa extends MY_Model
{
    protected $_table = 'TB_BFA_MAPA';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_MAPA';
    protected $_triggerSequence = true;
    protected $_sequence = 'SQ_BFAMAPA_COSEQBFAMAPA';

    public function consultarMapas($dados)
    {
        $where = "";
        if (isset($dados)) {
            $where .= $this->geradorDeFiltros($dados);
        }
        $sql = "
            SELECT CO_PESSOA_FISICA, CO_SEQ_BFA_MAPA, DT_CADASTRO, DS_FILTROS, ST_REGISTRO_ATIVO, DS_SQL, DS_PARAMETROS
            FROM DBSISVAN.TB_BFA_MAPA
            WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO {$where} 
            ORDER BY DT_CADASTRO DESC, CO_SEQ_BFA_MAPA DESC
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
        return $this->query($sql);
    }

    public function consultarMapaPorId($coMapa)
    {
        $where = "";
        if (isset($coMapa)) {
            $where .= $this->geradorDeFiltros($coMapa);
        }
        $sql = "
            SELECT A.CO_PESSOA_FISICA, A.CO_SEQ_BFA_MAPA, A.CO_MUNICIPIO_IBGE, M.NO_MUNICIPIO, TO_CHAR(A.DT_CADASTRO, 'DD/MM/YYYY') AS DT_CADASTRO,
                   A.DS_FILTROS, A.ST_REGISTRO_ATIVO, A.DS_SQL, A.DS_PARAMETROS
            FROM DBSISVAN.TB_BFA_MAPA A
             INNER JOIN DBGERAL.TB_MUNICIPIO M ON (M.CO_MUNICIPIO_IBGE = A.CO_MUNICIPIO_IBGE AND M.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            WHERE A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO {$where}
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
    public function gerarMapa($sql, $params)
    {
        $sql = $sql;
        $this->_params = $params;
        $this->params($this->_params);
        return $this->query($sql);
    }

    public function consultarPorFiltro($filtroJson,$coMunicipioIbge,$nuVigencia)
    {
        $sql = "
            SELECT 
                A.CO_PESSOA_FISICA,
                A.CO_SEQ_BFA_MAPA,
                TO_CHAR(A.DT_CADASTRO, 'DD/MM/YYYY') AS DT_CADASTRO,
                A.CO_MUNICIPIO_IBGE,
                M.NO_MUNICIPIO,
                A.NU_VIGENCIA,
                A.DS_FILTROS,
                A.ST_REGISTRO_ATIVO,
                A.DS_SQL,
                A.DS_PARAMETROS
            FROM 
                DBSISVAN.TB_BFA_MAPA A
                INNER JOIN DBGERAL.TB_MUNICIPIO M ON (M.CO_MUNICIPIO_IBGE = A.CO_MUNICIPIO_IBGE AND M.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            WHERE
                A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND 
                A.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND 
                A.NU_VIGENCIA = :NU_VIGENCIA AND
                A.DS_FILTROS = '{$filtroJson}'
        ";
        $this->params(array(
            'ST_REGISTRO_ATIVO' => 'S',
            'CO_MUNICIPIO_IBGE' => $coMunicipioIbge,
            'NU_VIGENCIA' => $nuVigencia
        ));
        $this->fetchOne(true);
        return $this->query($sql);
    }
    
    public function gerarMapaNaoAcomp($filtros)
    {
        $where = $this->geradorDeFiltros($filtros);

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                MAPA.CO_BFA_MAPA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO, 
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,                 
                DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'N&Atilde;O', 'SIM') ST_ACOMPANHADO, 
                DECODE(ACOMP.CO_BFA_MOTIVO_NAO_ACOMP, NULL, 'N&Atilde;O', 'SIM') ST_MOTIVO_NAO_ACOMP,    
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO      
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_MAPA MAPA ON MAPA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND MAPA.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO          
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON P.CO_SEQ_BFA_PESSOA = RL.CO_BFA_PESSOA AND RL.NU_VIGENCIA = :NU_VIGENCIA 
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO          
                AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                $where
            ORDER BY
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->_params['NU_VIGENCIA'] = $filtros['V.NU_VIGENCIA'];
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }
    
    public function gerarMapaBairro($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            if ($filtros['ST_ACOMPANHAMENTO'] == '1' || $filtros['ST_ACOMPANHAMENTO'] == '2') {
                $vigencia = ":VNU_VIGENCIA";
            }
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }
            if (isset($filtros['A.NO_AREA'])) {
                $inner .="INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
            }
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO         
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO               
                AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    public function gerarMapaEas($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            $vigencia = ":VNU_VIGENCIA";
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL  
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                INNER JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL 
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO    
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    public function gerarMapaUnidadeFamiliar($filtros)
    {
        if ($filtros['P.CO_BFA_FAMILIA']) {
            $where = "";
            if (isset($filtros)) {
                unset($filtros['ST_ACOMPANHAMENTO']);
                $where .= $this->geradorDeFiltros($filtros);
            }

            $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL  
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            ";
            $this->_params['ST_REGISTRO_ATIVO'] = 'S';
            $this->params($this->_params);
//            print_r($sql);
//            var_dump($this->_params);
//            var_dump($this->query($sql));
//            die;
            return $this->query($sql);
        } else {
            return false;
        }

    }

    public function gerarMapaBairroEmBranco($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            $vigencia = ":VNU_VIGENCIA";
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO         
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO                  
                AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO                  
                AND P.CO_BFA_DOMICILIO IS NULL
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    public function gerarMapaEasNaoVinculada($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            $vigencia = ":VNU_VIGENCIA";
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }
            if (isset($filtros['A.NO_AREA'])) {
                $inner .="INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA AND A.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
            }
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO         
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO                  
                AND P.CO_EAS_VISIVEL IS NULL
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    public function gerarMapaArquivoComplementar($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            $vigencia = ":VNU_VIGENCIA";
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }            
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TH_BFA_CARGA_ARQUIVO C ON C.CO_SEQ_BFA_CARGA_ARQUIVO = V.CO_BFA_CARGA_ARQUIVO_PES
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO                
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO         
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO                  
                AND C.TP_ARQUIVO_GERAL = 'C'
                AND C.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    public function gerarMapaQuilombola($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            $vigencia = ":VNU_VIGENCIA";
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO    
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA F ON F.CO_SEQ_BFA_FAMILIA = P.CO_BFA_FAMILIA
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO     
                AND F.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND F.ST_QUILOMBOLA = 1
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    public function gerarMapaIndigena($filtros)
    {
        $where = "";
        $inner = "";
        if (isset($filtros)) {
            $vigencia = ":VNU_VIGENCIA";
            if ($filtros['ST_ACOMPANHAMENTO'] == '1') {
                $where .= "AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = $vigencia)";

            } else if (($filtros['ST_ACOMPANHAMENTO'] == '2')) {
                $inner .= "INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $vigencia
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO ";
            }
            unset($filtros['ST_ACOMPANHAMENTO']);
            $where .= $this->geradorDeFiltros($filtros);
        }

        $sql = "
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO    
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA F ON F.CO_SEQ_BFA_FAMILIA = P.CO_BFA_FAMILIA
                $inner
            WHERE
                P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO     
                AND F.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND F.ST_RESIDE_INDIGENA = 1
                $where
            ORDER BY 
                D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        ";
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
//        print_r($sql);
//        var_dump($this->_params);
//        var_dump($this->query($sql));
//        die;
        return $this->query($sql);
    }

    
    
}