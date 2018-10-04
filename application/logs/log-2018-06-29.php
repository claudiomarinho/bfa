<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 29-06-2018 10:06:33 --> Query error: OCIStmtExecute: ORA-00904: "CO_BFA_MOTIVO_NAO_ACOMP": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                CO_BFA_MOTIVO_DESCUMPRIMENTO, DS_MOTIVO
            FROM 
                DBSISVAN.TB_BFA_MOTIVO_DESCUMPRIMENTO
            WHERE 
                ST_REGISTRO_ATIVO = 'S'
                AND ST_VACINACAO = 'S'
            ORDER BY 
                CO_BFA_MOTIVO_NAO_ACOMP
            
ERROR - 29-06-2018 10:09:52 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:10:31 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:12:02 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:13:00 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:13:21 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:13:45 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:14:07 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:17:37 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:22:08 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:22:47 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:26:20 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:26:38 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:27:05 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:36:28 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:45:12 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:46:04 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:52:54 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:52:58 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:55:18 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:55:19 --> 404 Page Not Found: Acompanhamento/consultaAcompanhamentoundefined
ERROR - 29-06-2018 10:55:19 --> 404 Page Not Found: Acompanhamento/consultaAcompanhamento542
ERROR - 29-06-2018 10:57:57 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:57:57 --> 404 Page Not Found: Acompanhamento/consultaAcompanhamentoundefined
ERROR - 29-06-2018 10:57:57 --> 404 Page Not Found: Acompanhamento/consultaAcompanhamento542
ERROR - 29-06-2018 10:58:27 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:58:27 --> 404 Page Not Found: Acompanhamento/consultaAcompanhamentoundefined
ERROR - 29-06-2018 10:58:28 --> 404 Page Not Found: Acompanhamento/consultaAcompanhamento542
ERROR - 29-06-2018 10:58:49 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:58:50 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 10:59:47 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 10:59:47 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:00:18 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:01:03 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:01:04 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:01:25 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:01:53 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:02:07 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:02:12 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:04:02 --> 404 Page Not Found: Acompanhamento/consultaAcomp
ERROR - 29-06-2018 11:05:46 --> Severity: Parsing Error --> syntax error, unexpected ';' D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 9
ERROR - 29-06-2018 11:06:00 --> Severity: Parsing Error --> syntax error, unexpected '.' D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 9
ERROR - 29-06-2018 11:06:06 --> Severity: Parsing Error --> syntax error, unexpected ';' D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 9
ERROR - 29-06-2018 11:06:15 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:06:51 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:06:52 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:07:02 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:07:12 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:07:26 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:07:26 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:07:33 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:08:31 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:08:31 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:08:49 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:09:00 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:09:06 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:09:06 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:09:41 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:09:59 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:10:00 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:10:38 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:10:39 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined'     
                AND RL.NU_VIGENCIA = 22018
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                AND ACOMP.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 11:11:27 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:29:14 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 11:29:15 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:40:17 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:40:19 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:40:59 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:41:00 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:41:30 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:43:25 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:43:42 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:44:01 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:45:04 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:45:04 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:45:29 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:45:32 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:46:27 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:46:27 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:46:43 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:46:43 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:48:34 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:48:36 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                *
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = 'undefined' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 29-06-2018 14:49:17 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:49:44 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:50:15 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:53:50 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:54:08 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:54:24 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:56:25 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:57:06 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:57:47 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:57:58 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 14:58:41 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 15:00:15 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 15:01:54 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 15:03:37 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 15:05:22 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 15:05:28 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 15:06:28 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:09:36 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:15:16 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:17:29 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:17:54 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:20:20 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:20:35 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:21:46 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:21:58 --> Severity: Notice --> Undefined index: coPessoa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 121
ERROR - 29-06-2018 16:22:15 --> Severity: Notice --> Undefined index: coPessoa D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 121
ERROR - 29-06-2018 16:23:15 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:24:18 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 121
ERROR - 29-06-2018 16:24:49 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:25:05 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:25:05 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, P.NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 2, 'female', 'male') AS DS_SEXO, P.ST_OBRIGATORIO,
                              AC.ST_GESTANTE, AC.ST_PESSOA_NAO_ACOMPANHADA, RLA.NU_VIGENCIA, TO_CHAR(RLA.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, AC.CO_BFA_MOTIVO_NAO_ACOMP
                  FROM DBSISVAN.TB_BFA_FAMILIA F
                  INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON (P.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA 
                  AND P.CO_SEXO IN (1,2)
                  --AND TP_PESSOA IN (3,4)
                  AND P.ST_REGISTRO_ATIVO = 'S')
                  LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RLA ON (RLA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RLA.NU_VIGENCIA = 22018)
                  LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO AC ON (AC.CO_SEQ_BFA_ACOMPANHAMENTO = RLA.CO_BFA_ACOMPANHAMENTO AND AC.ST_REGISTRO_ATIVO = 'S')
                  WHERE F.CO_FAMILIA_MDS = 'undefined' 
                  AND F.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 16:42:56 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:44:39 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:45:10 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:45:11 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, P.NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 2, 'female', 'male') AS DS_SEXO, P.ST_OBRIGATORIO,
                              AC.ST_GESTANTE, AC.ST_PESSOA_NAO_ACOMPANHADA, RLA.NU_VIGENCIA, TO_CHAR(RLA.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, AC.CO_BFA_MOTIVO_NAO_ACOMP
                  FROM DBSISVAN.TB_BFA_FAMILIA F
                  INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON (P.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA 
                  AND P.CO_SEXO IN (1,2)
                  --AND TP_PESSOA IN (3,4)
                  AND P.ST_REGISTRO_ATIVO = 'S')
                  LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RLA ON (RLA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RLA.NU_VIGENCIA = 22018)
                  LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO AC ON (AC.CO_SEQ_BFA_ACOMPANHAMENTO = RLA.CO_BFA_ACOMPANHAMENTO AND AC.ST_REGISTRO_ATIVO = 'S')
                  WHERE F.CO_SEQ_BFA_FAMILIA = 'undefined' 
                  AND F.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 16:45:41 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:45:58 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:45:58 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, P.NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 2, 'female', 'male') AS DS_SEXO, P.ST_OBRIGATORIO,
                              AC.ST_GESTANTE, AC.ST_PESSOA_NAO_ACOMPANHADA, RLA.NU_VIGENCIA, TO_CHAR(RLA.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, AC.CO_BFA_MOTIVO_NAO_ACOMP
                  FROM DBSISVAN.TB_BFA_FAMILIA F
                  INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON (P.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA 
                  AND P.CO_SEXO IN (1,2)
                  --AND TP_PESSOA IN (3,4)
                  AND P.ST_REGISTRO_ATIVO = 'S')
                  LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RLA ON (RLA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RLA.NU_VIGENCIA = 22018)
                  LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO AC ON (AC.CO_SEQ_BFA_ACOMPANHAMENTO = RLA.CO_BFA_ACOMPANHAMENTO AND AC.ST_REGISTRO_ATIVO = 'S')
                  WHERE F.CO_SEQ_BFA_FAMILIA = 'undefined' 
                  AND F.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 16:46:04 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:46:07 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:46:31 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:46:32 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT P.CO_SEQ_BFA_PESSOA, P.NO_PESSOA, P.NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 2, 'female', 'male') AS DS_SEXO, P.ST_OBRIGATORIO,
                              AC.ST_GESTANTE, AC.ST_PESSOA_NAO_ACOMPANHADA, RLA.NU_VIGENCIA, TO_CHAR(RLA.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, AC.CO_BFA_MOTIVO_NAO_ACOMP
                  FROM DBSISVAN.TB_BFA_FAMILIA F
                  INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON (P.CO_BFA_FAMILIA = F.CO_SEQ_BFA_FAMILIA 
                  AND P.CO_SEXO IN (1,2)
                  --AND TP_PESSOA IN (3,4)
                  AND P.ST_REGISTRO_ATIVO = 'S')
                  LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RLA ON (RLA.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RLA.NU_VIGENCIA = 22018)
                  LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO AC ON (AC.CO_SEQ_BFA_ACOMPANHAMENTO = RLA.CO_BFA_ACOMPANHAMENTO AND AC.ST_REGISTRO_ATIVO = 'S')
                  WHERE F.CO_SEQ_BFA_FAMILIA = 'undefined' 
                  AND F.ST_REGISTRO_ATIVO = 'S'
ERROR - 29-06-2018 16:47:21 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:47:27 --> 404 Page Not Found: Public/js
ERROR - 29-06-2018 16:47:38 --> 404 Page Not Found: Public/js
