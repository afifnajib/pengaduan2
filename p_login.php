<?php
    include "config.php";
    session_start();

    $user = $_POST['username'];
    $pass = MD5($_POST['password']);

    $q = mysqli_query($config, "SELECT * FROM petugas WHERE username='$user' and password='$pass'");
if (mysqli_num_rows($q) > 0) {
    $data = mysqli_fetch_assoc($q);
    if($data['level']=='petugas' && $data['verified']=='approved'){
        $_SESSION['username'] = $user;
        $_SESSION['level'] = "petugas";
        header("location:officer/index.php");
    }else {
     echo "<script>alert('Username atau Password salah');window.location.href='login.php';</script>";
 }
}

$ql = mysqli_query($config, "SELECT * FROM masyarakat WHERE username='$user' and password='$pass'");
    if (mysqli_num_rows($ql) > 0) {
        $dt = mysqli_fetch_assoc($ql);
        if($dt['verified']=='approved'){
            $_SESSION['username'] = $user;
            header("location:public/index.php");
        }else {
        echo "<script>alert('Akun Anda Belum Aktif, Silahkan Lihat Panduan Berikut Tentang Mengaktifkan Akun');window.location.href='panduan.php';</script>";
        }
    }

echo "<script>alert('Username / Password Anda Salah');window.location.href='login.php';</script>";
?>