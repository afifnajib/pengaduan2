<?php 
  include 'config.php';
  // use PHPMailer\PHPMailer\PHPMailer;
  // use PHPMailer\PHPMailer\Exception;
  // require_once 'assets/bat/PHPMailer-6.3.0/src/PHPMailer.php';
  // require_once 'assets/bat/PHPMailer-6.3.0/src/Exception.php';
  // require_once 'assets/bat/PHPMailer-6.3.0/src/SMTP.php';

  // session_start();

  $nik = "";
  $email = "";
  if (isset($_POST['fp_btn'])) {
    $nik = $_POST['nik'];
    $email = $_POST['email'];

    $sql_u = "SELECT * FROM masyarakat WHERE nik='$nik'";
    $sql_e = "SELECT * FROM masyarakat WHERE email='$email'";
    $res_u = mysqli_query($config, $sql_u);
    $res_e = mysqli_query($config, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      $nik_error = "Sorry... nik already taken";  
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken";  
    }else{
           // $query = "INSERT INTO users (username, email, password) 
           //      VALUES ('$username', '$email')";
           // $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit();
    }
  }
?>