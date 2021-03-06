30/08/2018 10:33:37 - Chrome - 68.0.3440.106
Erro: sql: 
            SELECT 
                PESS.CO_SEQ_BFA_PESSOA,
                PESS.CO_BFA_FAMILIA,
                PESS.CO_MUNICIPIO_IBGE,
                PESS.NO_PESSOA,
                PESS.NU_NIS_PESSOA,
                PESS.DT_NASCIMENTO,
                DECODE(PESS.CO_SEXO, 1, 'FEMININO', 'MASCULINO') AS DS_SEXO,
                (DOM.NO_LOGRADOURO || ' ' || DOM.NO_COMPL_LOGRADOURO || ' ' || DOM.NO_BAIRRO) AS DS_ENDERECO
            FROM
                DBSISVAN.TB_BFA_PESSOA PESS
                INNER JOIN DBSISVAN.TH_BFA_PESSOA_VIGENCIA V ON V.CO_BFA_PESSOA = PESS.CO_SEQ_BFA_PESSOA
                LEFT JOIN DBSISVAN.TB_BFA_DOMICILIO DOM ON DOM.CO_SEQ_BFA_DOMICILIO = PESS.CO_BFA_DOMICILIO
            WHERE 
                CO_SEQ_BFA_PESSOA = :CO_SEQ_BFA_PESSOA AND V.NU_VIGENCIA = :NU_VIGENCIA AND V.ST_REGISTRO_ATIVO = :ST_REGISTRO_ATIVO
erro: OCIStmtExecute: ORA-01722: número inválido
 (ext\pdo_oci\oci_statement.c:148)
parametro-CO_SEQ_BFA_PESSOA: ds
parametro-NU_VIGENCIA: 22018
parametro-ST_REGISTRO_ATIVO: S

