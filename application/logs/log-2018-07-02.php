<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 02-07-2018 17:39:53 --> Query error: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: 
            SELECT 
                P.CO_SEQ_BFA_PESSOA, P.CO_BFA_FAMILIA, P.NO_PESSOA, P.NU_NIS, TO_CHAR(P.DT_NASCIMENTO,'DD/MM/YYYY') DT_NASCIMENTO, DECODE(P.CO_SEXO, 2, 'FEMININO', 'MASCULINO') AS DS_SEXO,  
                TO_CHAR(RL.DT_ACOMPANHAMENTO,'DD/MM/YYYY') DT_ACOMPANHAMENTO,  DECODE(RL.DT_ACOMPANHAMENTO, NULL, 'NAO', 'SIM') ST_ACOMPANHADO
            FROM 
                DBSISVAN.TB_BFA_PESSOA P
                LEFT JOIN DBSISVAN.RL_BFA_PESSOA_ACOMPANHAMENTO RL ON (RL.CO_BFA_PESSOA = P.CO_SEQ_BFA_PESSOA AND RL.NU_VIGENCIA = '22018' AND DT_ACOMPANHAMENTO IS NOT NULL)
            WHERE 
                P.CO_MUNICIPIO_IBGE = '530010' 
                AND ROWNUM < 201
                 AND NU_NIS = 'ANA ANGELICA' 
            ORDER BY 
                NO_PESSOA
            
ERROR - 02-07-2018 17:40:05 --> 404 Page Not Found: Public/js
ERROR - 02-07-2018 17:40:11 --> 404 Page Not Found: Public/js
