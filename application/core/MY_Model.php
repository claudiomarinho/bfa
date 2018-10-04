<?php
require_once BASEPATH . 'dotenv/autoloader.php';

class MY_Model
{

    /**
     * Define a configuração de conexão ao BD a ser usada
     */
    protected $_sequence;
    protected $_schema;
    protected $_table;
    protected $_primaryKey;
    protected $_params;
    protected $_sql;
    public $id;

    /**
     * @var PDO
     */
    public static $conexao;

    protected $erros = array();
    private $tipoSQL;
    private $destinoSQL;
    private $condicaoSQL;
    private $colunasSQL;
    private $parametrosSQL;
    private $orderBy;
    private $fetchOne = false;
    private $associate = false;
    private $habilitaTransaction = true;

    CONST BEGIN_TRANSACTION = 0;
    CONST COMMIT = 1;
    CONST ROLLBACK = 2;

    public function __construct()
    {
        try {
            $dotenv = new Dotenv\Dotenv(PATH_DEFAULT);
            $dotenv->load();
            if (!is_object(self::$conexao)) {
                self::$conexao = new PDO("oci:dbname=(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=" . getenv('DB_HOST') . ")(PORT=1521)))(CONNECT_DATA=(SERVICE_NAME=" . getenv('DB_SERVICE') . ")(FAILOVER_MODE=(TYPE=SELECT)(METHOD=BASIC)(RETRIES=20)(DELAY=5))));charset=" . getenv('DB_ENCODING'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));
            }
            self::$conexao->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
            self::$conexao->exec("ALTER SESSION SET NLS_NUMERIC_CHARACTERS = '.,'");
            self::$conexao->exec("ALTER SESSION SET NLS_DATE_FORMAT = 'DD/MM/YYYY'");
            self::$conexao->exec("ALTER SESSION SET NLS_DATE_LANGUAGE = 'BRAZILIAN PORTUGUESE'");
        } catch (PDOException $e) {
            throw new PDOException("Erro ao abrir conexao com o Banco de Dados: " . $e->getMessage());
        }
    }

    public function getSql()
    {
        return $this->_sql;
    }

    public function getParameters()
    {
        return $this->_params;
    }

    /**
     * Insere no banco de dados o array com os dados
     * @param array $dados
     */
    public function insert(array $dados)
    {
        $this->execRole();
        $sql = "INSERT INTO {$this->_schema}.{$this->_table} (";
        $qtdElementos = 1;
        $campos = '';
        $valores = '';

        if (!isset($dados[$this->_primaryKey]) || empty($dados[$this->_primaryKey])) {
            $this->id = $dados[$this->_primaryKey] = $this->nextID();
        }
        foreach ($dados as $campo => $valor) {
            $campos .= $campo;
            if (strpos(strtoupper($campo), 'DT_') === false) {
                $valores .= ":{$campo}";
            } else {
                $valores .= $this->getDqlDate($campo, $valor, "insert");
            }
            if ($qtdElementos < count($dados)) {
                $campos .= ', ';
                $valores .= ', ';
            } else {
                $campos .= ') VALUES (';
                $valores .= ')';
            }
            $qtdElementos++;
        }
        $sql .= $campos . $valores;
        //$status = self::$conexao->prepare($sql)->execute($this->prepararDadosSql($dados));
        $sqlPreparado = self::$conexao->prepare($sql);
        $params = $this->prepararDadosSqlDml($dados);

//		print_r($sqlPreparado);
//		var_dump($dados);

        foreach ($params as $bind) {
            if ($bind[1] != "SYSDATE") {
                if (is_string($bind[1]) && strlen($bind[1]) > 255) {
                    $sqlPreparado->bindParam($bind[0], $bind[1], PDO::PARAM_STR, strlen($bind[1]));
                } else {
                    $sqlPreparado->bindParam($bind[0], $bind[1]);
                }
            }

        }
        $status = $sqlPreparado->execute();

        if ($status === true) {
            $this->id = $this->lastInsertId();
            return $status;
        } else {
            $this->gravarLogErro($sql, $dados);
            return $status;
        }
    }

    /**
     * Retorna parte da query para a inserção ou atualizada de um campo do tipo date
     * @return string
     */
    protected function getDqlDate($campo, $valor, $tipo = "insert")
    {
        switch ($tipo) {
            case "insert":
                if ($valor == "SYSDATE") {
                    return "$valor";
                } else {
                    return "TO_DATE(:$campo, 'DD/MM/YYYY HH24:MI:SS')";
                }
                break;
            case "update":
                if ($valor == "SYSDATE") {
                    return "$campo = $valor ";
                } else {
                    return "$campo = TO_DATE(:$campo, 'DD/MM/YYYY HH24:MI:SS') ";
                }
                break;
        }
    }

