<?php 
include 'config.php';
session_start();
$user = $_SESSION['username'];

      $sql = mysqli_query($config,"SELECT foto FROM petugas WHERE username='".$user."'");
      $du= mysqli_fetch_array($sql);
      $img = $du['foto'];
      unlink(trim($img)); //menghapus gambar lama
      $query = mysqli_query($config, "DELETE FROM petugas WHERE username='".$user."'");

    if(!$du) {
      die ("Gagal menghapus data: ".mysqli_errno($config).
       " - ".mysqli_error($config));
    } else {
      echo "<meta http-equiv='refresh' content='1 url=logout.php'>";
    }
?>
