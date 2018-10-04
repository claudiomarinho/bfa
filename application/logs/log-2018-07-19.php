<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 19-07-2018 09:16:35 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:16:36 --> Query error: OCIStmtExecute: ORA-00904: "P"."NU_VIGENCIA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'CEILANDIA'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:16:54 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:16:54 --> Query error: OCIStmtExecute: ORA-00904: "P"."NU_VIGENCIA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'CEILANDIA'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:17:28 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:17:28 --> Query error: OCIStmtExecute: ORA-00904: "P"."NU_VIGENCIA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'CEILANDIA'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:17:29 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:17:29 --> Query error: OCIStmtExecute: ORA-00904: "P"."NU_VIGENCIA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'CEILANDIA'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:19:21 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:19:21 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:19:21 --> Query error: OCIStmtExecute: ORA-00904: "P"."NU_VIGENCIA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'CEILANDIA'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:19:37 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:19:37 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:19:37 --> Query error: OCIStmtExecute: ORA-00904: "P"."NU_VIGENCIA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'CEILANDIA'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:19:45 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 96
ERROR - 19-07-2018 09:19:46 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:19:49 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:19:55 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:19:55 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 21
ERROR - 19-07-2018 09:19:55 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = ) AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'ACAMPAMENTO'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:20:20 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 23
ERROR - 19-07-2018 09:20:20 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 23
ERROR - 19-07-2018 09:20:20 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = ) AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'ACAMPAMENTO'  AND P.NU_VIGENCIA = '22018' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:20:30 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = ) AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'ACAMPAMENTO' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:23:50 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = ) AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'ACAMPAMENTO' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:26:16 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = ) AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'ACAMPAMENTO' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:27:10 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                AND P.CO_SEQ_BFA_PESSOA NOT IN (SELECT CO_BFA_PESSOA FROM DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO WHERE NU_VIGENCIA = ) AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'ACAMPAMENTO' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
            
ERROR - 19-07-2018 09:34:16 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:35:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:35:39 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:43:22 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:44:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:44:15 --> Severity: Notice --> Undefined index: NU_NIS D:\wamp\www\dab\Sistemas\bfa\application\views\acompanhamento\cadastro.php 23
ERROR - 19-07-2018 09:44:15 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:48:40 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:48:59 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:49:03 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:49:09 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:49:15 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:51:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:51:49 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:51:51 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:52:03 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:52:20 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:52:23 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:52:28 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:53:35 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 09:54:00 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:14:49 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:19:33 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:24:50 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:24:55 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:26:20 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:32:31 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:32:32 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:32:33 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:36:20 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:36:41 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:36:52 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:37:13 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:44:56 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:45:07 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 10:50:09 --> Query error: OCIStmtExecute: ORA-00904: "P"."CO_CNS_PROFISSIONAL": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'                 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'    
                 AND P.CO_MUNICIPIO_IBGE = '530010'  AND P.CO_CNES_ATENDIMENTO = '5117666'  AND P.CO_CNS_PROFISSIONAL = '000000860770133' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 19-07-2018 11:12:12 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:12:28 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:12:46 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:13:51 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:14:06 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:14:16 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:14:31 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:14:48 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:15:01 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:28:19 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:28:21 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:28:25 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:28:27 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:29:56 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:30:20 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:35:03 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 11:35:45 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 14:16:58 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 14:40:56 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 14:53:35 --> Severity: Warning --> trim() expects parameter 1 to be string, array given D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 497
