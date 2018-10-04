<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 10-07-2018 10:37:33 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 60
ERROR - 10-07-2018 10:37:35 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:37:37 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:37:41 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:37:57 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:41:01 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:41:03 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:41:05 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:41:52 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 6
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 6
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 23
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 24
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 25
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: idade D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 25
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: idade D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 25
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 26
ERROR - 10-07-2018 10:41:52 --> Severity: Notice --> Undefined variable: individuo D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 27
ERROR - 10-07-2018 10:43:24 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 11:20:48 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:33:07 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 60
ERROR - 10-07-2018 14:33:09 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:34:10 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:35:25 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:36:23 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:37:17 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:43:01 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:43:51 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:43:54 --> Severity: Notice --> Undefined property: CI_URI::$segment D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 55
ERROR - 10-07-2018 14:44:47 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:44:53 --> Severity: Notice --> Undefined property: CI_URI::$segment D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 55
ERROR - 10-07-2018 14:45:15 --> Severity: Notice --> Undefined property: CI_URI::$segment D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 55
ERROR - 10-07-2018 14:46:01 --> Severity: Warning --> Missing argument 1 for CI_URI::segment(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php on line 55 and defined D:\wamp\www\dab\Sistemas\bfa\system\core\URI.php 344
ERROR - 10-07-2018 14:46:01 --> Severity: Notice --> Undefined variable: n D:\wamp\www\dab\Sistemas\bfa\system\core\URI.php 346
ERROR - 10-07-2018 14:48:41 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA, PESS.CO_BFA_FAMILIA, PESS.TP_PESSOA, PESS.NO_PESSOA, PESS.NU_NIS, PESS.DT_NASCIMENTO, DECODE(PESS.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO, PESS.ST_OBRIGATORIO,
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, 
                ACOMP.ST_PESSOA_NAO_ACOMPANHADA AS ST_ACOMPANHADO, 
                ACOMP.CO_BFA_MOTIVO_NAO_ACOMP,
                DECODE(ACOMP.CO_CNES_ATENDIMENTO, NULL, DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES), ACOMP.CO_CNES_ATENDIMENTO) AS CO_CNES_ATENDIMENTO,
                DECODE(ACOMP.CO_CNS_PROFISSIONAL, NULL, DECODE(PESS.CO_CNS_PROF_VISIVEL, NULL, '', PESS.CO_CNS_PROF_VISIVEL), ACOMP.CO_CNS_PROFISSIONAL) AS CO_CNS_PROFISSIONAL,
                DECODE(ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA, NULL, 'S', 'N') AS ST_MEDIDAS,
                ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA,
                TO_CHAR(ACOMP.NU_PESO,'999.999') AS NU_PESO,
                TO_CHAR(ACOMP.NU_ALTURA,'9999.9') AS NU_ALTURA,
                ACOMP.ST_VACINACAO,
                ACOMP.CO_BFA_MOTIVO_VACINACAO,
                ACOMP.ST_GESTANTE,
                ACOMP.DT_ULTIMA_MENSTRUACAO,
                ACOMP.ST_PRE_NATAL,
                ACOMP.CO_BFA_MOTIVO_PRE_NATAL,
                ACOMP.CO_DSEI,
                FAM.ST_RESIDE_INDIGENA
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = PESS.CO_BFA_FAMILIA AND FAM.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = PESS.CO_EAS_VISIVEL
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = '06/07/2018' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 10-07-2018 14:49:46 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:49:49 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:49:51 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:49:59 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:50:47 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:53:30 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 14:54:46 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:03:59 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:04:52 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:05:32 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:05:55 --> Severity: Parsing Error --> syntax error, unexpected ',' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 50
ERROR - 10-07-2018 15:06:06 --> Severity: Parsing Error --> syntax error, unexpected ';' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 50
ERROR - 10-07-2018 15:06:20 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:10:17 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:14:03 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:14:04 --> Severity: Warning --> Missing argument 2 for Limites::buscaLimites(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php on line 56 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Limites.php 9
ERROR - 10-07-2018 15:14:04 --> Severity: Notice --> Undefined variable: idadeDias D:\wamp\www\dab\Sistemas\bfa\application\models\Limites.php 25
ERROR - 10-07-2018 15:14:33 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:14:47 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:14:55 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:17:15 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:17:56 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:26:52 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:27:13 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:28:29 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:29:07 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:29:30 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:30:06 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:30:31 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:30:53 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:31:29 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:31:37 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:32:13 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:33:25 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:34:40 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:35:14 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:35:32 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:35:48 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:37:03 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:38:20 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:40:39 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:41:58 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:42:32 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:42:50 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:43:11 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:44:40 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:45:02 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:45:30 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:47:08 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:51:26 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:53:30 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:54:35 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:54:52 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:55:15 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:55:49 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:56:06 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:56:17 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:56:51 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:56:52 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT    
                MAX(NU_ALTURA_MINIMA) AS NU_ALTURA_MINIMA,
                MAX(NU_ALTURA_MAXIMA) AS NU_ALTURA_MAXIMA,
                MAX(NU_PESO_MINIMO) AS NU_PESO_MINIMO,
                MAX(NU_PESO_MAXIMO) AS NU_PESO_MAXIMO
            FROM 
                DBSISVAN.TB_BFA_LIMITE_ANTROPOMETRICO
            WHERE
                DS_SEXO = 'F' 
                AND QT_IDADE_DIA_MAXIMO <= 'undefined'
ERROR - 10-07-2018 15:56:55 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:57:48 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:57:58 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:58:25 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 15:59:35 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:00:12 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:07:19 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:18:11 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:37:43 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:38:16 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:38:53 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:39:02 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:39:07 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:39:16 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:39:19 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:49:17 --> Query error: OCIStmtExecute: ORA-02291: restrição de integridade (DBSISVAN.FK_PESSOAFISICA_BFAACOMPANHAM) violada - chave mãe não localizada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: UPDATE "DBSISVAN"."TB_BFA_ACOMPANHAMENTO" SET "CO_SEQ_BFA_ACOMPANHAMENTO" = '61', "CO_PESSOA_FISICA" = '2593', "CO_SISTEMA_ORIGEM_ACOMP" = 2, "ST_PESSOA_NAO_ACOMPANHADA" = 'S', "CO_BFA_MOTIVO_NAO_ACOMP" = '', "CO_CNES_ATENDIMENTO" = '3372375', "CO_CNS_PROFISSIONAL" = '0000001844408906', "CO_BFA_MOTIVO_NUTRI_CRIANCA" = '', "NU_PESO" = 93.7, "NU_ALTURA" = 187, "ST_VACINACAO" = 'S', "CO_BFA_MOTIVO_VACINACAO" = '', "CO_DSEI" = NULL
WHERE "CO_SEQ_BFA_ACOMPANHAMENTO" = 61
ERROR - 10-07-2018 16:49:20 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 16:49:38 --> Query error: OCIStmtExecute: ORA-02291: restrição de integridade (DBSISVAN.FK_PESSOAFISICA_BFAACOMPANHAM) violada - chave mãe não localizada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: UPDATE "DBSISVAN"."TB_BFA_ACOMPANHAMENTO" SET "CO_SEQ_BFA_ACOMPANHAMENTO" = '61', "CO_PESSOA_FISICA" = '2593', "CO_SISTEMA_ORIGEM_ACOMP" = 2, "ST_PESSOA_NAO_ACOMPANHADA" = 'S', "CO_BFA_MOTIVO_NAO_ACOMP" = '', "CO_CNES_ATENDIMENTO" = '3372375', "CO_CNS_PROFISSIONAL" = '0000001844408906', "CO_BFA_MOTIVO_NUTRI_CRIANCA" = '', "NU_PESO" = 93.7, "NU_ALTURA" = 187, "ST_VACINACAO" = 'S', "CO_BFA_MOTIVO_VACINACAO" = '', "CO_DSEI" = NULL
WHERE "CO_SEQ_BFA_ACOMPANHAMENTO" = 61
ERROR - 10-07-2018 17:05:27 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:08:46 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:10:01 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:30:48 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:32:21 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:32:44 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:33:06 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:35:07 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:37:42 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:38:38 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:39:34 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:40:12 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:43:28 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:44:23 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:45:06 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:45:37 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:46:09 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:51:42 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:52:36 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:52:53 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:53:31 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:55:30 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:56:51 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:57:09 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 17:58:50 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:00:19 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:04:20 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:04:25 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:05:07 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:05:21 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:05:28 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:07:16 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:08:44 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:11:27 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:11:32 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:11:37 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:11:58 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:12:13 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:13:01 --> 404 Page Not Found: Public/js
ERROR - 10-07-2018 18:40:32 --> 404 Page Not Found: Public/js
