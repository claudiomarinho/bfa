<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class MY_Controller
 */
class MY_Controller extends CI_Controller
{

    protected $_pastaView;
    protected $_view;
    protected $_data;
    protected $_pastaAdesao;
    protected $_stDsei;

    public function __construct()
    {
        parent::__construct();
        $this->load->setTituloSistema('Bolsa Família');
        $this->load->setTituloSistemaMini('BFA');
        $this->load->helper('public');
    }

    /**
     * Método para mostrar um JSON na tela,
     *
     * @param array $arr array que virará JSON
     * @return view
     */
    protected function toJson($arr = array(), $display = false, $codeResponse = 200)
    {
        if ($arr === true || $arr === false) {
            $status = $arr;
            $arr = array();
            $arr['status'] = $status;
        }
        if ($display) {
            $this->output
                ->set_content_type('application/json', 'utf-8')
                ->set_header('X-Accel-Buffering: no')  //tirando o buffer do NGINX
                ->set_status_header($codeResponse)
                ->set_output(json_encode($arr))->_display();
        } else {
            $this->output
                ->set_content_type('application/json', 'utf-8')
                ->set_header('X-Accel-Buffering: no') //tirando o buffer do NGINX
                ->set_status_header($codeResponse)
                ->set_output(json_encode($arr));
        }

    }

    /**
     * Verifica se o usuário logou no sistema, verificando se esta autenticado
     *
     * @param null $msg Mensagem caso não autenticado
     * @return redireciona para a tela de login se não estiver autenticado levando a mensagem no flashdata
     */
    protected function verificarSessaoAtiva($tipo = 'html', $msg = null)
    {
        $this->load->library('session');
        $this->load->library('Mensageiro');
        $this->load->library('Validarbrowser');
        $msgView = ($msg === null) ? Mensageiro::$MSG_E003 : $msg;
        if ($tipo == 'json' && !$this->session->autenticado) {
            $this->toJson(array('status' => 'session', 'msg' => $msgView, 'url' => 'login'), true, 401);
            exit;
        }
        if ($tipo == 'html' && !$this->session->autenticado) {
            $this->session->set_flashdata('MSG_RETORNO', $msgView);
            redirect(EGESTORLOGIN);
        }
        $this->verficarAcesso($tipo);
    }

    public function verficarAcesso($tipo = 'html')
    {
        $msgRotaHtml = $this->router->class . "/" . $this->router->method;
        if ($tipo == 'html' && !$this->verificarUrlAcesso()) {
            $this->session->set_flashdata('MSG_RETORNO', Mensageiro::GetError('003', array($msgRotaHtml)));
            redirect('principal');
        }
        if ($tipo == 'json' && !$this->verificarUrlAcesso()) {
            $this->toJson(array('status' => 'permissao', 'msg' => Mensageiro::GetError('003', array($msgRotaHtml)), 'url' => 'principal'), true, 401);
            exit;
        }
    }

    private function verificarUrlAcesso()
    {

        $permissoes = $this->session->PERMISSAO;
        $permissao = false;
        if($permissoes){
            foreach ($permissoes as $i => $perm) {
                if (strtolower($perm['DS_CONTROLADOR']) === strtolower($this->router->class) && $perm['DS_ACAO'] === $this->router->method && $perm['ST_VISUALIZAR'] === 'S') {
                    $permissao = true;
                }
            }
        }
        return $permissao;
    }

    protected function verificarPermissao($tipoPermissao = 'INSERIR')
    {
        $permissoes = $this->session->PERMISSAO;
        $permissao = false;
        foreach ($permissoes as $i => $per) {
            if ($per['ST_' . $tipoPermissao] === 'S') {
                $permissao = true;
            }
        }
        return $permissao;
    }

    public function verificarPrazo($returnMsg = true)
    {
        $this->verificarSessaoAtiva();
        $this->load->model('Tbvigencia');
        $arrPrazo = $this->Tbvigencia->retornarDatasAberturaEncerramento($this->session->userdata('CO_MUNICIPIO_IBGE'));
        $dtAtual = new DateTime(date("Y-m-d H:i:s"));
        $dtInicio = new DateTime($arrPrazo['DT_ABERTURA']);
        $dtFim = new DateTime($arrPrazo['DT_ENCERRAMENTO']);
        $dtFim->setTime(23, 59, 59);

        if ($dtAtual < $dtInicio && $returnMsg === true) {
            $this->session->set_flashdata('MSG_RETORNO', 'A vigencia ' . $arrPrazo['NU_VIGENCIA'] . ' ainda não foi iniciada!');
            $this->session->set_flashdata('URL_RETORNO', 'principal');
        } else if ($dtAtual > $dtFim && $returnMsg === true) {
            $this->session->set_flashdata('MSG_RETORNO', Mensageiro::GetAlert('003', array($arrPrazo['NU_VIGENCIA'], $dtFim->format('d/m/Y') . ' às ' . $dtFim->format('H:i:s'))));
            $this->session->set_flashdata('URL_RETORNO', 'principal');
        }
        if ($dtAtual >= $dtInicio && $dtAtual <= $dtFim && $returnMsg == false) {
            return true;
        } else {
            return false;
        }
    }


    public function saida($json = true)
    {
        $this->load->library('session');
        if ($json) {
            echo $this->toJson(array('status' => true));
        } else {
            return true;
        }
    }

    public function msgAlertParamentrosUrl($pag, $parametro = null, $msg = '002')
    {
        $this->load->library('session');
        $this->load->library('Mensageiro');
        $msg = Mensageiro::GetAlert($msg, array($pag, $parametro));
        $this->session->set_flashdata('MSG_RETORNO', $msg);
    }


    protected function postJson($tipoRetornoArray = true)
    {
        $postdata = file_get_contents("php://input");
        $retorno = $this->transformarJson($postdata, $tipoRetornoArray);
        return $retorno;
    }

    private function transformarJson($postdata, $tipoRetornoArray)
    {
        $retorno = json_decode($postdata, $tipoRetornoArray);
        $arrConvertido = array();
        if (count($retorno) > 1) {
            foreach ($retorno as $ind => $val) {
                if (is_array($val)) {
                    foreach ($val as $i => $v) {
                        $varName = isset($val['name']);
                        $varValue = isset($val['value']);
                        if (!$varName && !$varValue) {
                            $arrConvertido[$ind][$i] = $v;
                        } else {
                            $arrConvertido[$ind][$v['name']] = $v['value'];
                        }
                    }
                } else {
                    $subVal = json_decode($val, $tipoRetornoArray);
                    if ($subVal !== null && is_array($subVal)) {
                        foreach ($subVal as $i => $v) {
                            if (!isset($v['name']) && !isset($v['value'])) {
                                $arrConvertido[$ind][$i] = $v;
                            } else {
                                $arrConvertido[$ind][$v['name']] = $v['value'];
                            }
                        }
                    } else {
                        $arrConvertido[$ind] = $val;
                    }
                }
            }
        } else {
            $arrConvertido = $retorno;
        }

        return $arrConvertido;
    }

}