ERROR - 19-07-2018 14:54:25 --> Severity: Warning --> trim() expects parameter 1 to be string, array given D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 497
ERROR - 19-07-2018 14:56:49 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:00:32 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:03:44 --> Query error: OCIStmtExecute: ORA-00904: "P"."CO_DOMICILIO": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'  
                AND P.CO_DOMICILIO IS NULL
                 AND P.CO_MUNICIPIO_IBGE = '530010' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 19-07-2018 15:05:32 --> Query error: OCIStmtExecute: ORA-00904: "D"."NO_BAIRRO": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_BFA_DOMICILIO IS NULL
                 AND P.CO_MUNICIPIO_IBGE = '530010' 
            ORDER BY                 
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 19-07-2018 15:06:40 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:06:48 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:06:58 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:08:48 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:08:55 --> Severity: Error --> Call to undefined method Mapa::asdasdasd() D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 123
ERROR - 19-07-2018 15:09:22 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 99
ERROR - 19-07-2018 15:09:22 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 103
ERROR - 19-07-2018 15:09:23 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:09:26 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:09:34 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:09:42 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:36:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:48:52 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:49:02 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 19-07-2018 15:49:02 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
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
        
ERROR - 19-07-2018 15:58:04 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 19-07-2018 15:58:05 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:58:16 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 15:58:31 --> Query error: OCIStmtExecute: ORA-00904: "P"."ST_COMPLEMENTAR": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND NU_VIGENCIA = 22018
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = 'S' 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'   
                AND P.ST_COMPLEMENTAR = 'S' 
                 AND P.CO_MUNICIPIO_IBGE = '530010' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 19-07-2018 16:01:17 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:01:22 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 19-07-2018 16:01:24 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:01:25 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:01:33 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 19-07-2018 16:01:34 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:01:37 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:01:41 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:45:08 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:45:09 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:45:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:45:13 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:45:14 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:45:18 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:46:25 --> Severity: Warning --> Missing argument 2 for Pessoa::buscaIndividuoCompleto(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Acompanhamento.php on line 31 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Pessoa.php 58
ERROR - 19-07-2018 16:46:25 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Pessoa.php 77
ERROR - 19-07-2018 16:46:25 --> Query error: OCIStmtExecute: ORA-00904: "P"."CO_SEQ_BFA_PESSOA": identificador inválido
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
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO DOM ON DOM.CO_SEQ_BFA_DOMICILIO = PESS.CO_BFA_DOMICILIO
            WHERE 
                CO_SEQ_BFA_PESSOA = '3589'  AND V.NU_VIGENCIA = NULL AND V.ST_REGISTRO_ATIVO = 'S'
ERROR - 19-07-2018 16:46:53 --> Query error: OCIStmtExecute: ORA-00904: "P"."CO_SEQ_BFA_PESSOA": identificador inválido
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
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO DOM ON DOM.CO_SEQ_BFA_DOMICILIO = PESS.CO_BFA_DOMICILIO
            WHERE 
                CO_SEQ_BFA_PESSOA = '3589'  AND V.NU_VIGENCIA = '22018' AND V.ST_REGISTRO_ATIVO = 'S'
ERROR - 19-07-2018 16:48:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:50:00 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:50:40 --> Query error: OCIStmtExecute: ORA-00918: coluna definida de maneira ambígua
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT CO_BFA_FAMILIA 
                          FROM DBSISVAN.TB_BFA_PESSOA PESS
                          INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                          WHERE PESS.NU_NIS_PESSOA = '16169321378' AND V.NU_VIGENCIA = '22018' AND V.ST_REGISTRO_ATIVO = 'S'
ERROR - 19-07-2018 16:51:24 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:55:13 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:55:17 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:55:18 --> Severity: Warning --> Missing argument 3 for Pessoa::retornaBuscaIndividuos(), called in D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php on line 45 and defined D:\wamp\www\dab\Sistemas\bfa\application\models\Pessoa.php 23
ERROR - 19-07-2018 16:55:18 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Pessoa.php 50
ERROR - 19-07-2018 16:55:18 --> Severity: Notice --> Undefined variable: nuVigencia D:\wamp\www\dab\Sistemas\bfa\application\models\Pessoa.php 51
ERROR - 19-07-2018 16:55:18 --> Query error: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_SEQ_BFA_PESSOA, P.CO_BFA_FAMILIA, P.NO_PESSOA, P.NU_NIS_PESSOA NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO,  
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO,  DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'NAO', 'SIM') ST_ACOMPANHADO
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA 
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON (RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA =  AND DT_ACOMPANHAMENTO IS NOT NULL)
            WHERE 
                ROWNUM < 201 AND V.NU_VIGENCIA =  AND V.ST_REGISTRO_ATIVO = 'S'
                 AND  P.CO_MUNICIPIO_IBGE = '530010' 
            ORDER BY 
                NO_PESSOA
            
