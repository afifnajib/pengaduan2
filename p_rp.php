<?php
include 'koneksi.php';

$email = $_GET['email'];
$password = $_GET['password'];

$qep = mysqli_query($koneksi,"UPDATE masyarakat SET password='$password' WHERE email='$email'");

if ($qep) {
	echo "<script>alert('Password Berhasil di Perbarui');window.location='login.php';</script>";	
}
else{
	echo "<script>alert('Password Gagal di Perbarui');window.location='forgot_password.php';</script>";
}
?>