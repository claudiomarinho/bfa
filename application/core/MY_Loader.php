<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    
    private $tituloPag = 'Bolsa Família';
    private $tituloSistema = 'Bolsa Família';
    private $tituloSistemaMini = 'BFA';

    /**
     * @param mixed $tituloPag
     */
    public function setTituloPag($tituloPag)
    {
        $this->tituloPag = $tituloPag;
    }

    /**
     * @param mixed $tituloSistema
     */
    public function setTituloSistema($tituloSistema)
    {
        $this->tituloSistema = $tituloSistema;
    }

    /**
     * @param mixed $tituloSistemaMini
     */
    public function setTituloSistemaMini($tituloSistemaMini)
    {
        $this->tituloSistemaMini = $tituloSistemaMini;
    }

    public function template($template_name, $vars = array(), $return = false)
    {
        $CI =& get_instance();
        $CI->load->helper('menu');
        $CI->load->helper('public');
        $CI->load->library("Validarbrowser");
        $CI->load->library('session');
        $vars['title'] = $this->tituloPag;
        $vars['title_system'] = $this->tituloSistema;
        $vars['title_system_mini'] = $this->tituloSistemaMini;
        if (!isset($CI->session->userdata['DS_GRUPO'])) {
            $vars['perfil'] = true;
            error_reporting(0);
        } else {
            $vars['perfil'] = false;
        }
        if (!Validarbrowser::validar()) {
            $url = Validarbrowser::getUrlUpdate();
            if (Validarbrowser::$browser == 'MSIE') {
                error_reporting(0);
            }
            $vars['title'] = $this->tituloSistema.' - Navegador desatualizado!';
            $this->view('layout/cabecalho', $vars);
            $this->view('sistema/pages/navegador', array('url' => $url));
            $this->view('layout/rodape', $vars, $return);
            $this->view('layout/sidebar_config', $vars, $return);
            $this->view('layout/final_addjs', $vars, $return);
        } else {
            $this->view('layout/cabecalho', $vars, $return);
            $this->view('layout/menu', $vars, $return);
            $this->view('layout/breadcrumb', $vars, $return);
            $this->view($template_name, $vars, $return);
            $this->view('layout/rodape', $vars, $return);
            $this->view('layout/sidebar_config', $vars, $return);
            $this->view('layout/final_addjs', $vars, $return);
        }

    }

    public function templateRelatorio($template_name, $vars = array(), $return = false)
    {
        $CI =& get_instance();
        $CI->load->helper('menu');
        $CI->load->helper('public');
        $CI->load->library("Validarbrowser");
        $CI->load->library('session');
        $vars['title'] = $this->tituloPag;
        $vars['title_system'] = $this->tituloSistema;
        $vars['title_system_mini'] = $this->tituloSistemaMini;
        if (!isset($CI->session->userdata['DS_GRUPO'])) {
            $vars['perfil'] = true;
            error_reporting(0);
        } else {
            $vars['perfil'] = false;
        }
        if (!Validarbrowser::validar()) {
            $url = Validarbrowser::getUrlUpdate();
            if (Validarbrowser::$browser == 'MSIE') {
                error_reporting(0);
            }
            $vars['title'] = $this->tituloSistema.' - Navegador desatualizado!';
            $this->view('layout/cabecalho', $vars);
            $this->view('sistema/pages/navegador', array('url' => $url));
            $this->view('layout/rodape', $vars, $return);
            $this->view('layout/sidebar_config', $vars, $return);
            $this->view('layout/final_addjs', $vars, $return);
        } else {
            $this->view('layoutRelatorio/cabecalho', $vars, $return);
//            $this->view('layout/menu', $vars, $return);
            $this->view('layout/breadcrumb', $vars, $return);
            $this->view($template_name, $vars, $return);
            $this->view('layout/rodape', $vars, $return);
            $this->view('layoutRelatorio/final_addjs', $vars, $return);
        }
    }

    public function templateMapa($template_name, $vars = array(), $return = false)
    {
        $CI =& get_instance();
        $CI->load->helper('menu');
        $CI->load->helper('public');
        $CI->load->library("Validarbrowser");
        $CI->load->library('session');
        $vars['title'] = $this->tituloPag;
        $vars['title_system'] = $this->tituloSistema;
        $vars['title_system_mini'] = $this->tituloSistemaMini;
        if (!isset($CI->session->userdata['DS_GRUPO'])) {
            $vars['perfil'] = true;
            error_reporting(0);
        } else {
            $vars['perfil'] = false;
        }
        if (!Validarbrowser::validar()) {
            $url = Validarbrowser::getUrlUpdate();
            if (Validarbrowser::$browser == 'MSIE') {
                error_reporting(0);
            }
            $vars['title'] = $this->tituloSistema.' - Navegador desatualizado!';
            $this->view('layout/cabecalho', $vars);
            $this->view('sistema/pages/navegador', array('url' => $url));
            $this->view('layout/rodape', $vars, $return);
            $this->view('layout/sidebar_config', $vars, $return);
            $this->view('layout/final_addjs', $vars, $return);
        } else {
            $this->view('layoutMapa/cabecalho', $vars, $return);
//            $this->view('layout/menu', $vars, $return);
            $this->view('layout/breadcrumb', $vars, $return);
            $this->view($template_name, $vars, $return);
            $this->view('layout/rodape', $vars, $return);
            $this->view('layout/sidebar_config', $vars, $return);
            $this->view('layoutMapa/final_addjs', $vars, $return);
        }
    }
}