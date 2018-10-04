<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 23-06-2018 12:02:42 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:02:58 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:03:11 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:03:21 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:04:08 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:09:12 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:09:17 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:09:38 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:09:39 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:14:36 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:14:36 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:14:36 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:16:02 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:16:02 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:16:02 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:17:10 --> Severity: error --> Exception: Class Eas already exists and doesn't extend CI_Model D:\wamp\www\dab\Sistemas\bfa\system\core\Loader.php 349
ERROR - 23-06-2018 12:21:20 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:22:46 --> 404 Page Not Found: Eas/carregaEasVisisvel
ERROR - 23-06-2018 12:23:25 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:23:49 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 12:26:19 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 23-06-2018 12:26:41 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 23-06-2018 12:26:57 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 23-06-2018 12:27:02 --> Severity: Notice --> Undefined index: :CO_MUNICIPIO_IBGE D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 23-06-2018 12:28:00 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
        SELECT 
            EAS.CO_CNES, EST.NO_FANTASIA
        FROM 
            DBSISVAN.TB_BFA_EAS_VISIVEL EAS
            INNER JOIN DBCNES.TB_ESTABELECIMENTO EST ON EAS.CO_CNES = EST.CO_CNES
        WHERE 
            EAS.ST_REGISTRO_ATIVO = 'S'  
            DECODE(SUBSTR(CO_MUNICIPIO_GESTOR,0,2),'53','530010', CO_MUNICIPIO_GESTOR) = '530010'
        ORDER BY 
            EST.NO_FANTASIA 
        
ERROR - 23-06-2018 12:28:05 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
        SELECT 
            EAS.CO_CNES, EST.NO_FANTASIA
        FROM 
            DBSISVAN.TB_BFA_EAS_VISIVEL EAS
            INNER JOIN DBCNES.TB_ESTABELECIMENTO EST ON EAS.CO_CNES = EST.CO_CNES
        WHERE 
            EAS.ST_REGISTRO_ATIVO = 'S'  
            DECODE(SUBSTR(CO_MUNICIPIO_GESTOR,0,2),'53','530010', CO_MUNICIPIO_GESTOR) = '530010'
        ORDER BY 
            EST.NO_FANTASIA 
        
ERROR - 23-06-2018 12:28:21 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
        SELECT 
            EAS.CO_CNES, EST.NO_FANTASIA
        FROM 
            DBSISVAN.TB_BFA_EAS_VISIVEL EAS
            INNER JOIN DBCNES.TB_ESTABELECIMENTO EST ON EAS.CO_CNES = EST.CO_CNES
        WHERE 
            EAS.ST_REGISTRO_ATIVO = 'S'  
            DECODE(SUBSTR(EST.CO_MUNICIPIO_GESTOR,0,2),'53','530010', CO_MUNICIPIO_GESTOR) = '530010'
        ORDER BY 
            EST.NO_FANTASIA 
        
ERROR - 23-06-2018 12:28:23 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
        SELECT 
            EAS.CO_CNES, EST.NO_FANTASIA
        FROM 
            DBSISVAN.TB_BFA_EAS_VISIVEL EAS
            INNER JOIN DBCNES.TB_ESTABELECIMENTO EST ON EAS.CO_CNES = EST.CO_CNES
        WHERE 
            EAS.ST_REGISTRO_ATIVO = 'S'  
            DECODE(SUBSTR(EST.CO_MUNICIPIO_GESTOR,0,2),'53','530010', CO_MUNICIPIO_GESTOR) = '530010'
        ORDER BY 
            EST.NO_FANTASIA 
        
ERROR - 23-06-2018 12:55:20 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT CO_CNES, NO_FANTASIA 
            FROM DBCNES.TB_ESTABELECIMENTO EAS 
             NOT IN DBSISVAN.TB_BFA_EAS_VISIVEL EASV ON EASV.CO_CNES = EAS.CO_CNES
            WHERE DECODE(SUBSTR(CO_MUNICIPIO_GESTOR,0,2),'53','530010', CO_MUNICIPIO_GESTOR) = '530010'
            AND CO_MOTIVO_DESAB IS NULL
            AND SUBSTR(CO_NATUREZA_JUR,0,1) = 1
            AND TP_UNIDADE IN ('01', '02', '04', '15', '22', '32', '36', '40', '50', '70', '71', '72', '73', '74', '77', '78', '83')
            ORDER BY NO_FANTASIA 
        
