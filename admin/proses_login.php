<?php
    include "config.php";
    session_start();

    $user = $_POST['username'];
    $pass = MD5($_POST['password']);

    $ql = mysqli_query($config,"SELECT * FROM petugas WHERE username='$user' AND password = '$pass'");
    if (mysqli_num_rows($ql) > 0) {
        $data = mysqli_fetch_assoc($ql);
        if($data['level']=='admin'){
        $_SESSION['username'] = $user;
        $_SESSION['level'] = "admin";
         header("location:index.php");
       }else {
           echo "<script>alert('Email Anda Tidak Dapat Mengakses Halaman Admin');window.location.href='login.php';</script>";
       }
    }else {
      echo "<script>alert('Email Atau Password Anda Salah');window.location.href='login.php';</script>";
    }
?>