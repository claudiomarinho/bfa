<?php

class Familia extends MY_Model
{
    protected $_table = 'TB_BFA_FAMILIA';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_FAMILIA';

    public function buscaFamilia($coFamilia,$nuVigencia)
    {
        $sql = "SELECT * 
                          FROM DBSISVAN.TB_BFA_FAMILIA FAM
                          INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_FAMILIA = FAM.CO_SEQ_BFA_FAMILIA
                          WHERE FAM.CO_SEQ_BFA_FAMILIA = :CO_SEQ_BFA_FAMILIA 
                          AND FAM.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                          AND V.NU_VIGENCIA = :NU_VIGENCIA 
                          AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'CO_SEQ_BFA_FAMILIA' => $coFamilia,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }

    public function buscaIndividuosFamilia($coFamilia,$nuVigencia)
    {
            $sql = "
                  SELECT P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, P.NU_NIS_PESSOA NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 1, 'female', 'male') AS DS_SEXO, P.ST_OBRIGATORIO,
                          AC.ST_GESTANTE, AC.ST_PESSOA_NAO_ACOMPANHADA, RLA.NU_VIGENCIA, TO_CHAR(RLA.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, AC.CO_BFA_MOTIVO_NAO_ACOMP, AC.CO_SISTEMA_ORIGEM_ACOMP,
                          (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' BAIRRO: ' || D.NO_BAIRRO || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'N&Atilde;O INFORMADO')) AS DS_ENDERECO
                  FROM DBSISVAN.TB_BFA_FAMILIA F
                  INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON (P.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA AND P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
                  INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON (P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO) 
                  LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RLA ON (RLA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RLA.NU_VIGENCIA = :NU_VIGENCIA)
                  LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO AC ON (AC.CO_SEQ_BFA_ACOMPANHAMENTO = RLA.CO_BFA_ACOMPANHAMENTO AND AC.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
                  WHERE F.CO_SEQ_BFA_FAMILIA = :CO_BFA_FAMILIA 
                  AND F.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                  ORDER BY P.NO_PESSOA";
        $this->params(array(
            'CO_BFA_FAMILIA' => $coFamilia, 
            'NU_VIGENCIA' => $nuVigencia, 
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }


    /* CONSULTA 1 DE 3 (VINCULAR EAS) */
    public function buscaFamiliasPorFiltrosTemp($coMunicipio,$noBairro = null,$coSeqEas = null,$nuNis = null,$coCnsProfissional = null,$nuVigencia, $coBfaArea = false)
    {
        $this->_params = [];
        $sqlAux = '';
        $sqlAuxArea ='';
        if($noBairro != '' || $noBairro != null){
            if(!$coBfaArea){
                $sqlAux .= ' AND D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE AND D.NO_BAIRRO = :NO_BAIRRO ';
                $this->_params['NO_BAIRRO'] = $noBairro;
            }else{
                $sqlAuxArea .= ' INNER JOIN DBSISVAN.TB_BFA_AREA AR ON (AR.CO_SEQ_BFA_AREA = D.CO_BFA_AREA AND AR.CO_SEQ_BFA_AREA = :CO_BFA_AREA
                AND AR.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND AR.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE)  ';
                $this->_params['CO_BFA_AREA'] = $coBfaArea;
            }
        }
        if ($coSeqEas!='' && $coSeqEas!='sVinculo'){$sqlAux .= ' AND G.CO_SEQ_EAS_VISIVEL = :CO_SEQ_EAS_VISIVEL'; $this->_params['CO_SEQ_EAS_VISIVEL'] = $coSeqEas; }
        else if ($coSeqEas==''){  } else if ($coSeqEas=='sVinculo'){ $sqlAux .= ' AND G.CO_SEQ_EAS_VISIVEL IS NULL'; }
        if ($coCnsProfissional!=''){$sqlAux .= ' AND J.CO_CNS = :CO_CNS'; $this->_params['CO_CNS'] = $coCnsProfissional;}
        if (!is_null($nuNis) && $nuNis !== ''){
            $this->_params = [];
            $sqlAux = '';
            $sqlAuxArea ='';
            $sqlAux .= ' AND P.NU_NIS_PESSOA = :NU_NIS AND D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
            $this->_params['NU_NIS'] = $nuNis;
        }
        $sql = "SELECT DISTINCT(E.CO_SEQ_BFA_FAMILIA), E.CO_FAMILIA_MDS, E.ST_QUILOMBOLA, E.NO_QUILOMBOLA, 
                            G.CO_CNES, G.CO_SEQ_EAS_VISIVEL CO_EAS_VISIVEL, G.NO_EAS_VISIVEL, J.NO_PROFISSIONAL, J.CO_CNS,
                            P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, 
                            P.NU_NIS_PESSOA NU_NIS, 
                            (D.DS_TIPO_LOGRADOURO||DECODE(D.NO_TITULO_LOGRADOURO, NULL, '', ' '||TRIM(D.NO_TITULO_LOGRADOURO)) || decode(D.NO_LOGRADOURO, null, '', ' '||TRIM(D.NO_LOGRADOURO)) || decode(D.NU_LOGRADOURO, NULL, '', ' '||LTRIM(D.NU_LOGRADOURO,0)) || DECODE(D.NO_COMPL_LOGRADOURO, NULL, '', ' '||D.NO_COMPL_LOGRADOURO) || DECODE(D.NU_COMPL_LOGRADOURO, NULL, '', ' '||TRIM(D.NU_COMPL_LOGRADOURO))  || DECODE(D.DS_REF_LOGRADOURO, NULL, '', ' '||D.DS_REF_LOGRADOURO) || ' CEP: ' || D.NU_CEP || ' ' || DECODE(D.TP_LOCALIDADE, 1, 'ZONA URBANA', 2, 'ZONA RURAL', 'NAO INFORMADO')) AS DS_ENDERECO, D.NO_BAIRRO, DECODE(G.CO_SEQ_EAS_VISIVEL, null, '0', '1') VINCULADO
                            FROM 
              DBSISVAN.TB_BFA_DOMICILIO D
              INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON P.CO_FAMILIA_MDS = D.CO_FAMILIA_MDS  AND P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
              INNER JOIN DBSISVAN.TB_BFA_FAMILIA E ON (P.CO_BFA_FAMILIA = E.CO_SEQ_BFA_FAMILIA
                AND E.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                AND E.ST_RESIDE_INDIGENA != '1' )
              {$sqlAuxArea}
              INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                AND V.NU_VIGENCIA = :NU_VIGENCIA
                AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
              LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL G ON (
              P.CO_EAS_VISIVEL = G.CO_SEQ_EAS_VISIVEL 
                AND G.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
                AND G.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS J ON (
                P.CO_CNS_PROF_VISIVEL = J.CO_CNS
                AND J.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
                WHERE (
                D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO 
                {$sqlAux}
          )
          ORDER BY E.CO_FAMILIA_MDS";
        $this->params(array_merge($this->_params, [
            'NU_VIGENCIA' => $nuVigencia,
            'CO_MUNICIPIO_IBGE' => $coMunicipio,
            'ST_REGISTRO_ATIVO' => 'S'
        ]));
//        echo nl2br($sql);
//        var_dump(array_merge($this->_params, [
//            'NU_VIGENCIA' => $nuVigencia,
//            'CO_MUNICIPIO_IBGE' => $coMunicipio,
//            'ST_REGISTRO_ATIVO' => 'S'
//        ]));exit;
        return  $this->query($sql);
    }

    /* CONSULTA 2 DE 3 (VINCULAR EAS) */
    public function buscaIndividuosFamiliaTemp($coFamilia,$nuVigencia)
    {
        $sql = "SELECT P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, P.NU_NIS_PESSOA NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 1, 'female', 'male') AS DS_SEXO, P.ST_OBRIGATORIO,
                  P.CO_EAS_VISIVEL, H.NO_LOGRADOURO, H.NU_COMPL_LOGRADOURO, H.NO_BAIRRO
                  FROM DBSISVAN.TB_BFA_FAMILIA F
                  INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON (P.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA
                  AND P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
                  LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO H ON (P.CO_BFA_DOMICILIO = H.CO_SEQ_BFA_DOMICILIO
                  AND H.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
                  INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA
                  WHERE F.CO_FAMILIA_MDS = :CO_BFA_FAMILIA
                  AND F.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                  AND V.NU_VIGENCIA = :NU_VIGENCIA
                  AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'CO_BFA_FAMILIA' => $coFamilia,
            'NU_VIGENCIA' => $nuVigencia, 
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }

    public function buscaIndiviuosFamiliaCoPessoa($coFamilia,$nuVigencia)
    {
        $sql = "SELECT DISTINCT P.CO_SEQ_BFA_PESSOA
                  FROM  DBSISVAN.TB_BFA_PESSOA P 
                  INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                  WHERE P.CO_FAMILIA_MDS = :CO_BFA_FAMILIA
                  AND P.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                  AND V.NU_VIGENCIA = :NU_VIGENCIA
                  AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params(array(
            'CO_BFA_FAMILIA' => $coFamilia, 
            'NU_VIGENCIA' => $nuVigencia, 
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }


    /* CONSULTA 3 DE 3 (HISTORICO DE VINCULACAO EAS) */
    public function buscaHistoricoFamiliasVinculadas($coFamilia,$nuVigencia)
    {
        $sql = "SELECT DISTINCT (E.CO_SEQ_BFA_FAMILIA), E.CO_FAMILIA_MDS, F.CO_EAS_VISIVEL,
            G.CO_CNES, G.CO_SEQ_EAS_VISIVEL, G.NO_EAS_VISIVEL, J.NO_PROFISSIONAL
            FROM DBSISVAN.TB_BFA_PESSOA F
            LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON (F.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
            AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            INNER JOIN DBSISVAN.TB_BFA_FAMILIA E ON (F.CO_BFA_FAMILIA = E.CO_SEQ_BFA_FAMILIA
            AND E.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL G ON (F.CO_EAS_VISIVEL = G.CO_SEQ_EAS_VISIVEL
            AND G.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS J ON (F.CO_CNS_PROF_VISIVEL = J.CO_CNS
            AND J.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_FAMILIA = E.CO_SEQ_BFA_FAMILIA
            WHERE (E.CO_FAMILIA_MDS = :CO_BFA_FAMILIA
            AND F.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            AND V.NU_VIGENCIA = :NU_VIGENCIA
            AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)";
        $this->params(array(
            'CO_BFA_FAMILIA' => $coFamilia,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }


    public function buscaFamiliaPorMunicipio($coFamilia,$nuVigencia)
    {
        $sql = "SELECT DISTINCT (E.CO_SEQ_BFA_FAMILIA)
            FROM DBSISVAN.TB_BFA_PESSOA F
            LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON (F.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
            AND D.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            INNER JOIN DBSISVAN.TB_BFA_FAMILIA E ON (F.CO_BFA_FAMILIA = E.CO_SEQ_BFA_FAMILIA
            AND E.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)
            INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_FAMILIA = E.CO_SEQ_BFA_FAMILIA
            WHERE (
            D.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE
            AND ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
            AND V.NU_VIGENCIA = :NU_VIGENCIA
            AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO)";
        $this->params(array(
            'CO_SEQ_BFA_FAMILIA' => $coFamilia, 
            'NU_VIGENCIA' => $nuVigencia, 
            'ST_REGISTRO_ATIVO' => 'S'
        ));
        return $this->query($sql);
    }

}