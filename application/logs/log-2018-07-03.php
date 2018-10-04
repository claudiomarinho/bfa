<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 03-07-2018 10:45:52 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 10:45:58 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 10:46:48 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 10:46:59 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 10:58:09 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:03:29 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:04:34 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:09:24 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:09:47 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:17:24 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:19:32 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:21:31 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:21:34 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:22:03 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:22:28 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:22:36 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:22:43 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:23:02 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:23:41 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:26:21 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:27:04 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:27:36 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:28:00 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:28:10 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:29:34 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:30:37 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:31:09 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:31:38 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:32:04 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:32:31 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:33:29 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:34:08 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:35:08 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:40:25 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:40:49 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:41:50 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 11:59:17 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:00:02 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:01:01 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:02:02 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:02:09 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:04:19 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:04:20 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA, PESS.CO_BFA_FAMILIA, PESS.TP_PESSOA, PESS.NO_PESSOA, PESS.NU_NIS, PESS.DT_NASCIMENTO, DECODE(PESS.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO, PESS.ST_OBRIGATORIO,
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, DECODE(RL.CO_BFA_ACOMPANHAMENTO, NOT NULL, 'S', 'N') AS ST_ACOMPANHAMENTO
                ACOMP.CO_BFA_MOTIVO_NAO_ACOMP,
                ACOMP.CO_CNES_ATENDIMENTO,
                ACOMP.CO_CNS_PROFISSIONAL,
                ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA,
                ACOMP.NU_PESO,
                ACOMP.NU_ALTURA,
                ACOMP.CO_BFA_MOTIVO_VACINACAO,
                ACOMP.ST_GESTANTE,
                ACOMP.DT_ULTIMA_MENSTRUACAO,
                ACOMP.CO_BFA_MOTIVO_PRE_NATAL,
                ACOMP.CO_DSEI,
                FAM.ST_RESIDE_INDIGENA
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = PESS.CO_BFA_FAMILIA AND FAM.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = '5468' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 03-07-2018 12:04:37 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:04:38 --> Query error: OCIStmtExecute: ORA-00923: palavra-chave FROM não localizada onde esperada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA, PESS.CO_BFA_FAMILIA, PESS.TP_PESSOA, PESS.NO_PESSOA, PESS.NU_NIS, PESS.DT_NASCIMENTO, DECODE(PESS.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO, PESS.ST_OBRIGATORIO,
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, DECODE(RL.CO_BFA_ACOMPANHAMENTO, NULL, 'N', 'S') AS ST_ACOMPANHAMENTO
                ACOMP.CO_BFA_MOTIVO_NAO_ACOMP,
                ACOMP.CO_CNES_ATENDIMENTO,
                ACOMP.CO_CNS_PROFISSIONAL,
                ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA,
                ACOMP.NU_PESO,
                ACOMP.NU_ALTURA,
                ACOMP.CO_BFA_MOTIVO_VACINACAO,
                ACOMP.ST_GESTANTE,
                ACOMP.DT_ULTIMA_MENSTRUACAO,
                ACOMP.CO_BFA_MOTIVO_PRE_NATAL,
                ACOMP.CO_DSEI,
                FAM.ST_RESIDE_INDIGENA
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = PESS.CO_BFA_FAMILIA AND FAM.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = '5468' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 03-07-2018 12:04:57 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:05:43 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:06:08 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:07:08 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:07:27 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:08:06 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:08:31 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:08:34 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:08:45 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 12:08:51 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:29:30 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:29:41 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:29:48 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:29:59 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:30:11 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:30:56 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:30:59 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:52:06 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:52:47 --> Query error: OCIStmtExecute: ORA-01438: valor maior que a precisão especificada usado para esta coluna
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: UPDATE "DBSISVAN"."TB_BFA_ACOMPANHAMENTO" SET "CO_SEQ_BFA_ACOMPANHAMENTO" = '52', "CO_PESSOA_FISICA" = 455387, "CO_SISTEMA_ORIGEM_ACOMP" = 2, "CO_BFA_MOTIVO_NAO_ACOMP" = NULL, "CO_CNES_ATENDIMENTO" = '0011347', "CO_CNS_PROFISSIONAL" = '', "CO_BFA_MOTIVO_NUTRI_CRIANCA" = NULL, "NU_PESO" = '6000', "NU_ALTURA" = '70', "ST_VACINACAO" = 'I', "ST_GESTANTE" = 'I', DT_ULTIMA_MENSTRUACAO = TO_DATE('','DD/MM/YYYY HH24:MI:SS'), "CO_DSEI" = NULL
WHERE "CO_SEQ_BFA_ACOMPANHAMENTO" = 52
ERROR - 03-07-2018 14:53:44 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:53:54 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:55:16 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:55:30 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:55:33 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 14:59:57 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:07:32 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:08:21 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:09:40 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:09:43 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:10:45 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:12:22 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:12:26 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:14:53 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:17:56 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:18:23 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:19:06 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:19:53 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:23:24 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:23:38 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:23:41 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:25:37 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:26:51 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:32:18 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:32:21 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:39:44 --> Severity: Parsing Error --> syntax error, unexpected ')' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 143
ERROR - 03-07-2018 15:41:05 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:41:50 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:45:38 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:48:26 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:53:39 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:54:03 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:55:43 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:55:46 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 15:58:10 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:00:28 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:00:30 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:00:47 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:00:52 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:01:10 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:01:13 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:13:59 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:13:59 --> Query error: OCIStmtExecute: ORA-00923: palavra-chave FROM não localizada onde esperada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA, PESS.CO_BFA_FAMILIA, PESS.TP_PESSOA, PESS.NO_PESSOA, PESS.NU_NIS, PESS.DT_NASCIMENTO, DECODE(PESS.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO, PESS.ST_OBRIGATORIO,
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO, 
                ACOMP.ST_PESSOA_NAO_ACOMPANHADA AS ST_ACOMPANHADO, 
                ACOMP.CO_BFA_MOTIVO_NAO_ACOMP,
                ACOMP.CO_CNES_ATENDIMENTO,
                ACOMP.CO_CNS_PROFISSIONAL,
                DECODE(ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA, NULL, 'S', 'N') AS ST_MEDIDAS,
                ACOMP.CO_BFA_MOTIVO_NUTRI_CRIANCA,
                ACOMP.NU_PESO,
                ACOMP.NU_ALTURA,
                DECODE(ACOMP.ST_VACINACAO, 'I', 'N', 'S') AS ST_VACINACAO,
                ACOMP.CO_BFA_MOTIVO_VACINACAO,
                DECODE(ACOMP.ST_GESTANTE, 'I', 'N', 'S') AS ST_GESTANTE,
                ACOMP.ST_GESTANTE,
                ACOMP.DT_ULTIMA_MENSTRUACAO,
                DECODE(ACOMP.ST_PRE_NATAL, 'I', 'N', 'S') AS ST_PRE NATAL,
                ACOMP.CO_BFA_MOTIVO_PRE_NATAL,
                ACOMP.CO_DSEI,
                FAM.ST_RESIDE_INDIGENA
            FROM 
                DBSISVAN.TB_BFA_PESSOA PESS 
                INNER JOIN DBSISVAN.TB_BFA_FAMILIA FAM ON FAM.CO_SEQ_BFA_FAMILIA = PESS.CO_BFA_FAMILIA AND FAM.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = 22018
                LEFT JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.ST_REGISTRO_ATIVO = 'S'
            WHERE 
                PESS.CO_SEQ_BFA_PESSOA = '5468' 
                AND PESS.ST_REGISTRO_ATIVO = 'S'
                
ERROR - 03-07-2018 16:15:20 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:15:53 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:15:56 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:20:18 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:20:40 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:23:58 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:24:11 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:24:14 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:31:29 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:31:32 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:35:45 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:36:03 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:36:07 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:37:04 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:37:07 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:37:20 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 16:37:23 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:04:18 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:04:43 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:06:20 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:06:24 --> Query error: OCIStmtExecute: ORA-01747: especificação inválida para usuário.tabela.coluna, tabela.coluna ou de coluna
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT DBSISVAN..NEXTVAL FROM DUAL
ERROR - 03-07-2018 17:07:12 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:07:23 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:07:29 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:09:41 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:09:53 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:10:05 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:10:19 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:10:48 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:10:57 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:11:22 --> Query error: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("DBSISVAN"."TB_BFA_ACOMPANHAMENTO"."ST_GESTANTE")
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: INSERT INTO "DBSISVAN"."TB_BFA_ACOMPANHAMENTO" ("CO_PESSOA_FISICA", "CO_SISTEMA_ORIGEM_ACOMP", "ST_PESSOA_NAO_ACOMPANHADA", "CO_BFA_MOTIVO_NAO_ACOMP", "CO_CNES_ATENDIMENTO", "CO_CNS_PROFISSIONAL", "CO_BFA_MOTIVO_NUTRI_CRIANCA", "NU_PESO", "NU_ALTURA", "ST_VACINACAO", "CO_BFA_MOTIVO_VACINACAO", "CO_DSEI", "ST_GESTANTE", DT_ULTIMA_MENSTRUACAO, "ST_PRE_NATAL", "CO_BFA_MOTIVO_PRE_NATAL", "CO_SEQ_BFA_ACOMPANHAMENTO") VALUES (455387, 2, 'S', '', '0011347', NULL, '1', '', '', 'N', '11', NULL, NULL, TO_DATE('','DD/MM/YYYY HH24:MI:SS'), NULL, NULL, '53')
ERROR - 03-07-2018 17:20:29 --> 404 Page Not Found: Public/js
ERROR - 03-07-2018 17:26:46 --> 404 Page Not Found: Public/js
