<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include_once APPPATH.'/third_party/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setTextoInicioFooter($texto)
    {
        $this->textoInicio = $texto;
    }

    public function setTextoFimFooter($texto)
    {
        $this->textoFim = $texto;
    }

    // Page footer
    public function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'BI', 7);
        $this->Cell(0, 6, $this->textoInicio, 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(0, 6, $this->textoFim, 0, false, 'R', 0, '', 0, false, 'T', 'M');
        $this->Ln();
        $this->Cell(0, 6, $this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}