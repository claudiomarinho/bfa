<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('montar_html_menu')) {
    function montar_html_menu($coGrupo, $coPrograma, $coProgramaModulo, $urlAtiva)
    {
        $arrMenuDefault = montar_menu_default($coGrupo, $coPrograma, $coProgramaModulo, $urlAtiva);        
        $html = '';
        foreach ($arrMenuDefault as $linhaMenu) {
            if ($linhaMenu['SUB']) {
                $html .= '<li class="treeview '.$linhaMenu['ATIVO'].'">
                            <a href="'.host_url().$linhaMenu['DS_URL'].'">
                                <i class="'.$linhaMenu['NO_CLASSECSS'].'"></i>
                                <span>'.$linhaMenu['NO_MENU'].'</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>';
                $html .= montar_sub_menu($linhaMenu['SUB']);

                $html .= '</li>';
            } else {
                $html .= '<li class="'.$linhaMenu['ATIVO'].'"><a href="'.host_url().$linhaMenu['DS_URL'].'"><i class="'.$linhaMenu['NO_CLASSECSS'].'"></i> <span>'.$linhaMenu['NO_MENU'].'</span></a></li>';
            }

        }
        return $html;
    }

    function montar_sub_menu($arrSubMenu)
    {
        $html = '<ul class="treeview-menu">';
        foreach ($arrSubMenu as $sub) {
            $html .= '<li class="'.$sub['ATIVO'].'">
                        <a href="'.host_url().$sub['DS_URL'].'" class="treeAdesao">
                            <i class="'.$sub['NO_CLASSECSS'].'"></i>
                            <span>'.$sub['NO_MENU'].'</span>
                        </a>
                    </li>';
        }
        $html .= '</ul>';
        return $html;
    }

    function montar_menu_default($coGrupo, $coPrograma, $coProgramaModulo, $active = '#')
    {
        $CI =& get_instance();
        $CI->load->model('Menu');
        $arrResult = $CI->Menu->retornarMenu($coPrograma, $coProgramaModulo, $coGrupo);
        foreach ($arrResult as $ind => $menu) {
            $arrResult[$ind]['ATIVO'] = ($menu['DS_URL'] == $active) ? 'active' : '';
            $arrResult[$ind]['SUB'] = $CI->Menu->retornarMenu($coPrograma, $coProgramaModulo, $coGrupo, $menu['CO_SEQ_MENU']);
//            $subs = count($arrResult[$ind]['SUB']);
            $subAtivo = 0;
            foreach ($arrResult[$ind]['SUB'] as $subInd => $subMenu) {
                $arrResult[$ind]['SUB'][$subInd]['ATIVO'] = ($subMenu['DS_URL'] == $active) ? 'active' : '';
                if ($subMenu['DS_URL'] == $active) {
                    $arrResult[$ind]['SUB'][$subInd]['ATIVO'] = 'active';
                    $subAtivo++;
                } else {
                    $arrResult[$ind]['SUB'][$subInd]['ATIVO'] = '';
                }
            }
            if ($arrResult[$ind]['ATIVO'] == '' && $subAtivo >= 1) {
                $arrResult[$ind]['ATIVO'] = 'active';
            }
        }
        return $arrResult;
    }

    function montar_menu_permissao($anoComp, $coIbge, $coGrupo, $coMicronutriente)
    {
        $CI =& get_instance();
        $CI->load->model('Permissao');
        if ($coMicronutriente == 3){
            $arrResult = $CI->Permissao->retornarPermissaoNutrisus($anoComp, $coIbge, $coGrupo, $coMicronutriente);
        } else {
            $arrResult = $CI->Permissao->retornarPermissao($anoComp, $coIbge, $coGrupo, $coMicronutriente);
        }

        return $arrResult;
    }

}