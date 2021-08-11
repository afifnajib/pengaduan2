<?php
require('fpdf.php');
include 'config.php';

class PDF extends FPDF
{

function judul($judul)
{
    $this->SetY(20);
    $this->SetFont('Times','B','16');
    $this->Cell(0,10,$judul,0,1,'C');
    $this->Ln(25);
}
function isi($isi,$isi2,$isi3,$isi4,$isi5)
{
    $this->cell(15);
    $this->SetFont('Times','','13');
    $this->Cell(0,10,$isi,0,1,'L');

    $this->cell(15);
    $this->SetFont('Times','','13');
    $this->Cell(0,10,$isi2,0,1,'L');

    $this->cell(15);
    $this->SetFont('Times','','13');
    $this->Cell(0,10,$isi3,0,1,'L');

    $this->cell(40);
    $this->SetMargins(35,35,35);
    $this->SetFont('Times','','13');
    $this->write(7,$isi4,0,1,'C');

    $this->cell(15);
    $this->SetFont('Times','','13');
    $this->Cell(0,40,$isi5,0,1,'R');
}

function bukti($bukti)
{
    $this->SetY(20);
    $this->cell(5);
    $this->SetFont('Times','','13');
    $this->Cell(0,10,$bukti,0,1,'L');
}

function imageCenterCell($file, $x, $y, $w, $h)
    {
        if (!file_exists($file))
        {
            $this->Error('File does not exist: '.$file);
        }
        else
        {
            list($width, $height) = getimagesize($file);
            $ratio=$width/$height;
            $zoneRatio=$w/$h;

            // Same Ratio, put the image in the cell
            if ($ratio==$zoneRatio)
            {
                $this->Image($file, $x, $y, $w, $h);
            }

            // Image is vertical and cell is horizontal
            if ($ratio<$zoneRatio)
            {
                $neww=$h*$ratio;
                $newx=$x+(($w-$neww)/2);
                $this->Image($file, $newx, $y, $neww);
            }

            // Image is horizontal and cell is vertical
            if ($ratio>$zoneRatio)
            {
                $newh=$w/$ratio;
                $newy=$y+(($h-$newh)/2);
                $this->Image($file, $x, $newy, $w);
            }
        }
    }
}



// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(10.54,10.54,10.54,10.54);
$pdf->SetFont('Times','',12);
$pdf->judul('BUKTI PENGADUAN');

$id_pengaduan = $_GET['id_pengaduan'];
$query = mysqli_query($config,"SELECT nik FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
$d=mysqli_fetch_assoc($query);
$nik=$d['nik'];

$pdf->SetTitle("".$nik."_Export PDF - ".$id_pengaduan."");

$q = mysqli_query($config,"SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan' AND nik='$nik'");
while($row = mysqli_fetch_array($q)){
    $querys = mysqli_query($config,"SELECT nama FROM masyarakat WHERE nik='$nik'");
    $ds=mysqli_fetch_assoc($querys);

    $pdf->isi('Atas Nama : '.$ds['nama']. '','Tanggal Pengaduan : '.$row['tgl_pengaduan'].'','Isi Pengaduan :',''.$row['isi_laporan'].'','Di Verifikasi Oleh : Nama Petugas');
}

$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetMargins(10.54,10.54,10.54,10.54);
$pdf->bukti('Bukti :');


// $pdf->SetFillColor(0,0,0);

// Print a horizontal image in a vertical cell
// $pdf->Rect(10,10,40,50,'F');
$sql = mysqli_query($config,"SELECT no_img FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
$rs=mysqli_fetch_assoc($sql);
$nimg = $rs['no_img'];

$sq = mysqli_query($config,"SELECT * FROM uploads_image WHERE no_img='$nimg'");
while ($rw=mysqli_fetch_array($sq)) {
    // $show= $pdf->imageCenterCell("../".$rw['name_img']."",10,10,40,50);
    $show = $rw['name_img'];
    $image_height = 110;
    $image_width = 110;
    $start_x = $pdf->GetX();
   $start_y = $pdf->GetY();
   $pdf->ImageCenterCell("../".$show, $pdf->GetX(), $pdf->GetY() + 15,
                $image_height, $image_width);
   $pdf->SetXY($start_x, $start_y + $image_height + 15);
    // for($j=1;$j<=mysqli_num_rows($sq);$j++){
    // $pdf->Cell(0,10,'This is line number '.$j,0,1);
    // for( $i=10; $i<=200; $i=$i+10 ) {
    // $pdf->Cell(0, 0, $pdf->Image("../".$show."",1,20,10), $j, 0, 'C', false,'');
    // }
    // $bk = $pdf->Image("../".$show."",60,30,90,0,"");
    // $pdf->Cell(185,10,"../$show",1,1,"C");
    // if (mysqli_num_rows($sq) > 1) {
    //   for($i=1;$i<=1;$i++)
    // $pdf->Cell(0,10,'Printing line number '.$i,0,1);

    // }

}


// Print a vertical image in a horizontal cell
// $pdf->Rect(80,10,100,50,'F');
// $pdf->imageCenterCell("../uploads/02916691c6a8d9bea593e77a9bcb088f302b7321_s2_n2.png",80,10,100,50);
// Print a square image
// $pdf->imageCenterCell("../uploads/02916691c6a8d9bea593e77a9bcb088f302b7321_s2_n2.png",10,20,100,100);
$op = $nik."_ExportPDF-".$id_pengaduan.".pdf";
$pdf->Output($op,'D');
?>