    /**
     * Pega o próximo ID gerado pela sequence
     * @return integer
     */
    protected function nextID()
    {
        $sql = "SELECT {$this->_schema}.{$this->_sequence}.NEXTVAL FROM DUAL";
//		print_r($sql);
        $rs = self::$conexao->query($sql);
        if ($rs) {
            $id = $rs->fetch();
            return $id['NEXTVAL'];
        } else {
            $erro = self::$conexao->errorInfo();
            $this->erros[] = $erro[2];
        }
    }

    /**
     * Retorna o ultimo ID (chave) gerado pela Sequence
     */
    protected function lastInsertId()
    {
        if (empty($this->_sequence)) {
            return null;
        } else {
            $sql = "SELECT {$this->_schema}.{$this->_sequence}.CURRVAL FROM DUAL";
            $rs = self::$conexao->query($sql);
            if ($rs) {
                $id = $rs->fetch();
                return $id['CURRVAL'];
            } else {
                $erro = self::$conexao->errorInfo();
                $this->erros[] = $erro[2];
            }
        }
    }

    protected function prepararDadosSql($dados)
    {
        $dadosPreparados = array();
        foreach ($dados as $campo => $dado) {
            $dadosPreparados[":{$campo}"] = $dado;
        }
        return $dadosPreparados;
    }

    protected function prepararDadosSqlDml($dados)
    {
        $dadosPreparados = array();
        foreach ($dados as $campo => $dado) {
            $dadosPreparados[] = array(":{$campo}", $dado);
        }
        return $dadosPreparados;
    }

    /**
     * Salva (insere ou atualiza) os dados recebidos
     * @param array $dados
     */
    public function save(array $dados)
    {
        if (array_key_exists($this->_primaryKey, $dados) && !empty($dados[$this->_primaryKey])) {
            return $this->update($dados);
        } else {
            return $this->insert($dados);
        }
    }

    public function montarIn($arr, $campo)
    {
        $in = '';
        $params = [];
        foreach ($arr as $i => $ar) {
            $in .= ":" . $campo . $i . ", ";
            $params[$campo . $i] = $ar[$campo];
        }
        return ['query' => substr($in, 0, -2), 'params' => $params];
    }

    /**
     * Inativa os dados recebidos
     * @param array $valorInativar Obrigatorio passar no formato array()
     */
    public function inativar(array $valorInativar)
    {
        $camposWhereAtualizar = true;
        if (key($valorInativar) == 0 && isset($valorInativar[0])) {
            $dados = array($this->_primaryKey => $valorInativar[0], 'ST_REGISTRO_ATIVO' => 'N');
        } else {
            $dados = array('ST_REGISTRO_ATIVO' => 'N');
            $camposWhereAtualizar = $valorInativar;
        }
        return $this->update($dados, $camposWhereAtualizar);
    }

    private function montarWherePK()
    {
        $where = '';
        $and = ' AND ';
        if (is_array($this->_primaryKey)) {
            $qtd = count($this->_primaryKey);
            $i = 1;
            foreach ($this->_primaryKey as $value) {
                $and = ($qtd === $i) ? '' : ' AND ';
                $where .= $value . ' = :' . $value . $and;
                $i++;
            }
        } else {
            $where .= $this->_primaryKey . ' = :' . $this->_primaryKey;
        }

        return $where;
    }

    /**
     * Atualiza os dados recebidos
     * @param array $dados
     * @param bool|array $primaryKey
     */
    public function update(array $dados, $primaryKey = true)
    {
        $this->execRole();
        $sql = "UPDATE {$this->_schema}.{$this->_table} SET ";
        $sql .= $this->verificaParametroData($dados);
        $params = array();
        if (!is_array($primaryKey)) {
            $sql .= " WHERE {$this->_primaryKey} = :{$this->_primaryKey}";
            $params = $this->prepararDadosSqlDml($dados);
        } else {
            $sql .= " WHERE ";
            $sql .= $this->verificaParametroData($primaryKey, true);
            $params = array_merge($this->prepararDadosSqlDml($primaryKey), $this->prepararDadosSqlDml($dados));
        }
        $sqlPreparado = self::$conexao->prepare($sql);
//		print_r($sqlPreparado);
//		var_dump($dados);
        foreach ($params as $bind) {
            if ($bind[1] != "SYSDATE") {
                if (strlen($bind[1]) > 255) {
                    $sqlPreparado->bindParam($bind[0], $bind[1], PDO::PARAM_STR, strlen($bind[1]));
                } else {
                    $sqlPreparado->bindParam($bind[0], $bind[1]);
                }
            }
        }
        $status = $sqlPreparado->execute();
        if ($status === true) {
            if (isset($dados[$this->_primaryKey])) {
                $this->id = $dados[$this->_primaryKey];
            }
            return $status;
        } else {
            $this->gravarLogErro($sql, $dados);
            return $status;
        }
    }

