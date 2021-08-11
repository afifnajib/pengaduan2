<link rel="stylesheet" type="text/css" href="js/ahNotification.min.js">
<?php
include 'config.php';
session_start();

$tgl = date("y/m/d");
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$no_img = rand(10,999);
// $target_dir = "uploads/";
$total = count($_FILES['name_img']['name']);

// Loop through each file

for( $i=0 ; $i < $total; $i++ ) {
  //Get the temp file path
  $tmpFilePath = $_FILES['name_img']['tmp_name'][$i];

  // Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $check = getimagesize($_FILES["name_img"]["tmp_name"][$i]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
    $newFilePath = "uploads/" . $_FILES['name_img']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
    	$arr = array($newFilePath);
		shuffle($arr);
    $user = $_SESSION['username'];
    $qb = mysqli_query($config,"SELECT nik FROM masyarakat WHERE username='".$user."'");
    while($db = mysqli_fetch_assoc($qb)){
    $dnik = $db['nik'];}
    // mysqli_query($config,"ALTER TABLE uploads_image DISABLE CONSTRAINT <fk_nik_img>");
    mysqli_query($config,"SET foreign_key_checks = 0");
		$query = "INSERT INTO uploads_image (no_img,nik,name_img) VALUES ('$no_img','$dnik','$newFilePath')";
		$qs =mysqli_query($config,$query);
    	if (!$qs) {
			echo 'gagal upload';
		}
  //   else {
  // 			echo "<script>alert('Pengaduan Berhasil di Buat');window.location.href='index.php'</script>";
		// }
    // }else {
    // 	echo 'gagal upload image';
    // }
  }
}
}
$query2= "INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,no_img,status) VALUES ('$tgl',$nik,'$isi','$no_img','0')";
$qs2 =mysqli_query($config,$query2);
if (!$qs2) {
        echo 'gagal';
      }
?>