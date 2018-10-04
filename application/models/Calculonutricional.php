<?php


class Calculonutricional extends MY_Model
{
    public function calculoNutri($cotipoCalculo, $dsSexo, $qtDias, $dsAltura, $dsPeso, $dsImc, $nuSemGest)
    {
        $sql = "SELECT DBSISVAN.FC_CALCULO_ESTADO_NUTRICIONAL (:COTIPOCALCULO, :SEXO, :QTDIAS, :ALTURA, :PESO, :IMC, :NUSEMAGEST) AS CO_ESTADO_NUTRI FROM DUAL";

        $this->params(array(
            'COTIPOCALCULO' => $cotipoCalculo,
            'SEXO' => $dsSexo,
            'QTDIAS' => $qtDias,
            'ALTURA' => $dsAltura,
            'PESO' => $dsPeso,
            'IMC' => $dsImc,
            'NUSEMAGEST' => $nuSemGest
        ));
        $this->fetchOne(true);

        return $this->query($sql);
    }

    public function getCalculoNutricionalIdoso($dsImc)
    {

        if ($dsImc < 22) {
            $coEstadoNutriIdoso = 1;

        } elseif (($dsImc >= 22) && ($dsImc <= 27)) {
            $coEstadoNutriIdoso = 2;

        } elseif ($dsImc > 27) {
            $coEstadoNutriIdoso = 4;

        }

        return $coEstadoNutriIdoso;
    }

    public function getCalculoNutriAdulto($dsImc)
    {

        if ($dsImc < 18.5) {
            $coEstadoNutriAdulto = 1;

        } elseif (($dsImc >= 18.5) && ($dsImc < 25)) {
            $coEstadoNutriAdulto = 2;

        } elseif (($dsImc >= 25) && ($dsImc < 30)) {
            $coEstadoNutriAdulto = 3;

        } elseif ($dsImc >= 30) {
            $coEstadoNutriAdulto = 4;

        }

        return $coEstadoNutriAdulto;

    }

}