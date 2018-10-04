<?php

class Login extends MY_Controller
{

    protected $arrAutenticacao;

    public function index()
    {        
        $this->load->library('session');
        if ($this->session->autenticado) {
            redirect('sistema');
        }
        redirect(EGESTOR);
    }

    public function log(){
        $this->load->helper('download');
        $date = date('Y-m-d');
        if($this->uri->segment(3) !== null){
            if(strlen($this->uri->segment(3)) === 10){
                $date = $this->uri->segment(3);
            }
        }
        $data = file_get_contents(APPPATH.'logs/log-'.$date.'.php');
        force_download('log-'.$date.'.php', $data);
    }

    public function logbd(){
        $this->load->helper('download');
        $date = date('Y-m-d');
        if($this->uri->segment(3) !== null){
            if(strlen($this->uri->segment(3)) === 10){
                $date = $this->uri->segment(3);
            }
        }
        $data = file_get_contents(APPPATH.'logs/logbd-'.$date.'.php');
        force_download('logbd-'.$date.'.php', $data);
    }

    public function e(){
        if ($this->uri->segment(3) && $this->uri->segment(4) === 'adm') {
            echo $this->encryptDecrypt('e', $this->uri->segment(3));
        }
    }

    public function validar()
    {
        $id = $this->encryptDecrypt('d', $this->uri->segment(4));
        if ($this->uri->segment(3) == 'token' && $id !== false) {
            $this->load->model('Autenticacao');
            $arrAutenticacao = $this->Autenticacao->consultarFichaAcesso($id);
            if (!$arrAutenticacao) {
                redirect(EGESTORTK);
            } else {
                $this->load->library('session');
                $arrAuth = $this->Autenticacao->criarArrSessao($arrAutenticacao);
                $this->session->set_userdata($arrAuth);
                $this->session->set_userdata(array('TK' => $this->uri->segment(4)));
                $this->load->model('Permissao');
                $permissoes = $this->Permissao->retornarPermissao($this->session->CO_GRUPO, $this->session->CO_PROGRAMA);
                $this->session->set_userdata(array('PERMISSAO' => $permissoes));
                $this->load->model('Tbvigencia');
                $vigencia = $this->Tbvigencia->retornarDatasAberturaEncerramento($this->session->CO_MUNICIPIO_IBGE);
                $this->session->set_userdata(array('NU_VIGENCIA' => $vigencia['NU_VIGENCIA']));
                redirect('principal');
            }
        } else {
            redirect(EGESTOR);
        }
    }

    private function encryptDecrypt($action, $string)
    {
        $key = "NTIDABSISTEMAS16";
        if ($action == 'e') {
            $string = base64_encode(openssl_encrypt($string, "aes-128-ecb", $key, OPENSSL_RAW_DATA));
            return str_replace("+", ".", str_replace("/", "-", str_replace("=", "_",$string)));
        }else{
            $raw = str_replace(".", "+", str_replace("-", "/", str_replace("_", "=", $string)));
            return openssl_decrypt(base64_decode($raw), "aes-128-ecb", $key, OPENSSL_RAW_DATA);
        }
    }
    
    public function sair()
    {
        $this->load->library('session');
        $tk = $this->session->TK;
        $this->session->sess_destroy();
        redirect(EGESTORTK.$tk);
    }

}
