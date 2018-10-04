<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 23-07-2018 09:32:20 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 09:49:49 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 09:52:55 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 09:53:43 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:06:47 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:07:57 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:07:59 --> Severity: Notice --> Undefined variable: result D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 19
ERROR - 23-07-2018 10:08:01 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:08:17 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:08:19 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:08:22 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:08:24 --> Severity: Notice --> Undefined index: :CO_SEQ_BFA_MAPA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 10:09:20 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:10:26 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:11:11 --> 404 Page Not Found: Acompanhamento/localiza
ERROR - 23-07-2018 10:11:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:14:30 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:14:54 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:14:56 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:15:28 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:15:39 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:16:06 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:17:14 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:17:27 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:18:08 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:18:57 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:21:03 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:08 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:14 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:16 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:28 --> Severity: Notice --> Undefined index: :CO_SEQ_BFA_MAPA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 10:23:32 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:35 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:40 --> Severity: Notice --> Undefined index: :CO_SEQ_BFA_MAPA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 10:23:46 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:49 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:55 --> Severity: Notice --> Undefined index: :CO_SEQ_BFA_MAPA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 10:23:57 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:23:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:24:08 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:24:08 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 505
ERROR - 23-07-2018 10:24:10 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:24:40 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:48:15 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:50:18 --> Severity: Warning --> Missing argument 2 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:50:18 --> Severity: Warning --> Missing argument 3 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:50:18 --> Severity: Notice --> Undefined variable: coMunicipioIbge D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 54
ERROR - 23-07-2018 10:50:18 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 55
ERROR - 23-07-2018 10:50:18 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                CO_PESSOA_FISICA,
                CO_SEQ_BFA_MAPA,
                DT_CADASTRO,
                CO_MUNICIPIO_IBGE,
                NU_VIGENCIA,
                DS_FILTROS,
                ST_REGISTRO_ATIVO,
                DS_SQL,
                DS_PARAMETROS
            FROM 
                DBSISVAN.TB_BFA_MAPA
            WHERE
                ST_REGISTRO_ATIVO = 'S' AND 
                CO_MUNICIPIO_IBGE =  AND 
                NU_VIGENCIA =  AND
                DS_FILTROS = '{"TP_MAPA":"1","NO_BAIRRO":"ACAMPAMENTO","ST_ACOMPANHAMENTO":"99","V.NU_VIGENCIA":"22018","P.CO_MUNICIPIO_IBGE":"530010"}'
        
