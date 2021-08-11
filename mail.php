require_once 'assets/bat/PHPMailer-master/PHPMailer.php';
require_once 'assets/bat/PHPMailer-master/Exception.php';

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
//ganti dengan email dan password yang akan di gunakan sebagai email pengirim
$mail->Username = 'afifnajib1234@gmail.com';
$mail->Password = 'Apul2612';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
//ganti dengan email yg akan di gunakan sebagai email pengirim
$mail->setFrom(afifnajib1234@gmail.com','Afif Najib');
$mail->addAddress($_POST['mail'], $_POST['nama']);
$mail->isHTML(true);
$email      = strip_tags($_POST['email']);
$subject    = 'Activate';
$message = '<html><head>
<title>Email Verification</title>
</head>
<body>';
$message .= '<h1>Hi ' . $nama . '!</h1>';
$message .= '<p><a href="http://localhost/perpustakaan/activate.php?f64609172efea86a5a6fbae12ab86d33=' . base64_encode($nik) . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
$message .= "</body></html>";      
      $message  = strip_tags($_POST['message']);
$mail->send();
echo 'Message has been sent';