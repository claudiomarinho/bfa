<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 20-06-2018 10:37:26 --> Severity: Notice --> Undefined property: Individuo::$Domicilio D:\wamp\www\dab\Sistemas\bfa\application\controllers\Individuo.php 18
ERROR - 20-06-2018 10:37:26 --> Severity: Error --> Call to a member function retornaBuscaIndividuos() on a non-object D:\wamp\www\dab\Sistemas\bfa\application\controllers\Individuo.php 18
ERROR - 20-06-2018 10:37:28 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 10:37:52 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 10:38:41 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 10:40:14 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 11:42:52 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 11:43:56 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 11:44:04 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 11:44:24 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 11:49:41 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 12:19:11 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 12:19:15 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 12:19:21 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 12:21:31 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 12:21:34 --> 404 Page Not Found: Public/js
ERROR - 20-06-2018 16:34:17 --> Query error: OCIStmtExecute: ORA-00904: "ST_REGISTRO_ATIVO": identificador inválido
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT * 
                          FROM DBSISVAN.TB_BFA_PESSOA 
                          WHERE ST_REGISTRO_ATIVO = 'S'
                          AND CO_MUNICIPIO_IBGE = '530010'
                          
                          
ERROR - 20-06-2018 16:57:54 --> Query error: OCIStmtExecute: ORA-00942: a tabela ou view não existe
 (ext\pdo_oci\oci_statement.c:148) - Invalid query: SELECT * 
                          FROM DBSISVAN.TB_BFA_PESSOA 
                          WHERE CO_MUNICIPIO_IBGE = '530010' AND ROWNUM < 200
                          
                          ORDER BY NO_PESSOA
                          
