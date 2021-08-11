<?php
include 'config.php';

$tgl = date("y/m/d");
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];

$target_dir = "uploads/";
$target_file = $target_dir . count($_FILES["foto"]["name"][$i]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

for($i=0;$i<$countfiles;$i++){
// 1. Memeriksa apakah file gambar adalah gambar sebenarnya atau gambar palsu
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"][$i]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

// 2. Memeriksa apakah file sudah ada
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

// 3. Memeriksa ukuran file
// if ($_FILES["foto"]["size"] > 1000000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

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
// } else {
  // move_uploaded_file($_FILES["foto"]["tmp_name"][$i], $target_file)
  // if () {
    // echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    // echo "<a href='read.php'>lihat</a>'";
  // } else {
    // echo "Sorry, there was an error uploading your file.";

 // }
  }
   move_uploaded_file($_FILES["foto"]["tmp_name"][$i], $target_file);
}

$query = mysqli_query($config,"INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) VALUES
  ('$tgl','$nik','$isi','$target_file','0')");
if (!$query) {
  echo 'gagal';
}else {
  echo "<script>alert('Pengaduan Berhasil di Buat');window.location.href='index.php'</script>";
}
?>
