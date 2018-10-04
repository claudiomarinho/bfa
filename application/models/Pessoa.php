<?php

class Pessoa extends MY_Model
{
    protected $_table = 'TB_BFA_PESSOA';
    protected $_schema = 'DBSISVAN';
    protected $_primaryKey = 'CO_SEQ_BFA_PESSOA';

    public function updatePessoaPorFamilias($arrFamiliaMds)
    {

        $sql = "UPDATE DBSISVAN.TB_BFA_PESSOA SET CO_EAS_VISIVEL = :CO_EAS_VISIVEL, CO_CNS_PROF_VISIVEL = :CO_CNS_PROF_VISIVEL
        WHERE ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO AND CO_BFA_FAMILIA IN ( ";
        $total = count($arrFamiliaMds);
        $arrQuebrado = array_chunk($arrFamiliaMds, 999);
        $status = 0;
        foreach ($arrQuebrado as $arr) {
            $result = $this->montarIn($arr, 'coFamilia');
            $params = array_merge($result['params'], ['CO_EAS_VISIVEL' => $arrFamiliaMds[0]['coCnes'], 'CO_CNS_PROF_VISIVEL' => $arrFamiliaMds[0]['coCns'], 'ST_REGISTRO_ATIVO' => 'S']);
            $params = $this->prepararDadosSqlDml($params);
            $sqlPreparado = self::$conexao->prepare($sql . $result['query'] . " )");
            foreach ($params as $bind) {
                $sqlPreparado->bindParam($bind[0], $bind[1]);
            }
            $this->execRole();
            $status += $sqlPreparado->execute();
        }
        return ($status == $total);
    }

    public function buscaIndividuo($coPessoa, $nuVigencia)
    {
        $sql = "SELECT * 
                          FROM DBSISVAN.TB_BFA_PESSOA P
                          INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA 
                          WHERE CO_SEQ_BFA_PESSOA = :CO_SEQ_BFA_PESSOA AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params([
            'CO_SEQ_BFA_PESSOA' => $coPessoa,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ]);
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornaBuscaIndividuos($coMunicipioIbge, $dados = null, $nuVigencia)
    {
        $filtros = '';
        if (isset($dados['NU_NIS'])) {
            $dados['NU_NIS_PESSOA'] = $dados['NU_NIS'];
            unset($dados['NU_NIS']);
            if (trim($dados['NU_NIS_PESSOA']) !== '') {
                $filtros .= $this->geradorDeFiltros($dados);
            } else {
                $filtros .= $this->geradorDeFiltros($dados, array('NU_NIS_PESSOA'));
                $filtros .= ' AND  P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
                $this->_params['CO_MUNICIPIO_IBGE'] =  $coMunicipioIbge;
            }
        } else {
            $filtros .= $this->geradorDeFiltros($dados, array('NU_NIS'));
            $filtros .= ' AND  P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
            $this->_params['CO_MUNICIPIO_IBGE'] =  $coMunicipioIbge;
        }
        $this->_params['NU_VIGENCIA'] =  $nuVigencia;
        $this->_params['ST_REGISTRO_ATIVO'] =  'S';
        $this->params($this->_params);
        $sql = "
            SELECT 
                P.CO_SEQ_BFA_PESSOA, P.CO_BFA_FAMILIA, P.NO_PESSOA, P.NU_NIS_PESSOA NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 1, 'FEMININO', 'MASCULINO') AS DS_SEXO,  
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO,  DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'NAO', 'SIM') ST_ACOMPANHADO
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON (RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = :NU_VIGENCIA AND DT_ACOMPANHAMENTO IS NOT NULL)
            WHERE 
                ROWNUM < 201
                $filtros
            ORDER BY 
                NO_PESSOA
            ";
        return $this->query($sql);
    }