    /**
     * Exclui os dados recebidos
     * @param array $dados
     * @param bool|array $primaryKey
     */
    public function delete(array $dados, $primaryKey = true)
    {
        $this->execRole();
        $sql = "DELETE {$this->_schema}.{$this->_table} ";

        $params = array();
        if (count($dados) > 1) {
            $sql .= " WHERE {$this->_primaryKey} = :{$this->_primaryKey}";
            $sql .= " AND " . $this->verificaParametroData($dados, true);
            $params = $this->prepararDadosSqlDml($dados);
        } else if (!is_array($primaryKey)) {
            $sql .= " WHERE {$this->_primaryKey} = :{$this->_primaryKey}";
            $params = $this->prepararDadosSqlDml($dados);
        } else {
            $sql .= " WHERE ";
            $sql .= $this->verificaParametroData($primaryKey, true);
            $params = array_merge($this->prepararDadosSqlDml($primaryKey), $this->prepararDadosSqlDml($dados));
        }

        $sqlPreparado = self::$conexao->prepare($sql);

        foreach ($params as $bind) {
            if (strlen($bind[1]) > 255) {
                $sqlPreparado->bindParam($bind[0], $bind[1], PDO::PARAM_STR, strlen($bind[1]));
            } else {
                $sqlPreparado->bindParam($bind[0], $bind[1]);
            }
        }

        $status = $sqlPreparado->execute();

        if ($status === true) {
            if (isset($dados[$this->_primaryKey])) {
                $this->id = $dados[$this->_primaryKey];
            }
            return $status;
        } else {
            $this->erros[] = self::$conexao->errorInfo();
            return $status;
        }
    }

    private function verificaParametroData($dados, $and = false)
    {
        $sql = '';
        $qtdElementos = 1;
        if (isset($dados[$this->_primaryKey])) {
            $tmpKey = array($this->_primaryKey => $dados[$this->_primaryKey]);
        } else {
            $tmpKey = array();
        }
        unset($dados[$this->_primaryKey]);
        $dados = array_merge($tmpKey, $dados);
        foreach ($dados as $campo => $valor) {
            if (strpos(strtoupper($campo), 'DT_') === false) {
                if ($campo != $this->_primaryKey) {
                    $sql .= "$campo = :$campo ";
                }
            } else {
                $sql .= $this->getDqlDate($campo, $valor, "update");;
            }
            if (($qtdElementos < count($dados)) && ($campo != $this->_primaryKey)) {
                if ($and) {
                    $sql .= ' AND ';
                } else {
                    $sql .= ', ';
                }
            }
            $qtdElementos++;
        }
        return $sql;
    }

