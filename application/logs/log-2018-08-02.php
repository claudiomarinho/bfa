<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 02-08-2018 11:15:01 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
                SELECT
                    DISTINCT F.NO_POVO_INDIGENA
                FROM 
                    DBSISVAN.TB_BFA_PESSOA P
                    INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                    INNER JOIN DBSISVAN.TB_BFA_FAMILIA F ON F.CO_SEQ_BFA_FAMILIA = P.CO_BFA_FAMILIA
                WHERE 
                    P.ST_REGISTRO_ATIVO = 'S'
                    AND F.ST_REGISTRO_ATIVO = 'S'
                    AND F.ST_RESIDE_INDIGENA = 1
                    AND V.NU_VIGENCIA = '22018'
                    AND P.CO_MUNICIPIO_IBGE = '530010'
                ORDER BY
                    F.NO_POVO_INDIGENA
ERROR - 02-08-2018 11:15:01 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT DISTINCT DECODE(A.NO_AREA, null, D.NO_BAIRRO, A.NO_AREA) NO_BAIRRO
                                FROM DBSISVAN.TB_BFA_DOMICILIO D
                                INNER JOIN DBSISVAN.TB_BFA_PESSOA P ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA 
                                LEFT JOIN DBSISVAN.TB_BFA_AREA A ON A.CO_SEQ_BFA_AREA = D.CO_BFA_AREA AND A.ST_REGISTRO_ATIVO = 'S'
                                WHERE D.CO_MUNICIPIO_IBGE = '530010' 
                                AND V.NU_VIGENCIA = '22018'
                                AND D.ST_REGISTRO_ATIVO = 'S' 
                                AND P.ST_REGISTRO_ATIVO = 'S' 
                                AND V.ST_REGISTRO_ATIVO = 'S' 
                                ORDER BY NO_BAIRRO 
ERROR - 02-08-2018 11:15:02 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
        SELECT 
            CO_SEQ_EAS_VISIVEL, CO_CNES, NO_EAS_VISIVEL
        FROM 
            DBSISVAN.TB_BFA_EAS_VISIVEL 
        WHERE 
            ST_REGISTRO_ATIVO = 'S'  
            AND CO_MUNICIPIO_IBGE = '530010'
        ORDER BY 
            NO_EAS_VISIVEL 
        
ERROR - 02-08-2018 11:15:05 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                COUNT(A.CO_SEQ_BFA_PESSOA) AS TOTAL
            FROM 
                DBSISVAN.TB_BFA_PESSOA A
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = A.CO_SEQ_BFA_PESSOA
            WHERE 
                CO_MUNICIPIO_IBGE = '530010' AND V.NU_VIGENCIA = '22018' AND A.ST_OBRIGATORIO = 1 AND A.ST_REGISTRO_ATIVO = 'S' AND V.ST_REGISTRO_ATIVO = 'S'
        
ERROR - 02-08-2018 12:53:03 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:53:03 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:53:07 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 12:53:07 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:53:07 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:53:07 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:53:07 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:53:07 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:53:13 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 12:53:13 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:53:13 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:53:13 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:53:13 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:53:13 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:53:18 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 12:53:19 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:53:19 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:53:19 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:53:19 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:53:19 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:54:58 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:55:28 --> 404 Page Not Found: Mapaacompanhamentodablocalsaudegov/sistemas
ERROR - 02-08-2018 12:55:29 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:55:35 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:56:45 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:56:45 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:56:45 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:56:45 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:56:45 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:56:45 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:57:06 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:57:06 --> Severity: Notice --> Undefined variable: dsn2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 118
ERROR - 02-08-2018 12:57:06 --> Severity: Notice --> Undefined variable: username2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 120
ERROR - 02-08-2018 12:57:06 --> Severity: Notice --> Undefined variable: password2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 121
ERROR - 02-08-2018 12:57:06 --> Severity: Notice --> Undefined variable: role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 137
ERROR - 02-08-2018 12:57:06 --> Severity: Notice --> Undefined variable: t_role2 D:\wamp\www\dab\Sistemas\bfa\application\config\database.php 139
ERROR - 02-08-2018 12:57:38 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:58:09 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:59:20 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 12:59:22 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:00:03 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:01:53 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 181
ERROR - 02-08-2018 13:01:53 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 248
ERROR - 02-08-2018 13:01:56 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:03:48 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 181
ERROR - 02-08-2018 13:03:48 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 249
ERROR - 02-08-2018 13:04:09 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:09:57 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:19:15 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:20:01 --> Query error: OCIStmtExecute: ORA-01008: nem todas as variáveis são limitadas
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = ? OR D.NO_BAIRRO = ?)
                 AND V.NU_VIGENCIA = ?  AND P.CO_MUNICIPIO_IBGE = ?  AND NO_BAIRRO = ? 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
ERROR - 02-08-2018 13:20:05 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 181
ERROR - 02-08-2018 13:20:05 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 248
ERROR - 02-08-2018 13:20:05 --> Severity: Error --> Call to undefined function print_() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 206
ERROR - 02-08-2018 13:20:09 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:20:26 --> Query error: OCIStmtExecute: ORA-01008: nem todas as variáveis são limitadas
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = ? OR D.NO_BAIRRO = ?)
                 AND V.NU_VIGENCIA = ?  AND P.CO_MUNICIPIO_IBGE = ?  AND NO_BAIRRO = ? 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
