<?php
include 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'assets/bat/PHPMailer-6.3.0/src/PHPMailer.php';
require_once 'assets/bat/PHPMailer-6.3.0/src/Exception.php';
require_once 'assets/bat/PHPMailer-6.3.0/src/SMTP.php';


$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
// $token = bin2hex(random_bytes(50));
$token = md5(uniqid(rand(),true));

$sql = "SELECT * FROM masyarakat WHERE email='$email' AND username='$username'";
$find = mysqli_query($config, $sql);
  if (mysqli_num_rows($find) > 0) {
    $aexist = mysqli_fetch_assoc($find);
      if ($email == isset($aexist['email'])) {
        echo "<script>alert('Email already exists');window.location.href='register.php';</script>";
      }elseif($username == isset($aexist['username'])){
        echo "<script>alert('Email already exists');window.location.href='register.php';</script>";
      }
   }
   if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["foto"]["tmp_name"]);
      if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
// if(isset($_POST['submit'])){}

    $target_dir = "public/uploads/users/";
    $target_dir2 = "uploads/users/";
    // $nama_foto = basename($_FILES["foto"]["name"]);
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $target_file2 = $target_dir2 . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // 1. Memeriksa apakah file gambar adalah gambar sebenarnya atau gambar palsu
    // if(isset($_POST["submit"])) {
    //   $check = getimagesize($_FILES["foto"]["tmp_name"]);
    //   if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    //   } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    //   }
    // }

    // 2. Memeriksa apakah file sudah ada
    if (file_exists($target_file2)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // 3. Memeriksa ukuran file
    if ($_FILES["foto"]["size"] > 1000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // 4. Izinkan format file tertentu
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //   $uploadOk = 0;
    // }

    // 5. Periksa apakah $uploadOk diatur ke 0 karena kesalahan
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // Jika semua ok, mencoba untuk upload file
    } else {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        // header("location:data_petugas.php");
        // echo "<script>window.location='login.php'</script>";
        echo " ";
      }
      else {
        echo "Sorry, there was an error uploading your file.";
      }
     $query = mysqli_query($config,"INSERT INTO masyarakat (nik,nama,alamat,email,telp,username,password,foto,verified,token) VALUES ('$nik','$nama','$alamat','$email','$telp','$username','$password','$target_file2','pending','$token')");
     if ($query) {
            // echo "<script>window.location.href='login.php';</script>";
          }else {
            echo 'gagal' .mysqli_connect_error();
          }

   // $message  = strip_tags($_POST['message']);
    try
      {
        $mail = new PHPMailer();
        $email      = strip_tags($_POST['email']);
        $template_file = "e-template/index.php";
        $template_confirm_file = "t-confirm/index.php";
        $subject    = 'Aktivasi PengaduanWeb';
  // $text_message    = "Hello";
 // $message = "MIME-Version: 1.0\r\n";
 //  $message .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 // $message = '<html><head><title>Email Verification</title></head>';
        $swap_var = array(
          "{SITE_ADDR}" => "http://localhost/pengaduan2/activate.php?email=$email&token=$token",
          "{NAMA}" => "$nama",
          "{EMAIL}" => "$email",
    // "{EMAIL_LOGO}" => "https://www.heytuts.com/images/logo_emailer.png",
    // "{EMAIL_TITLE}" => "Send custom HTML emails with a PHP script!",
          "{IMAGE-1}" => "https://ghcdn.rawgit.org/afifnajib/img-blogger/main/image/image-1.png",
          "{IMAGE-2}" => "https://ghcdn.rawgit.org/afifnajib/img-blogger/main/image/image-2.png",
    // "{IMAGE-3}" => "e-template/images/image-3.png",
    // "{IMAGE-4}" => "e-template/images/image-4.png",
    // "{IMAGE-5}" => "e-template/images/image-5.png",
    // "{IMAGE-6}" => "e-template/images/image-6.png",
    // "{IMAGE-7}" => "e-template/images/image-7.png",
    // "{TO_NAME}" => "THEIR_NAME",
    // "{TO_EMAIL}" => "this_person@their_website.com"
  );
 if (file_exists($template_file)){
    $email_message = file_get_contents($template_file);}
  else{
    die ("Unable to locate your template file");}

  foreach (array_keys($swap_var) as $key){
    if (strlen($key) > 2 && trim($swap_var[$key]) != ''){
      $email_message = str_replace($key, $swap_var[$key], $email_message);}
  }
  echo "<script>window.location.href='t-confirm/index.php'</script>";
 // $body = file_get_contents("e-template/index.php");
 // $message .= '<body>'
 // $message .= '<h1>Hi ' . $nama . '!</h1>';
 // $message .= '<p><a href="http://localhost/pengaduan2/activate.php?email='.$email.'&token='.$token.' style=''">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
 // $message .= "</body></html>";


        $mail->IsSMTP();
        $mail->isHTML(true);
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port        = '465';
        $mail->AddAddress($email);
        $mail->Username   ="afifnajib1234@gmail.com";
        $mail->Password   ="Apul2612";
        $mail->SetFrom('afifnajib1234@gmail.com','Afif Najib');
        $mail->AddReplyTo("afifnajib1234@gmail.com","Afif Najib");
        $mail->Subject    = $subject;
        $mail->Body    = $email_message;
        $mail->AltBody    = $email_message;

        if($mail->Send())
        {
         $msg = "Hi, Your mail successfully sent to".$email." ";
       }
     }
     catch(phpmailerException $ex)
     {
      $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
    }
  }
}
?>