    public function retornarTotalBuscaIndividuo($coMunicipioIbge, $dados = null, $nuVigencia)
    {
        $filtros = '';
        if (isset($dados['NU_NIS'])) {
            $dados['NU_NIS_PESSOA'] = $dados['NU_NIS'];
            unset($dados['NU_NIS']);
            if (trim($dados['NU_NIS_PESSOA']) !== '') {
                $filtros .= $this->geradorDeFiltros($dados);
            } else {
                $filtros .= $this->geradorDeFiltros($dados, array('NU_NIS_PESSOA'));
                $filtros .= ' AND  P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
                $this->params(array('CO_MUNICIPIO_IBGE' => $coMunicipioIbge));
            }
        } else {
            $filtros .= $this->geradorDeFiltros($dados, array('NU_NIS'));
            $filtros .= ' AND  P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
            $this->params(array('CO_MUNICIPIO_IBGE' => $coMunicipioIbge));
        }
        $sql = " SELECT 
               COUNT(P.CO_SEQ_BFA_PESSOA) QT_TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON (RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = $nuVigencia AND DT_ACOMPANHAMENTO IS NOT NULL)
            WHERE 
                V.NU_VIGENCIA = $nuVigencia AND V.ST_REGISTRO_ATIVO = 'S' 
                $filtros";
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function retornaBuscaIndividuosPaginado($coMunicipioIbge, $dados = null, $nuVigencia, $start = 1, $end = 25, $orderBy = 'ASC', $orderByName = 'NO_PESSOA')
    {
        $filtros = '';
        $this->_params = [];
        if (isset($dados['NU_NIS'])) {
            $dados['NU_NIS_PESSOA'] = $dados['NU_NIS'];
            unset($dados['NU_NIS']);
            if (trim($dados['NU_NIS_PESSOA']) !== '') {
                $filtros .= $this->geradorDeFiltros($dados);
            } else {
                $filtros .= $this->geradorDeFiltros($dados, array('NU_NIS_PESSOA'));
                $filtros .= ' AND  P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
                $this->_params['CO_MUNICIPIO_IBGE'] = $coMunicipioIbge;
            }
        } else {
            $filtros .= $this->geradorDeFiltros($dados, array('NU_NIS'));
            $filtros .= ' AND  P.CO_MUNICIPIO_IBGE = :CO_MUNICIPIO_IBGE ';
            $this->_params['CO_MUNICIPIO_IBGE'] = $coMunicipioIbge;
        }

        $sql = "
            SELECT * FROM (SELECT 
                ROW_NUMBER() OVER (ORDER BY P.CO_SEQ_BFA_PESSOA) LINHA,
                P.CO_SEQ_BFA_PESSOA, P.CO_BFA_FAMILIA, P.NO_PESSOA, P.NU_NIS_PESSOA NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 1, 'FEMININO', 'MASCULINO') AS DS_SEXO,  
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO,  DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'NAO', 'SIM') ST_ACOMPANHADO
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON (RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = :NU_VIGENCIA AND DT_ACOMPANHAMENTO IS NOT NULL)
            WHERE 
                V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
                $filtros
            ORDER BY 
                $orderByName $orderBy
            ) WHERE linha BETWEEN $start AND ($start+$end)";
        $this->_params['NU_VIGENCIA'] = $nuVigencia;
        $this->_params['ST_REGISTRO_ATIVO'] = 'S';
        $this->params($this->_params);
        return $this->query($sql);
    }

    public function buscaIndividuoCompleto($coPessoa, $nuVigencia)
    {
        $sql = "
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA,
                PESS.CO_BFA_FAMILIA,
                PESS.CO_MUNICIPIO_IBGE,
                PESS.NO_PESSOA,
                PESS.NU_NIS_PESSOA,
                PESS.DT_NASCIMENTO,
                DECODE(PESS.CO_SEXO, 1, 'FEMININO', 'MASCULINO') AS DS_SEXO,
                (DOM.NO_LOGRADOURO || ' ' || DOM.NO_COMPL_LOGRADOURO || ' ' || DOM.NO_BAIRRO) AS DS_ENDERECO
            FROM
                DBSISVAN.TB_BFA_PESSOA PESS
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO DOM ON DOM.CO_SEQ_BFA_DOMICILIO = PESS.CO_BFA_DOMICILIO
            WHERE 
                CO_SEQ_BFA_PESSOA = :CO_SEQ_BFA_PESSOA AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params([
            'CO_SEQ_BFA_PESSOA' => $coPessoa,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ]);
        $this->fetchOne(true);
        return $this->query($sql);
    }

    public function buscaCoBfaFamiliaNuNisPessoa($nuNis, $nuVigencia)
    {
        $sql = "SELECT PESS.CO_BFA_FAMILIA 
                          FROM DBSISVAN.TB_BFA_PESSOA PESS
                          INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                          WHERE PESS.NU_NIS_PESSOA = :NU_NIS_PESSOA AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO";
        $this->params([
            'NU_NIS_PESSOA' => $nuNis,
            'NU_VIGENCIA' => $nuVigencia,
            'ST_REGISTRO_ATIVO' => 'S'
        ]);
        $this->fetchOne(true);
        return $this->query($sql);
    }

}