ERROR - 23-06-2018 12:55:30 --> Query error: OCIStmtExecute: ORA-00933: comando SQL não encerrado adequadamente
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT CO_CNES, NO_FANTASIA 
            FROM DBCNES.TB_ESTABELECIMENTO EAS 
             NOT IN DBSISVAN.TB_BFA_EAS_VISIVEL EASV ON EASV.CO_CNES = EAS.CO_CNES
            WHERE DECODE(SUBSTR(CO_MUNICIPIO_GESTOR,0,2),'53','530010', CO_MUNICIPIO_GESTOR) = '530010'
            AND CO_MOTIVO_DESAB IS NULL
            AND SUBSTR(CO_NATUREZA_JUR,0,1) = 1
            AND TP_UNIDADE IN ('01', '02', '04', '15', '22', '32', '36', '40', '50', '70', '71', '72', '73', '74', '77', '78', '83')
            ORDER BY NO_FANTASIA 
        
ERROR - 23-06-2018 13:04:54 --> Severity: Notice --> Undefined index: :ST_REGISTRO_ATIVO D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 23-06-2018 13:05:01 --> Severity: Notice --> Undefined index: :ST_REGISTRO_ATIVO D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 23-06-2018 13:13:27 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:14:25 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:14:28 --> 404 Page Not Found: Eas/cadastro
ERROR - 23-06-2018 13:14:31 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:14:34 --> 404 Page Not Found: Eas/cadastro
ERROR - 23-06-2018 13:14:36 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:14:40 --> 404 Page Not Found: Eas/cadastro
ERROR - 23-06-2018 13:15:00 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:15:09 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:15:14 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:15:21 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:15:54 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:16:00 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:16:22 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:16:42 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:18:50 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:19:50 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:20:48 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:22:41 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:26:12 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:26:31 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:27:35 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:28:06 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:29:08 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:30:01 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:30:49 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:32:38 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:37:21 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:38:10 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:38:49 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:39:29 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:41:24 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:41:52 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:42:14 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:42:40 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:43:06 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:45:36 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:51:26 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:54:58 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:55:17 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:58:06 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 13:58:28 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:03:20 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:03:54 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:04:06 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:06:06 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:12:11 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:13:47 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:14:38 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:17:50 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:18:06 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:20:54 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:24:00 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:27:26 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:28:03 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:28:21 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:29:47 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:29:59 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:42:57 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:43:50 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:44:40 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:45:09 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:46:58 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:48:03 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:48:38 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:49:01 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:50:39 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:50:50 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:51:18 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:51:42 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:54:39 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:57:12 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 14:58:28 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:01:30 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:02:54 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:03:04 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:03:43 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:04:25 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:05:11 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:06:08 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:06:55 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:09:47 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:09:56 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:11:59 --> Query error: OCIStmtExecute: ORA-01747: especificação inválida para usuário.tabela.coluna, tabela.coluna ou de coluna
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT DBSISVAN..NEXTVAL FROM DUAL
ERROR - 23-06-2018 15:13:07 --> Severity: Notice --> Array to string conversion D:\wamp\www\dab\Sistemas\bfa\system\database\DB_driver.php 1480
ERROR - 23-06-2018 15:13:07 --> Severity: Notice --> Array to string conversion D:\wamp\www\dab\Sistemas\bfa\system\database\DB_driver.php 1480
ERROR - 23-06-2018 15:13:07 --> Severity: Notice --> Array to string conversion D:\wamp\www\dab\Sistemas\bfa\system\database\DB_driver.php 1480
ERROR - 23-06-2018 15:13:07 --> Severity: Notice --> Array to string conversion D:\wamp\www\dab\Sistemas\bfa\system\database\DB_driver.php 1480
ERROR - 23-06-2018 15:13:07 --> Query error: OCIStmtExecute: ORA-00928: palavra-chave SELECT não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: INSERT INTO "DBSISVAN"."TB_BFA_EAS_VISIVEL" (0, 1, 2, 3, "CO_SEQ_EAS_VISIVEL") VALUES (Array, Array, Array, Array, '10')
ERROR - 23-06-2018 15:15:17 --> Severity: Parsing Error --> syntax error, unexpected '}' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Eas.php 44
ERROR - 23-06-2018 15:15:25 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:19:33 --> Query error: OCIStmtExecute: ORA-01858: foi localizado um caractere não numérico onde se esperava um numérico
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: INSERT INTO "DBSISVAN"."TB_BFA_EAS_VISIVEL" ("CO_CNES", "NO_EAS_VISIVEL", DT_CADASTRO, "ST_REGISTRO_ATIVO", "CO_MUNICIPIO_IBGE", "CO_PESSOA_FISICA", "CO_SEQ_EAS_VISIVEL") VALUES ('0011347', 'ADOLESCENTRO', TO_DATE('SYSTADE','DD/MM/YYYY HH24:MI:SS'), 'S', '530010', '455387', '11')
ERROR - 23-06-2018 15:21:26 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:22:39 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:26:25 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:28:03 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:29:22 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:29:39 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:30:13 --> 404 Page Not Found: Public/js
ERROR - 23-06-2018 15:31:25 --> 404 Page Not Found: Public/js
