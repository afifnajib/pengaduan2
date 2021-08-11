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

$nik = $_GET['nik'];
// $query = mysqli_query($config,"SELECT status FROM pengaduan WHERE nik='$nik'");
// $d=mysqli_fetch_assoc($query);

$q = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$nik' AND status='2'");
while($row = mysqli_fetch_array($q)){
    $querys = mysqli_query($config,"SELECT nama FROM masyarakat WHERE nik='$nik'");
    $ds=mysqli_fetch_assoc($querys);

    $pdf->AddPage();
    $pdf->SetMargins(10.54,10.54,10.54,10.54);
    $pdf->SetFont('Times','',12);
    $pdf->judul('BUKTI PENGADUAN');

    $pdf->isi('Atas Nama : '.$ds['nama']. '','Tanggal Pengaduan : '.$row['tgl_pengaduan'].'','Isi Pengaduan :',''.$row['isi_laporan'].'','Di Verifikasi Oleh : Nama Petugas');

    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetMargins(10.54,10.54,10.54,10.54);
    $pdf->bukti('Bukti :');

    $qs = mysqli_query($config,"SELECT id_pengaduan,no_img FROM pengaduan WHERE nik='$nik' AND status='2'");
    $rsa=mysqli_fetch_assoc($qs);
    $gm = $rsa['no_img'];
    $idp = $rsa['id_pengaduan'];

    $sqli = mysqli_query($config,"SELECT name_img FROM uploads_image WHERE id_pengaduan='$idp' AND no_img='$gm'");
    while ($rw=mysqli_fetch_array($sqli)) {
        // $show= $pdf->imageCenterCell("../".$rw['name_img']."",10,10,40,50);

        $si = $rw['name_img'];
        $image_height = 110;
        $image_width = 110;
        $start_x = $pdf->GetX();
       $start_y = $pdf->GetY();
       $pdf->ImageCenterCell("../".$si, $pdf->GetX(), $pdf->GetY() + 15,
                    $image_height, $image_width);
       $pdf->SetXY($start_x, $start_y + $image_height + 15);


    }

}

$pdf->SetTitle("".$nik."_Export PDF - All");

$pdf->Output();
?>
