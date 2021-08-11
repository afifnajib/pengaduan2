<?php
require('fpdf.php');

class PDF extends FPDF
{
function logo($img){
    $this->Image($img, 3,3,25,25);
}
function judul($teks1,$teks2,$teks3,$teks4,$teks5)
{
    $this->cell(72);
    $this->SetFont('Times','B',16);
    $this->cell(1,5,$teks1,0,1,'C');

    $this->cell(72);
    $this->SetFont('Times','B',16);
    $this->cell(1,5,$teks2,0,1,'C');

    $this->cell(79);
    $this->SetFont('Times','B',14);
    $this->cell(1,5,$teks3,0,1,'C');

    $this->cell(72);
    $this->SetFont('Times','B',14);
    $this->cell(1,5,$teks4,0,1,'C');

    $this->cell(72,1);
    $this->SetFont('Times','B',10);
    $this->cell(1,5,$teks5,0,1,'C');
}
function garis(){
    $this->SetLineWidth(1);
    $this->Line(10,36,140,36);
    $this->SetLineWidth(0);
    $this->Line(10,37,140,37);
}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A5');
$pdf->SetMargins(2.54,2.54,2.54,2.54);
$pdf->SetFont('Times','',12);

$pdf->logo('kop-surat.png');
$pdf->judul('PEMERINTAH KABUPATEN LANGKAT','DINAS PENDIDIKAN','S D  N E G E R I  N O . 0 5 0 5 8 8  S E L E S A I','K E C A M A T A N  S E L E S A I','Alamat : Jln. Mesjid no. 20 Kode Pos  : 20762');
$pdf->garis();
// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>