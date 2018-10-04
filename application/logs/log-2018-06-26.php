<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 26-06-2018 10:05:30 --> 404 Page Not Found: Public/js
ERROR - 26-06-2018 10:05:39 --> 404 Page Not Found: Public/js
ERROR - 26-06-2018 10:05:49 --> 404 Page Not Found: Public/js
ERROR - 26-06-2018 10:06:46 --> 404 Page Not Found: Public/js
ERROR - 26-06-2018 10:06:55 --> 404 Page Not Found: Public/js
ERROR - 26-06-2018 10:07:05 --> Severity: error --> Exception: Unable to locate the model you have specified: Tbcompanhamento D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 344
ERROR - 26-06-2018 10:07:32 --> Query error: OCIStmtExecute: ORA-01747: especificação inválida para usuário.tabela.coluna, tabela.coluna ou de coluna
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT DBSISVAN..NEXTVAL FROM DUAL
ERROR - 26-06-2018 11:06:41 --> 404 Page Not Found: Public/js
ERROR - 26-06-2018 11:11:05 --> Query error: OCIStmtExecute: ORA-01438: valor maior que a precisão especificada usado para esta coluna
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: INSERT INTO "DBSISVAN"."RL_BFA_PESSOA_ACOMPANHAMENTO" ("CO_BFA_ACOMPANHAMENTO", "CO_BFA_PESSOA", DT_ACOMPANHAMENTO, "NU_ANO", "NU_MES", "NU_COMPETENCIA", "ST_ANO", "ST_MES", "NU_VIGENCIA") VALUES ('14', 335, TO_DATE('20/03/2018','DD/MM/YYYY HH24:MI:SS'), '2018', '03', '201803', '1', '1', 201802)
ERROR - 26-06-2018 11:41:30 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 224
ERROR - 26-06-2018 11:41:30 --> Severity: Notice --> Undefined index:  D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 224
ERROR - 26-06-2018 11:41:30 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: UPDATE "DBSISVAN"."RL_BFA_PESSOA_ACOMPANHAMENTO" SET "CO_BFA_ACOMPANHAMENTO" = 1, "CO_BFA_PESSOA" = 335, DT_ACOMPANHAMENTO = TO_DATE('20/03/2018','DD/MM/YYYY HH24:MI:SS'), "NU_ANO" = '2018', "NU_MES" = '03', "NU_COMPETENCIA" = '201803', "ST_ANO" = '1', "ST_MES" = '1', "NU_VIGENCIA" = 22018
WHERE  IS NULL
ERROR - 26-06-2018 15:10:52 --> Severity: Parsing Error --> syntax error, unexpected T_RETURN D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 187
ERROR - 26-06-2018 15:19:08 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 224
ERROR - 26-06-2018 15:19:08 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php 165
ERROR - 26-06-2018 15:21:17 --> Severity: Notice --> Undefined index: CO_SEQ_BFA_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 224
ERROR - 26-06-2018 15:22:54 --> Query error: OCIStmtExecute: ORA-00904: "Array": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: UPDATE "DBSISVAN"."TB_BFA_ACOMPANHAMENTO" SET "CO_SEQ_BFA_ACOMPANHAMENTO" = Array, "CO_PESSOA_FISICA" = 455387, "CO_SISTEMA_ORIGEM_ACOMP" = 2
WHERE "CO_SEQ_BFA_ACOMPANHAMENTO" = "Array"
ERROR - 26-06-2018 15:30:44 --> Query error: OCIStmtExecute: ORA-02291: restrição de integridade (DBSISVAN.FK_BFAACOMP_BFAPESSOAACOMP) violada - chave mãe não localizada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: INSERT INTO "DBSISVAN"."RL_BFA_PESSOA_ACOMPANHAMENTO" ("CO_BFA_ACOMPANHAMENTO", "CO_BFA_PESSOA", DT_ACOMPANHAMENTO, "NU_ANO", "NU_MES", "NU_COMPETENCIA", "ST_ANO", "ST_MES", "NU_VIGENCIA") VALUES (1, 335, TO_DATE('20/03/2018','DD/MM/YYYY HH24:MI:SS'), '2018', '03', '201803', '1', '1', 22018)