    /**
     * Executa uma consulta SQL personalizada
     * @param string $sql
     * @param array $parametros
     * @param bolean $fetchOne
     * @param bolean $associate
     * @return array
     */
    public function query($sql = '', array $parametros = array(), $fetchOne = false, $associate = true)
    {
        $this->_sql = $sql;
        if (empty($this->_sql)) {
            $this->_sql = $this->tipoSQL . $this->colunasSQL . $this->destinoSQL . ' ' . $this->condicaoSQL . ' ' . $this->orderBy;
        }
        if (empty($parametros)) {
            $parametros = $this->parametrosSQL;
        }

        if ($fetchOne) {
            $this->fetchOne($fetchOne);
        }

        if ($associate) {
            $this->associateName($associate);
        }

//		var_dump($this);

        // $this->execRole();
        //para trazer o campo lob do banco de dados

        self::$conexao->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
        $sqlPreparado = self::$conexao->prepare($this->_sql);
        $temResource = false;
        $this->verificaSeNaoEConsultaTransaction($this->_sql, self::BEGIN_TRANSACTION);
        if (!is_null($parametros)) {
            foreach ($parametros as $parametro => $valor) {
                if (is_resource($valor)) {
                    $temResource = true;
                    $sqlPreparado->bindParam(":$parametro", $valor, PDO::PARAM_LOB);
                } elseif (is_null($valor)) {
                    $sqlPreparado->bindParam(":$parametro", $valor, PDO::PARAM_NULL);
                } elseif ($valor != '') {
                    $sqlPreparado->bindValue(":{$parametro}", $valor, PDO::PARAM_STR);
                }
            }
        }
//		$status = $sqlPreparado->execute();
        if ($temResource) {
            $status = $sqlPreparado->execute();
        } else {
            $status = $sqlPreparado->execute($parametros);
        }
        if ($status) {
            if (!$this->verificaSeNaoEConsultaTransaction($this->_sql, self::COMMIT)) {
                if ($this->fetchOne) {
                    $this->fetchOne = false;
                    if ($this->associate === true) {
                        $resultPDO = $sqlPreparado->fetch(PDO::FETCH_ASSOC);
                        return $resultPDO;
                    } else {
                        return $sqlPreparado->fetch();
                    }
                } else {
                    if ($this->associate === true) {
                        $resultPDO = $sqlPreparado->fetchAll(PDO::FETCH_ASSOC);
                        return $resultPDO;
                    } else {
                        return $sqlPreparado->fetchAll();
                    }

                }
            } else {
                return $status;
            }
        } else {
            $this->verificaSeNaoEConsultaTransaction($this->_sql, self::ROLLBACK);
            $this->gravarLogErro($this->_sql, $parametros);
            return $status;
        }
    }

    /**
     * Executa uma consulta SQL personalizada de INSERT, UPDATE e DELETE
     * @param string $sql
     * @param array $parametros
     * @param string $fetchOne
     * @return array
     */

    public function queryDml($sql = '', array $parametros = array())
    {
        $this->_sql = $sql;
        if (empty($parametros)) {
            $parametros = $this->parametrosSQL;
        }
        $this->execRole();
        //para trazer o campo lob do banco de dados
        $sqlPreparado = self::$conexao->prepare($this->_sql);
        $temResource = false;
        if (!is_null($parametros)) {
            foreach ($parametros as $parametro => $valor) {
                if (is_resource($valor)) {
                    $temResource = true;
                    $sqlPreparado->bindParam(":$parametro", $valor, PDO::PARAM_LOB);
                } elseif (is_null($valor)) {
                    $sqlPreparado->bindParam(":$parametro", $valor, PDO::PARAM_NULL);
                } elseif ($valor != '') {
                    $sqlPreparado->bindValue(":{$parametro}", $valor, PDO::PARAM_STR);
                }
            }
        }
//		$status = $sqlPreparado->execute();
        if ($temResource) {
            $status = $sqlPreparado->execute();
        } else {
            $status = $sqlPreparado->execute($parametros);
        }
        if (!$status) {
            $this->gravarLogErro($this->_sql, $parametros);
        }
        return $status;
    }

    /**
     * Exibe o erro no ambiente de desenvolvimento e grava o log do erro.
     */
    protected function gravarLogErro($sql, $parametros)
    {
        $erro = self::$conexao->errorInfo();
        switch ($_SERVER['HTTP_HOST']) {
            case 'localhost':
            case 'dab.local.saude.gov':
            case 'dab.local.gov.br':
            case 'dab.localhost':
            case 'localhost':
            case 'dab.local':
            case 'bfa-desenvolvimento.saude.gov':
            case 'bfa-homologacao.saude.gov.br':
                echo 'QUERY: ' . $sql . '<br /><br />';
                echo 'PARAMETROS: ';
                var_dump($parametros);
                echo '<br /><br />ERRO: ';
                var_dump($erro);
                break;
        }
        $this->erros[] = $erro[2];
        $log['sql'] = $sql;
        $log['erro'] = $erro[2];
        if (is_array($parametros)) {
            foreach ($parametros as $chave => $parametro) {
                $log["parametro-{$chave}"] = $parametro;
            }
        }
        $this->write($log);
    }

    public function write($texto)
    {
        $mensagem = "\n";
        $mensagem = date('d/m/Y H:i:s - ');
        $mensagem .= self::getNavegador();
        $mensagem .= "\nErro: ";
        if (is_array($texto)) {
            foreach ($texto as $chave => $conteudo) {
                $mensagem .= "{$chave}: {$conteudo}\n";
            }
        } else {
            $mensagem .= $texto . "\n";
        }
        $mensagem .= "\n";
        $caminho = APPPATH . 'logs';
        $date = date('Y-m-d');
        $fp = fopen("{$caminho}/logbd-{$date}.php", "a");
        fwrite($fp, $mensagem);
        fclose($fp);
    }

