<?php
ob_start();
require('../assets/plugin/fpdf.php');

class PDF extends FPDF {

    function Header () {

    }

    function Footer () {
        $this->SetY(-1.5);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,1, 'Halaman'.$this->PageNo().'/{nb}',0,0,'L');
        // $tanggal=date("D M Y", time());
        // $this->SetFont('Arial', '', 10);
        // $this->Cell(0,1, 'Dicetak tanggal: '.$tanggal,0,0,'R');

    }
} 



$cell=0;
$pdf = new PDF('P', 'cm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->image('../assets/images/sdgs.png',1.5,1.1,2.5);
$pdf->SetFont('Arial','B',18);

$tanggal = date("Y", time());

$pdf->Cell(19,1, ' Data SDGS : TAHUN '. $tanggal, 'T',0,'C');
$pdf->Ln();
$pdf->Cell(19,1,'Sustainable Development Goals','B',0,'C');
$pdf->Ln(1.5);
$pdf->SetFont('Arial','',10);
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("d F Y H:i:s");
include "../config/koneksi.php";

 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,1,'NOMOR KK',1,0);
$pdf->Cell(5,1,'NAMA KK',1,0);
$pdf->Cell(4,1,'ALAMAT DUSUN',1,0);
$pdf->Cell(5,1,' DESA',1,1);
 
$pdf->SetFont('Arial','',10);
$pdf->Ln(0.5);

$mysqli = new mysqli("localhost","root","","sgds_desa");
$no = 1;
$tampil = mysqli_query($mysqli, "select * from form_keluarga");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(5,1,$hasil['no_kk'],1,0);
    $pdf->Cell(5,1,$hasil['nama_kk'],1,0);
    $pdf->Cell(4,1,$hasil['alamat_dusun'],1,0);
    $pdf->Cell(5,1,$hasil['desa'],1,1); 
}

$pdf->Output();

ob_end_flush();
?>

$pdf->Cell(55,5,'Reference Code',1,0);
$pdf->Cell(58,5,' : 025ETY', 1 ,0);
$pdf->Cell(25,5,'Date',1,0);
$pdf->Cell(52,5,': 2018-12-24 11:47:10 AM',1, 1);

$pdf->Cell(55,5,'Amount',1,0);
$pdf->Cell(58,5,' : 2674', 1 ,0);
$pdf->Cell(25,5,'Channel',1,0);
$pdf->Cell(52,5,': WEB',1, 1);

$pdf->Cell(55,5,'Status',1,0);
$pdf->Cell(58,5,' : Complete', 1 ,0);
$pdf->Line(10,30,200,30);