ERROR - 19-07-2018 16:56:03 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:09 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:12 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:17 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:21 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:23 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:32 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:54 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 16:56:59 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:21:51 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:27:57 --> Query error: OCIStmtExecute: ORA-06553: PLS-306: wrong number or types of arguments in call to 'V'
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, 'SEM INFORMAÇÃO', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL  
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S' 
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S' 
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S' 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '530010' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 19-07-2018 17:29:06 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:29:19 --> Severity: Notice --> Undefined index: :ST_REGISTRO_ATIVO D:\wamp\www\dab\Sistemas\bfa\application\core\MY_Model.php 148
ERROR - 19-07-2018 17:30:46 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:30:58 --> Query error: OCIStmtExecute: ORA-00918: coluna definida de maneira ambígua
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO) AS DS_ENDERECO,
                (DECODE(EAS.CO_CNES, NULL, 'S/I', EAS.CO_CNES) || ' - ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, 'SEM INFORMAÇÃO', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, 'S/I', P.CO_CNS_PROF_VISIVEL) || ' - ' || DECODE(PROF.NO_PROFISSIONAL, NULL, 'SEM INFORMAÇÃO', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                INNER JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND NU_VIGENCIA = 22018
                INNER JOIN DBSISVAN.TB_BFA_ACOMPANHAMENTO ACOMP ON ACOMP.CO_SEQ_BFA_ACOMPANHAMENTO = RL.CO_BFA_ACOMPANHAMENTO AND ACOMP.CO_BFA_MOTIVO_NAO_ACOMP IS NOT NULL AND ACOMP.ST_REGISTRO_ATIVO = 'S' 
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'
                AND D.ST_REGISTRO_ATIVO = 'S'               
                AND V.ST_REGISTRO_ATIVO = 'S'
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '530010'  AND D.NO_BAIRRO = 'BRAZLANDIA' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 19-07-2018 17:32:17 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:32:22 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:32:30 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:32:30 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:32:33 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:32:45 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:32:47 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:34:56 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:42:39 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:43:19 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:54:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:54:18 --> Severity: Notice --> Undefined index: NU_VIGENCIA D:\wamp\www\dab\Sistemas\bfa\application\models\Mapa.php 66
ERROR - 19-07-2018 17:55:19 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:55:31 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:55:43 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:56:41 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:57:23 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 17:58:38 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:01:24 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 97
ERROR - 19-07-2018 18:01:24 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 101
ERROR - 19-07-2018 18:01:25 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:01:30 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:01:35 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:01:42 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:04:08 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:04:16 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:05:25 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 97
ERROR - 19-07-2018 18:05:25 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 101
ERROR - 19-07-2018 18:05:26 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:05:29 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:09:30 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 97
ERROR - 19-07-2018 18:09:30 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 101
ERROR - 19-07-2018 18:09:31 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:09:34 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:09:51 --> Severity: Notice --> Undefined index: ST_ACOMPANHAMENTO D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 97
ERROR - 19-07-2018 18:09:51 --> Severity: Notice --> Undefined index: TP_MAPA D:\wamp\www\dab\Sistemas\bfa\application\controllers\Mapaacompanhamento.php 101
ERROR - 19-07-2018 18:09:52 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:09:53 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:10:11 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:10:21 --> 404 Page Not Found: Public/js
ERROR - 19-07-2018 18:10:39 --> 404 Page Not Found: Public/js