    /**
     * Retorna o navegador e versão do cliente
     */
    private static function getNavegador()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match('|MSIE ([0-9].[0-9]{1,2})|', $useragent, $matched)) {
            $browser_version = $matched[1];
            $browser = 'IE';
        } elseif (preg_match('|Opera/([0-9].[0-9]{1,2})|', $useragent, $matched)) {
            $browser_version = $matched[1];
            $browser = 'Opera';
        } elseif (preg_match('|Firefox/([0-9\.]+)|', $useragent, $matched)) {
            $browser_version = $matched[1];
            $browser = 'Firefox';
        } elseif (preg_match('|Chrome/([0-9\.]+)|', $useragent, $matched)) {
            $browser_version = $matched[1];
            $browser = 'Chrome';
        } elseif (preg_match('|Safari/([0-9\.]+)|', $useragent, $matched)) {
            $browser_version = $matched[1];
            $browser = 'Safari';
        } else {
            // browser not recognized!
            $browser_version = 0;
            $browser = 'other';
        }
        return "$browser - $browser_version";
    }

    protected function desabilitaTransaction()
    {
        $this->habilitaTransaction = false;
    }

    protected function verificaSeNaoEConsultaTransaction($sql, $tipo)
    {
        if (substr(strtoupper(trim($sql)), 0, 6) != 'SELECT') {
            if ($tipo == self::BEGIN_TRANSACTION && $this->habilitaTransaction == true) {
                $this->beginTransaction();
            } else if ($tipo == self::COMMIT && $this->habilitaTransaction == true) {
                $this->commit();
            } else if ($tipo == self::ROLLBACK && $this->habilitaTransaction == true) {
                $this->rollback();
            }
            return false;
        }
    }

    public function beginTransaction()
    {
        self::$conexao->beginTransaction();
    }

    public function inTransaction()
    {
        return self::$conexao->inTransaction();
    }

    public function commit()
    {
        self::$conexao->commit();
    }

    public function rollback()
    {
        if (!$this->inTransaction()) {
            self::$conexao->rollBack();
        }
    }

    public function execRole()
    {
        $sql = "SET ROLE " . getenv('DB_ROLE') . " IDENTIFIED BY " . getenv('DB_ROLE_PASSWORD');
//		var_dump(self::$conexao);
//		var_dump($this->useDbConfig);
//		var_dump($sql);
        self::$conexao->exec($sql);
    }

    public function getErrors()
    {
        return $this->erros;
    }

    protected function select($colunas = array())
    {
        $this->tipoSQL = "SELECT ";
        if ($colunas) {
            $qtdColunas = 1;
            foreach ($colunas as $coluna) {
                $this->colunasSQL .= $coluna;
                if ($qtdColunas < count($colunas)) {
                    $this->colunasSQL .= ', ';
                } else {
                    $this->colunasSQL .= ' ';
                }
                $qtdColunas++;
            }
        } else {
            $this->colunasSQL = ' * ';
        }
        $this->destinoSQL = "FROM {$this->_schema}.{$this->_table}";
    }

    protected function where($sqlWhere = ' ')
    {
        $this->condicaoSQL = 'WHERE ' . $sqlWhere;
    }

    protected function params($parametros = array())
    {
        $this->parametrosSQL = $parametros;
    }

    protected function orderBy($orderBy = null)
    {
        $this->orderBy = 'ORDER BY ' . ($orderBy === null ? $this->_primaryKey : $orderBy);
    }

    protected function fetchOne($fechtOne)
    {
        $this->fetchOne = $fechtOne;
    }

    protected function associateName($associate)
    {
        $this->associate = $associate;
    }

    /**
     * Método para retornar os pares de uma consulta para alimentar um select do Zend_Form, no formato array('co_seq' => 'ds_campo')
     * @param string $valor [Opcional] Nome do campo que contém o valor do Select do HTML, se não for informado utilizará primaryKey
     * @param string $descricao [Opcional] Nome do campo que contém a Descrição do Select do HTML, se não for informado utilizará um campo DS_nome_da_tabela sem o TB
     *
     * @example
     * <code>
     * //EXEMPLO SEM PARÂMETROS
     * <br />
     * $this->where("CO_PROGRAMA = :CO_PROGRAMA AND
     * CO_TIPO_PROPOSTA = :CO_TIPO_PROPOSTA AND
     * CO_TIPO_PORTE = :CO_TIPO_PORTE AND
     * ST_REGISTRO = :ST_REGISTRO");
     * $this->params(array('CO_TIPO_PROPOSTA' => TipoProposta::$Ampliacao,
     * 'CO_PROGRAMA' => $programa,
     * 'CO_TIPO_PORTE' => $porte,
     * 'ST_REGISTRO' => 'S'));
     * return $this->fetchPairsSelect();
     * </code>
     *
     * @example
     * <code>
     * //EXEMPLO COM PARÂMETROS
     * <br />
     * $this->where("CO_PROGRAMA = :CO_PROGRAMA AND
     * CO_TIPO_PROPOSTA = :CO_TIPO_PROPOSTA AND
     * CO_TIPO_PORTE = :CO_TIPO_PORTE AND
     * ST_REGISTRO = :ST_REGISTRO");
     * $this->params(array('CO_TIPO_PROPOSTA' => TipoProposta::$Ampliacao,
     * 'CO_PROGRAMA' => $programa,
     * 'CO_TIPO_PORTE' => $porte,
     * 'ST_REGISTRO' => 'S'));
     * return $this->fetchPairsSelect('CO_SEQ_TIPO_AMBIENTE_SERVICO', 'DS_TIPO_AMBIENTE_SERVICO');
     * </code>
     * @return array
     */
    public function fetchPairsSelect($valor = null, $descricao = null, $orderby = null)
    {
        if (!$valor) {
            $valor = $this->_primaryKey;
        }
        if (!$descricao) {
            $descricao = 'DS' . substr($this->_primaryKey, 6);
        }
        if ($valor == $descricao) {
            $this->select(array($valor));
        } else {
            $this->select(array($valor, $descricao));
        }
        if (!$orderby) {
            $this->orderBy($descricao);
        }
        return $this->fetchPairs($this->query(), $valor, $descricao);
    }

    public function fetchPairs($arrResult, $valor = null, $descricao = null, $selecione = true, $msgSelect = '- SELECIONE -')
    {
        $resultPairs = array();
        if (empty($arrResult)) {
            $resultPairs = array('' => 'NENHUM REGISTRO ENCONTRADO!');
        } else {
            if (is_array($descricao)) {
                $resultPairs = ($selecione === true ? array('' => $msgSelect) : array());
                foreach ($arrResult as $result) {
                    $_descricao = '';
                    $cont = 0;
                    foreach ($descricao as $label) {
                        $_descricao .= ($cont > 0) ? ' - ' . $result[$label] : $result[$label];
                        $cont++;
                    }
                    $resultPairs[$result[$valor]] = $this->strtoupperacentos($_descricao);
                }
            } else {
                $resultPairs = ($selecione === true ? array('' => $msgSelect) : array());
                foreach ($arrResult as $result) {
                    $resultPairs[$result[$valor]] = $this->strtoupperacentos($result[$descricao]);
                }
            }
        }
        return $resultPairs;
    }

    public function geradorDeFiltros($dados, array $indexQueNaoQUer = array())
    {
        $this->_params = array();
        $stringFiltrosSql = "";
        if ($dados) {
            if (count($indexQueNaoQUer) > 0) {
                foreach ($dados as $index => $filtro) {
                    foreach ($indexQueNaoQUer as $ind) {
                        unset($dados[$ind]);
                    }
                }
            }
            foreach ($dados as $index => $filtro) {
                if (trim($filtro) != '') {
                    if ($index == 'NO_PESSOA') {
                        $stringFiltrosSql .= " AND {$index} LIKE '%'|| :{$index}||'%' ";
                        $this->_params[$index] = $filtro;
                    } else if (strpos($index, '.') !== false) {
                        $arr = explode('.', $index);
                        $stringFiltrosSql .= " AND $index = :$arr[0]$arr[1] ";
                        $this->_params[$arr[0] . $arr[1]] = $filtro;
                    } else {
                        $stringFiltrosSql .= " AND $index = :$index ";
                        $this->_params[$index] = $filtro;
                    }

                }
            }
        }
        return $stringFiltrosSql;
    }

    protected function strtoupperacentos($valor)
    {
        return strtr(strtoupper($valor), "àáâãäåæçèéêëìíîïðñòóôõö÷øùüúþÿ", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÜÚÞß");
    }

    public static function closeConnection()
    {
        if (self::$conexao) {
            self::$conexao = null;
        }
    }

}