ERROR - 02-08-2018 13:21:20 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:21:59 --> Severity: Error --> Call to undefined function print_() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 206
ERROR - 02-08-2018 13:22:11 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:25:39 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:25:46 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:30:09 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:31:07 --> Query error: OCIStmtExecute: ORA-00907: parêntese direito não encontrado
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = AGUAS CLARAS OR D.NO_BAIRRO = AGUAS CLARAS)
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '530010' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 02-08-2018 13:32:28 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 181
ERROR - 02-08-2018 13:32:28 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 246
ERROR - 02-08-2018 13:32:28 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 206
ERROR - 02-08-2018 13:32:35 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:35:15 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:35:22 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:35:23 --> Query error: OCIStmtExecute: ORA-01008: nem todas as variáveis são limitadas
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = 'AGUAS CLARAS' OR D.NO_BAIRRO = 'AGUAS CLARAS')
                 AND V.NU_VIGENCIA = ?  AND P.CO_MUNICIPIO_IBGE = ? 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
ERROR - 02-08-2018 13:37:36 --> Severity: Notice --> Undefined property: Mapaacompanhamento::$_sq D:\wamp\www\dab\Sistemas\bfa\system\core\Model.php 77
ERROR - 02-08-2018 13:37:37 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:37:38 --> Severity: Notice --> Undefined property: Mapaacompanhamento::$_sq D:\wamp\www\dab\Sistemas\bfa\system\core\Model.php 77
ERROR - 02-08-2018 13:37:38 --> Query error: OCIStmtExecute: ORA-01008: nem todas as variáveis são limitadas
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = 'AGUAS CLARAS' OR D.NO_BAIRRO = 'AGUAS CLARAS')
                 AND V.NU_VIGENCIA = ?  AND P.CO_MUNICIPIO_IBGE = ? 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
ERROR - 02-08-2018 13:37:50 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 13:37:50 --> Query error: OCIStmtExecute: ORA-01008: nem todas as variáveis são limitadas
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = 'AGUAS CLARAS' OR D.NO_BAIRRO = 'AGUAS CLARAS')
                 AND V.NU_VIGENCIA = ?  AND P.CO_MUNICIPIO_IBGE = ? 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
ERROR - 02-08-2018 13:39:58 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:38:28 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:38:28 --> Query error: OCIStmtExecute: ORA-01008: nem todas as variáveis são limitadas
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TB_BFA_AREA A ON D.CO_BFA_AREA = A.CO_SEQ_BFA_AREA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                AND (A.NO_AREA = 'AGUAS CLARAS' OR D.NO_BAIRRO = 'AGUAS CLARAS')
                 AND V.NU_VIGENCIA = ?  AND P.CO_MUNICIPIO_IBGE = ? 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
ERROR - 02-08-2018 14:38:31 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:38:37 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:46:08 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:47:29 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:54:28 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 14:56:28 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 15:01:05 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 15:01:37 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 15:01:45 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 15:02:31 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 15:04:13 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 15:47:07 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:47:14 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:48:13 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:48:30 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:49:55 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:49:55 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:51:06 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:51:06 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:51:08 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:51:08 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:51:22 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:51:22 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:51:30 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:51:30 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:52:34 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:52:35 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:53:35 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:53:49 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:53:49 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:53:51 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:53:51 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:53:52 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:53:52 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:53:52 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 15:53:53 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT
                VIGENCIA.CO_MUNICIPIO_IBGE,
                TO_CHAR(VIGENCIA.DT_ABERTURA, 'YYYY-MM-DD HH24:MI:SS') DT_ABERTURA,
                TO_CHAR(VIGENCIA.DT_ENCERRAMENTO, 'YYYY-MM-DD HH24:MI:SS') DT_ENCERRAMENTO,
                VIGENCIA.NU_VIGENCIA,
                VIGENCIA.ST_REGISTRO_ATIVO
            FROM DBSISVAN.TB_BFA_MUNICIPIO_VIGENCIA VIGENCIA
            WHERE VIGENCIA.ST_REGISTRO_ATIVO = 'S' 
                  AND VIGENCIA.CO_MUNICIPIO_IBGE = '530010'
        
ERROR - 02-08-2018 15:55:26 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 16:29:25 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 16:29:37 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 16:34:46 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 02-08-2018 16:47:04 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 17:51:18 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 17:51:23 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 17:54:50 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 17:57:47 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 17:58:28 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 17:59:24 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:04:03 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:05:15 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:05:51 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:06:55 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:07:11 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:08:05 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:08:31 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:08:53 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:09:22 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:09:28 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:11:15 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:13:18 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:13:23 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:14:29 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:14:38 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:14:52 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:15:52 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:16:23 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:16:50 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:17:02 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:17:07 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:17:32 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:17:55 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:18:54 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:20:52 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:22:28 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:22:37 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:25:04 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:25:13 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:25:30 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:34:15 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:34:19 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:34:27 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:37:14 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:37:27 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:38:16 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:40:58 --> 404 Page Not Found: Public/js
ERROR - 02-08-2018 18:41:30 --> 404 Page Not Found: Public/js
