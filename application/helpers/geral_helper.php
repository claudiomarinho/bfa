<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('retornarMes')) {

    function retornarMes()
    {
        $array['1'] = 'JANEIRO';
        $array['2'] = 'FEVEREIRO';
        $array['3'] = 'MARÇO';
        $array['4'] = 'ABRIL';
        $array['5'] = 'MAIO';
        $array['6'] = 'JUNHO';
        $array['7'] = 'JULHO';
        $array['8'] = 'AGOSTO';
        $array['9'] = 'SETEMBRO';
        $array['10'] = 'OUTUBRO';
        $array['11'] = 'NOVEMBRO';
        $array['12'] = 'DEZEMBRO';

        return $array;
    }

}