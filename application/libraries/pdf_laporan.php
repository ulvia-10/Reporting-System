<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf_laporan extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }



    //Page header
    public function Header() {
        // Logo
        $image_file = './assets/images/bakesbangpol.png';
        $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        
        // Title
        $this->Ln(3, true);
        $this->setCellMargins(13, 0, 0, 0);
        $this->SetFont('times', 'B', 11);
        $this->Cell(60, 8, 'UNIVERSITAS JEMBER', 0, 2, 'L', 0, '', 0, false, 'M', 'M');

        $this->SetFont('times', '', 8);
        $this->Cell(0, 6, 'Jl. Kalimantan No.37 - Kampus Bumi Tegalboto Kotak Pos 159 Jember', 0, 2, 'L', 0, '', 0, false, 'M', 'M');
        $this->Cell(0, 6, 'Telp. (0331) 330224, 333147, 334267 Fax: (0331) 339029, 337422', 0, 2, 'L', 0, '', 0, false, 'M', 'M');
        $this->Cell(0, 5, 'Laman : www.unej.ac.id', 0, 2, 'L', 0, '', 0, false, 'M', 'M');
        // $this->Cell(0, 8, 'Laman : www.unej.ac.id', 0, false, 'L', 0, '', 0, false, 'M', 'M');

        
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $date = date('d/m/Y');
        $this->Cell(0, 10, 'Laporan Perpustakaan Universitas Jember | '.$date, 0, 0, 'L');
        
        $this->Cell(0, 10, 'Halaman '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 0, 'R');
        // $this->Cell(0, 10, 'Laporan Perpustakaan Universitas Negeri Jember Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */