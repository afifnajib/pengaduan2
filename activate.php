<?php
include 'config.php';
// $confirm = base64_decode($_GET['nik']);
if (isset($_GET['email']) && isset($_GET['token'])) {
  $email = $_GET['email'];
  $token = $_GET['token'];
  $query = "SELECT * FROM masyarakat WHERE email='$email' AND token='$token' LIMIT 1";
  $find = mysqli_query($config,$query);

  if ($find && mysqli_num_rows($find) > 0) {
    $update = "UPDATE masyarakat SET verified='approved' WHERE email='$email'";
    $set = mysqli_query ($config,$update);
    if ($set) {
      $uptoken = md5(uniqid(rand(),true));
      $update2="UPDATE masyarakat SET token='$uptoken' WHERE email='$email'";
      $set2=mysqli_query($config,$update2);
      if ($set2) {
       // echo "Konfirmasi sukses";
        echo "<script>alert('Konfirmasi Sukses');window.location.href='login.php'<script>";
      }else {
        echo "Konfirmasi Gagal";
      }
    }
  } else {
    echo "ID tidak dikenali";
  }
} else {
  echo "Nothing to do";
}

?>