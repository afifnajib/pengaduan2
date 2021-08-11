<?php
include 'config.php';

$nik = $_GET['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];

$qep = mysqli_query($config,"UPDATE masyarakat SET nama='$nama',alamat='$alamat',email='$email',telp='$telp' WHERE nik='$nik'");

if ($qep) {
    echo "<script>alert('Data Berhasil di Perbarui');window.location='data_masyarakat.php';</script>";  
}
else{
    echo "ERROR, data gagal diupdate";
}
?>