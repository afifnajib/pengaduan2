<?php
include 'config.php';
$nik = $_GET["nik"];

      $sql = mysqli_query($config,"SELECT foto FROM masyarakat WHERE nik='$nik'");
      $data= mysqli_fetch_array($sql);
      $img = $data['foto'];
      if ($sql) {
        unlink(trim('../public/'.$img));
        $h_query = mysqli_query($config, "DELETE FROM masyarakat WHERE nik='$nik'");
        if ($h_query) {
          echo "<script>alert('Data Berhasil di Hapus');window.location.href='data_masyarakat.php';</script>";
        }else {}
      }else {
        echo "<script>alert('Gambar Gagal di Hapus');window.location.href='data_masyarakat.php';</script>";
      }   

    //periksa query, apakah ada kesalahan
?>