ERROR - 23-07-2018 10:51:38 --> Severity: Warning --> Missing argument 2 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:51:38 --> Severity: Warning --> Missing argument 3 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:51:38 --> Severity: Notice --> Undefined variable: coMunicipioIbge D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 60
ERROR - 23-07-2018 10:51:38 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 61
ERROR - 23-07-2018 10:52:28 --> Severity: Warning --> Missing argument 2 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:52:28 --> Severity: Warning --> Missing argument 3 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:52:28 --> Severity: Notice --> Undefined variable: coMunicipioIbge D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 60
ERROR - 23-07-2018 10:52:28 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 61
ERROR - 23-07-2018 10:52:52 --> Severity: Warning --> Missing argument 2 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:52:52 --> Severity: Warning --> Missing argument 3 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:52:52 --> Severity: Notice --> Undefined variable: coMunicipioIbge D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 60
ERROR - 23-07-2018 10:52:52 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 61
ERROR - 23-07-2018 10:53:14 --> Severity: Warning --> Missing argument 2 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:53:14 --> Severity: Warning --> Missing argument 3 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:53:14 --> Severity: Notice --> Undefined variable: coMunicipioIbge D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 60
ERROR - 23-07-2018 10:53:14 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 61
ERROR - 23-07-2018 10:53:14 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 62
ERROR - 23-07-2018 10:53:19 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 10:53:27 --> Severity: Warning --> Missing argument 2 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:53:27 --> Severity: Warning --> Missing argument 3 for Mapa::consultarPorFiltro(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 119 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 36
ERROR - 23-07-2018 10:53:27 --> Severity: Notice --> Undefined variable: coMunicipioIbge D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 60
ERROR - 23-07-2018 10:53:27 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 61
ERROR - 23-07-2018 10:53:27 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 62
ERROR - 23-07-2018 10:54:19 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                CO_PESSOA_FISICA,
                CO_SEQ_BFA_MAPA,
                DT_CADASTRO,
                CO_MUNICIPIO_IBGE,
                NU_VIGENCIA,
                DS_FILTROS,
                ST_REGISTRO_ATIVO,
                DS_SQL,
                DS_PARAMETROS
            FROM 
                DBSISVAN.TB_BFA_MAPA
            WHERE
                ST_REGISTRO_ATIVO = 'S' AND CO_MUNICIPIO_IBGE = 22018 AND NU_VIGENCIA = 530010
                DS_FILTROS = '{"TP_MAPA":"1","NO_BAIRRO":"ACAMPAMENTO","ST_ACOMPANHAMENTO":"99","V.NU_VIGENCIA":"22018","P.CO_MUNICIPIO_IBGE":"530010"}'
        
ERROR - 23-07-2018 10:56:29 --> Severity: Parsing Error --> syntax error, unexpected T_RETURN D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 60
ERROR - 23-07-2018 10:59:07 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:00:23 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 126
ERROR - 23-07-2018 11:00:23 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 130
ERROR - 23-07-2018 11:00:23 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 169
ERROR - 23-07-2018 11:00:23 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 183
ERROR - 23-07-2018 11:00:26 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 126
ERROR - 23-07-2018 11:00:26 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 130
ERROR - 23-07-2018 11:00:26 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 169
ERROR - 23-07-2018 11:00:26 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 183
ERROR - 23-07-2018 11:00:30 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:01:47 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:01:50 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:01:55 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 11:01:55 --> Severity: Notice --> Undefined index: :NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 11:02:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:02:26 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:02:29 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 11:02:29 --> Severity: Notice --> Undefined index: :NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 11:03:04 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:03:06 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 11:03:06 --> Severity: Notice --> Undefined index: :NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 156
ERROR - 23-07-2018 11:03:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:04:35 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:05:19 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 505
ERROR - 23-07-2018 11:07:23 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:07:25 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:07:25 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 505
ERROR - 23-07-2018 11:08:46 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:08:46 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 505
ERROR - 23-07-2018 11:10:48 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:10:49 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 505
ERROR - 23-07-2018 11:23:00 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 505
ERROR - 23-07-2018 11:25:01 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:26:09 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:30:11 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:30:17 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:30:20 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:32:07 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:32:13 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:33:13 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:33:18 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:33:47 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:33:49 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:34:35 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:34:38 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:35:37 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:36:28 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:36:38 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:38:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:39:03 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:40:38 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:40:39 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:40:43 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:44:08 --> Severity: Notice --> Undefined variable: coMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 49
ERROR - 23-07-2018 11:45:07 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:45:16 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:46:08 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA,
                PESS.CO_BFA_FAMILIA,
                PESS.NO_PESSOA,
                PESS.NU_NIS_PESSOA,
                PESS.DT_NASCIMENTO,
                DECODE(PESS.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO,
                (DOM.NO_LOGRADOURO || ' ' || DOM.NO_COMPL_LOGRADOURO || ' ' || DOM.NO_BAIRRO) AS DS_ENDERECO
            FROM
                DBSISVAN.TB_BFA_PESSOA PESS
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO DOM ON DOM.CO_SEQ_BFA_DOMICILIO = PESS.CO_BFA_DOMICILIO
            WHERE 
                CO_SEQ_BFA_PESSOA = 'undefined' AND V.NU_VIGENCIA = '22018' AND V.ST_REGISTRO_ATIVO = 'S'
ERROR - 23-07-2018 11:51:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:51:27 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:53:29 --> Severity: Notice --> Undefined offset: 0 D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 43
ERROR - 23-07-2018 11:53:29 --> Severity: Notice --> Undefined offset: 0 D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 43
ERROR - 23-07-2018 11:53:29 --> Query error: OCIStmtExecute: ORA-24337: handle de instrução não preparado
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
ERROR - 23-07-2018 11:53:46 --> Severity: Notice --> Undefined offset: 0 D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 42
ERROR - 23-07-2018 11:53:46 --> Severity: Notice --> Undefined offset: 0 D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 42
ERROR - 23-07-2018 11:53:46 --> Query error: OCIStmtExecute: ORA-24337: handle de instrução não preparado
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
ERROR - 23-07-2018 11:57:18 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:57:18 --> Severity: Warning --> Missing argument 1 for Mapaacompanhamento::listaFamiliasMapa() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 31
ERROR - 23-07-2018 11:57:18 --> Severity: Notice --> Undefined variable: coSeq D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 35
ERROR - 23-07-2018 11:57:21 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:58:42 --> Severity: Warning --> Missing argument 1 for Mapaacompanhamento::listaFamiliasMapa() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 31
ERROR - 23-07-2018 11:58:42 --> Severity: Notice --> Undefined variable: coSeq D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 35
ERROR - 23-07-2018 11:59:04 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:59:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 11:59:59 --> Severity: Warning --> Missing argument 1 for Mapaacompanhamento::listaFamiliasMapa() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 31
ERROR - 23-07-2018 11:59:59 --> Severity: Notice --> Undefined variable: coSeq D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 35
ERROR - 23-07-2018 12:00:19 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:00:22 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:00:34 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:00:34 --> Severity: Warning --> Missing argument 1 for Mapaacompanhamento::listaFamiliasMapa() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 31
ERROR - 23-07-2018 12:00:34 --> Severity: Notice --> Undefined variable: coSeq D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 35
ERROR - 23-07-2018 12:00:39 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:01:06 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:06:36 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:07:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:07:41 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:07:49 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:07:57 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA,
                PESS.CO_BFA_FAMILIA,
                PESS.NO_PESSOA,
                PESS.NU_NIS_PESSOA,
                PESS.DT_NASCIMENTO,
                DECODE(PESS.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO,
                (DOM.NO_LOGRADOURO || ' ' || DOM.NO_COMPL_LOGRADOURO || ' ' || DOM.NO_BAIRRO) AS DS_ENDERECO
            FROM
                DBSISVAN.TB_BFA_PESSOA PESS
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO DOM ON DOM.CO_SEQ_BFA_DOMICILIO = PESS.CO_BFA_DOMICILIO
            WHERE 
                CO_SEQ_BFA_PESSOA = 'undefined' AND V.NU_VIGENCIA = '22018' AND V.ST_REGISTRO_ATIVO = 'S'
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_PESSOA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 35
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: DT_NASCIMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 36
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: CO_BFA_FAMILIA D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 11
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_PESSOA D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 11
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: NU_NIS_PESSOA D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 31
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: NO_PESSOA D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 33
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: DT_NASCIMENTO D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 36
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: DS_SEXO D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 38
ERROR - 23-07-2018 12:10:13 --> Severity: Notice --> Undefined index: DS_ENDERECO D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 40
ERROR - 23-07-2018 12:10:49 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:11:15 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:11:20 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:11:23 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 12:11:27 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:43:28 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:43:55 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:45:33 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:45:45 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:45:57 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:47:25 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:48:03 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 14:48:17 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:46:25 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:48:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:49:21 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:49:26 --> Query error: OCIStmtExecute: ORA-00904: "CO_BFA_MAPA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: INSERT INTO "DBSISVAN"."RL_BFA_PESSOA_ACOMPANHAMENTO" ("CO_BFA_MAPA", "CO_BFA_PESSOA") VALUES ('22', '272')
ERROR - 23-07-2018 16:51:05 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:52:02 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:52:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:53:09 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:53:11 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:53:13 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:53:19 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:56:11 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:56:11 --> Severity: Notice --> Undefined offset: 0 D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 41
ERROR - 23-07-2018 16:56:11 --> Severity: Notice --> Undefined offset: 0 D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 41
ERROR - 23-07-2018 16:56:11 --> Query error: OCIStmtExecute: ORA-24337: handle de instrução não preparado
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
ERROR - 23-07-2018 16:56:16 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:56:21 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 16:57:36 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:01:08 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:01:12 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:01:16 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:02:50 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:06:57 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:07:12 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:08:16 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:08:34 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:09:30 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:09:47 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:10:39 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:10:42 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:11:35 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:11:37 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:11:59 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:12:53 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:12:55 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:13:47 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:13:50 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:13:53 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:13:58 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:14:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:15:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:18:41 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:19:08 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:19:27 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:19:29 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:32:10 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:32:50 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA, 
                P.ST_OBRIGATORIO,
                DECODE(ACOMP.DT_ACOMPANHAMENTO, NULL, 'N', 'S') ST_ACOMPANHADO,    
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_MAPA MAPA ON MAPA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND MAPA.ST_REGISTRO_ATIVO = 'S'                 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON P.CO_SEQ_BFA_PESSOA = RL.CO_BFA_PESSOA WHERE RL.NU_VIGENCIA = 22018)
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'RIACHO FUNDO I'  AND D.NO_LOGRADOURO = 'ACAMPAMENTO DEUS E NOSSA FORCA 5' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 23-07-2018 17:33:37 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA, 
                P.ST_OBRIGATORIO,
                DECODE(ACOMP.DT_ACOMPANHAMENTO, NULL, 'N', 'S') ST_ACOMPANHADO,    
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_MAPA MAPA ON MAPA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND MAPA.ST_REGISTRO_ATIVO = 'S'                 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON P.CO_SEQ_BFA_PESSOA = RL.CO_BFA_PESSOA WHERE RL.NU_VIGENCIA = 22018
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'RIACHO FUNDO I'  AND D.NO_LOGRADOURO = 'ACAMPAMENTO DEUS E NOSSA FORCA 5' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 23-07-2018 17:47:55 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 141
ERROR - 23-07-2018 17:47:55 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 145
ERROR - 23-07-2018 17:47:55 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 184
ERROR - 23-07-2018 17:47:55 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 197
ERROR - 23-07-2018 17:47:55 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 198
ERROR - 23-07-2018 17:47:55 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 211
ERROR - 23-07-2018 17:48:00 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:51:14 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 17:55:14 --> Query error: OCIStmtExecute: ORA-00904: "CO_MAPA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT DISTINCT CO_BFA_MAPA FROM  DBSISVAN.RL_BFA_PESSOA_MAPA WHERE CO_MAPA = 31                
        
ERROR - 23-07-2018 18:09:12 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT DISTINCT CO_BFA_MAPA FROM  DBSISVAN.RL_BFA_PESSOA_MAPA WHERE CO_BFA_MAPA =                 
        
ERROR - 23-07-2018 18:09:22 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:09:41 --> Severity: Notice --> Undefined index: V.NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 477
ERROR - 23-07-2018 18:09:41 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 478
ERROR - 23-07-2018 18:09:41 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 482
ERROR - 23-07-2018 18:09:41 --> Query error: OCIStmtExecute: ORA-00904: "MAPA"."CO_BFA_MAPA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                P.ST_OBRIGATORIO,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA, 
                P.ST_OBRIGATORIO,
                    
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                 AND MAPA.CO_BFA_MAPA = '31'  AND D.NO_BAIRRO = 'CEILANDIA' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 23-07-2018 18:11:34 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:11:37 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:11:43 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:11:53 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:12:07 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:15:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:25:21 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:25:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:25:31 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:25:31 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 42
ERROR - 23-07-2018 18:25:31 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT DISTINCT CO_BFA_MAPA FROM  DBSISVAN.RL_BFA_PESSOA_MAPA WHERE CO_BFA_MAPA =                 
        
ERROR - 23-07-2018 18:26:00 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:26:01 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 51
ERROR - 23-07-2018 18:26:01 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 60
ERROR - 23-07-2018 18:26:01 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 60
ERROR - 23-07-2018 18:26:01 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 71
ERROR - 23-07-2018 18:26:19 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:26:19 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 51
ERROR - 23-07-2018 18:26:19 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 60
ERROR - 23-07-2018 18:26:19 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 60
ERROR - 23-07-2018 18:26:19 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 71
ERROR - 23-07-2018 18:27:40 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:27:40 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 51
ERROR - 23-07-2018 18:27:40 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 60
ERROR - 23-07-2018 18:27:40 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 60
ERROR - 23-07-2018 18:27:40 --> Severity: Notice --> Undefined variable: resMapa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 71
ERROR - 23-07-2018 18:28:58 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:28:59 --> Severity: Notice --> Undefined variable: vigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 503
ERROR - 23-07-2018 18:28:59 --> Query error: OCIStmtExecute: ORA-00904: "LEFT": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                P.ST_OBRIGATORIO,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA, 
                P.ST_OBRIGATORIO,
                DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'N', 'S') ST_ACOMPANHADO, DECODE(ACOMP.CO_BFA_MOTIVO_NAO_ACOMP, NULL, 'N', 'S') ST_MOTIVO_NAO_ACOMP,    
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_MAPA MAPA ON MAPA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND MAPA.ST_REGISTRO_ATIVO = 'S'                 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON P.CO_SEQ_BFA_PESSOA = RL.CO_BFA_PESSOA AND RL.NU_VIGENCIA =  
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                 AND V.NU_VIGENCIA = '22018'  AND MAPA.CO_BFA_MAPA = '31' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 23-07-2018 18:29:43 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:29:44 --> Severity: Error --> Call to undefined method Mapa::gerarMapaNaoAcomp() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 52
ERROR - 23-07-2018 18:29:55 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:29:55 --> Severity: Error --> Call to undefined method Mapa::gerarMapaNaoAcomp() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 52
ERROR - 23-07-2018 18:30:08 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:30:28 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:32:39 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                P.ST_OBRIGATORIO,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA, 
                P.ST_OBRIGATORIO,
                DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'N', 'S') ST_ACOMPANHADO, 
                DECODE(ACOMP.CO_BFA_MOTIVO_NAO_ACOMP, NULL, 'N', 'S') ST_MOTIVO_NAO_ACOMP,    
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_MAPA MAPA ON MAPA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND MAPA.ST_REGISTRO_ATIVO = 'S'                 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON P.CO_SEQ_BFA_PESSOA = RL.CO_BFA_PESSOA AND RL.NU_VIGENCIA = 22018 
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                 AND V.NU_VIGENCIA = '22018'  AND MAPA.CO_BFA_MAPA = '31' 
            ORDER BY 
                DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'N', 'S'),
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA, 
        
