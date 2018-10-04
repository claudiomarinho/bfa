<?php

/**
 * Created by PhpStorm.
 * User: dimas.filho
 * Date: 25/06/15
 * Time: 14:32
 */
class Autenticacao extends MY_Model
{

    public function consultarFichaAcesso($id)
    {
        $sql = "SELECT P.NO_PROGRAMA, PM.DS_PROGRAMA_MODULO, PJ.NU_CNPJ, PJ.NO_PESSOA_JURIDICA, PJ.CO_ESFERA_ADMINISTRATIVA,  PJ.CO_TIPO_ENTIDADE, TE.DS_TIPO_ENTIDADE,
                               PF.NU_CPF, APF.NO_SENHA, PF.NO_PESSOA_FISICA NO_PESSOA, PF.DT_NASCIMENTO, PF.CO_SEXO, PF.DS_CARGO, PF.ST_ESTRANGEIRO,
                               AUT.CO_GRUPO, G.DS_GRUPO,
                               M.SG_UF, AUT.CO_MUNICIPIO_IBGE, M.NO_MUNICIPIO, M.NO_MUNICIPIO_ACENTUADO,
                               AUT.CO_SEQ_FICHA_ACESSO ID, AUT.CO_PESSOA_FISICA, AUT.CO_PESSOA_JURIDICA, AUT.CO_PROGRAMA, AUT.CO_PROGRAMA_MODULO, AUT.DT_ACESSO
                        FROM DBCGPAN.TB_FICHA_ACESSO AUT
                        INNER JOIN DBCGPAN.TB_PESSOA_FISICA PF
                               ON (PF.CO_SEQ_PESSOA_FISICA = AUT.CO_PESSOA_FISICA)
                        LEFT JOIN DBCGPAN.TB_PESSOA_JURIDICA PJ
                               ON (PJ.CO_SEQ_PESSOA_JURIDICA = AUT.CO_PESSOA_JURIDICA)
                        LEFT JOIN DBGERAL.TB_TIPO_ENTIDADE TE
                               ON (TE.CO_TIPO_ENTIDADE = PJ.CO_TIPO_ENTIDADE AND ST_REGISTRO_ATIVO = :ST_REGISTRO)
                        INNER JOIN DBCGPAN.TB_ACESSO_PESSOAFISICA APF
                               ON (APF.CO_PESSOA_FISICA = PF.CO_SEQ_PESSOA_FISICA)
                        LEFT JOIN DBCGPAN.TB_GRUPO G
                               ON (G.CO_SEQ_GRUPO = AUT.CO_GRUPO)
                        LEFT JOIN DBGERAL.TB_MUNICIPIO M
                               ON (M.CO_MUNICIPIO_IBGE = AUT.CO_MUNICIPIO_IBGE AND M.ST_REGISTRO_ATIVO = :ST_REGISTRO AND ST_MUNICIPIO = :ST_MUNICIPIO)
                        INNER JOIN DBCGPAN.TB_PROGRAMA P
                               ON (P.CO_SEQ_PROGRAMA = AUT.CO_PROGRAMA AND P.ST_PROGRAMA = :ST_REGISTRO)
                        LEFT JOIN DBCGPAN.TB_PROGRAMA_MODULO PM
                               ON (PM.CO_SEQ_PROGRAMA_MODULO = AUT.CO_PROGRAMA_MODULO AND PM.ST_REGISTRO = :ST_REGISTRO)
                        WHERE
                               AUT.CO_SEQ_FICHA_ACESSO = :CO_FICHA_ACESSO AND AUT.ST_REGISTRO = :ST_REGISTRO";
        $this->params(array(
            'CO_FICHA_ACESSO' => $id,
            'ST_MUNICIPIO' => 'ATIVO',
            'ST_REGISTRO' => 'S'
        ));
        $this->fetchOne(true);            
        return $this->query($sql);
    }

    public function criarArrSessao($arrayDados)
    {
        $arrChaveSessao['autenticado'] = true;
        foreach ($arrayDados as $chave => $dado) {
            $arrChaveSessao[$chave] = $dado;
            if ($chave == 'NO_PESSOA') {
                $arrChaveSessao['NO_PESSOA_MINI'] = $this->primeiroUltimoNome($dado);
            }
        }
        return $arrChaveSessao;
    }

    private function primeiroUltimoNome($nomeCompleto)
    {
        $temp = explode(" ", $nomeCompleto);
        return $temp[0] . " " . $temp[count($temp) - 1];
    }
}