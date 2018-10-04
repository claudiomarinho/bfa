<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 09-08-2018 14:48:47 --> 404 Page Not Found: Public/js
ERROR - 09-08-2018 14:49:20 --> 404 Page Not Found: Documentos/tab1
ERROR - 09-08-2018 14:49:23 --> 404 Page Not Found: Documentos/tab2
ERROR - 09-08-2018 14:49:27 --> 404 Page Not Found: Public/js
ERROR - 09-08-2018 15:32:24 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 09-08-2018 15:33:15 --> Severity: Notice --> Use of undefined constant OPENSSL_RAW_DATA - assumed 'OPENSSL_RAW_DATA' D:\wamp\www\dab\Sistemas\bfa\application\controllers\Login.php 63
ERROR - 09-08-2018 16:17:13 --> Query error: OCIStmtExecute: ORA-00904: "A"."NO_AREA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, '', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_EAS_VISIVEL IS NULL
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '410010'  AND A.NO_AREA = 'CE E DE' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 09-08-2018 16:20:00 --> Query error: OCIStmtExecute: ORA-00904: "A"."NO_AREA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, '', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_EAS_VISIVEL IS NULL
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '410010'  AND A.NO_AREA = 'CE E DE' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 09-08-2018 16:20:25 --> Query error: OCIStmtExecute: ORA-00904: "A"."NO_AREA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, '', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_EAS_VISIVEL IS NULL
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '410010'  AND A.NO_AREA = 'CE E DE' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 09-08-2018 16:21:32 --> Query error: OCIStmtExecute: ORA-00904: "A"."NO_AREA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, '', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_EAS_VISIVEL IS NULL
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '410010'  AND A.NO_AREA = 'CE E DE' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 09-08-2018 16:21:35 --> Query error: OCIStmtExecute: ORA-00904: "A"."NO_AREA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, '', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_EAS_VISIVEL IS NULL
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '410010'  AND A.NO_AREA = 'CE E DE' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
ERROR - 09-08-2018 16:21:54 --> Query error: OCIStmtExecute: ORA-00904: "A"."NO_AREA": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_BFA_FAMILIA,
                P.CO_SEQ_BFA_PESSOA,
                DECODE(P.ST_OBRIGATORIO, 1, 'SIM', 'N&Atilde;O') ST_OBRIGATORIO,  
                P.NU_NIS_PESSOA NU_NIS, 
                P.NO_PESSOA,     
                TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO,
                DECODE(P.CO_BFA_DOMICILIO, NULL, '', (D.DS_TIPO_LOGRADOURO || ' ' || D.NO_LOGRADOURO || ' ' || D.NO_COMPL_LOGRADOURO || ' ' || D.NO_BAIRRO)) AS DS_ENDERECO,                 
                (DECODE(EAS.CO_CNES, NULL, '', EAS.CO_CNES) || ' ' || DECODE(EAS.NO_EAS_VISIVEL, NULL, '', EAS.NO_EAS_VISIVEL)) AS DS_EAS,
                (DECODE(P.CO_CNS_PROF_VISIVEL, NULL, '', P.CO_CNS_PROF_VISIVEL) || ' ' || DECODE(PROF.NO_PROFISSIONAL, NULL, '', PROF.NO_PROFISSIONAL)) AS DS_PROFISSIONAL    
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO D ON P.CO_BFA_DOMICILIO = D.CO_SEQ_BFA_DOMICILIO AND D.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBSISVAN.TB_BFA_EAS_VISIVEL EAS ON EAS.CO_SEQ_EAS_VISIVEL = P.CO_EAS_VISIVEL AND EAS.ST_REGISTRO_ATIVO = 'S'
                LEFT JOIN DBCNES.TB_DADOS_PROFISSIONAL_SUS PROF ON PROF.CO_CNS = P.CO_CNS_PROF_VISIVEL AND PROF.ST_REGISTRO_ATIVO = 'S'         
                
            WHERE
                P.ST_REGISTRO_ATIVO = 'S'                  
                AND P.CO_EAS_VISIVEL IS NULL
                 AND V.NU_VIGENCIA = '22018'  AND P.CO_MUNICIPIO_IBGE = '410010'  AND A.NO_AREA = 'CE E DE' 
            ORDER BY 
                D.NO_BAIRRO,D.DS_TIPO_LOGRADOURO,D.NO_LOGRADOURO,D.NO_COMPL_LOGRADOURO,
                P.CO_BFA_FAMILIA,NO_PESSOA
        