ERROR - 23-07-2018 18:35:02 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT DISTINCT CO_BFA_MAPA FROM  DBSISVAN.RL_BFA_PESSOA_MAPA WHERE CO_BFA_MAPA =                 
        
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:19 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:41:20 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:44:26 --> Severity: Warning --> PDOStatement::fetch() [<a href='pdostatement.fetch'>pdostatement.fetch</a>]: column 2 data was too large for buffer and was truncated to fit it D:\wamp\www\dab\Sistemas\bfa\system\database\drivers\pdo\pdo_result.php 180
ERROR - 23-07-2018 18:49:42 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT CO_PESSOA_FISICA, CO_SEQ_BFA_MAPA, DT_CADASTRO, DS_FILTROS, ST_REGISTRO_ATIVO, DS_SQL, DS_PARAMETROS
            FROM DBSISVAN.TB_BFA_MAPA
            WHERE ST_REGISTRO_ATIVO = 'S'  AND CO_SEQ_BFA_MAPA = 'undefined'  AND CO_MUNICIPIO_IBGE = '530010'  AND NU_VIGENCIA = '22018' 
        
ERROR - 23-07-2018 18:49:48 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:49:58 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:50:20 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:50:25 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:51:54 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:51:57 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:52:09 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:52:19 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:54:18 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:54:24 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:54:27 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:54:31 --> 404 Page Not Found: Public/js
ERROR - 23-07-2018 18:54:35 --> 404 Page Not Found: Public/js
