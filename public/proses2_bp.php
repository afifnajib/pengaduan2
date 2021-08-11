<?php
include 'config.php';

$tgl = date("y/m/d");
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
if(isset($_POST['submit']))
{
    $extension=array('jpeg','jpg','png','gif');
    foreach ($_FILES['image']['tmp_name'] as $key => $value) {
        $filename=$_FILES['image']['name'][$key];
        $filename_tmp=$_FILES['image']['tmp_name'][$key];
        echo '<br>';
        $ext=pathinfo($filename,PATHINFO_EXTENSION);

        $finalimg='';
        if(in_array($ext,$extension))
        {
            if(!file_exists('uploads/'.$filename))
            {
            move_uploaded_file($filename_tmp, 'uploads/'.$filename);
            $finalimg=$filename;
            }else
            {
                 $filename=str_replace('.','-',basename($filename,$ext));
                 $newfilename=$filename.time().".".$ext;
                 if (move_uploaded_file($filename_tmp, 'uploads/'.$newfilename)){
                    $finalimg=$newfilename;
                    $qry=mysqli_query($config,"INSERT INTO uploads_image (image_name,nik) VALUES ('$finalimg','$nik')");
                 }
            }
            // $creattime=date('Y-m-d h:i:s');
            //insert
            $qry2=mysqli_query($config,"INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,status) VALUES ('$tgl','$nik','$isi','0')");

            header('location:index.php');
        }else
        {
            //display error
        }
    }
}
?>