<?php
include 'config.php';
$nik = base64_decode($_GET['nik']);
$target_dir = "uploads/users/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(is_array($_FILES)){

    if ($_FILES['foto']['error'] === 0) {
        if ($_FILES['foto']['size'] <= 10000000) { // maksimal ukuran gambar
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) { 
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      } else {

        $ppsql = mysqli_query($config,"SELECT foto FROM masyarakat WHERE nik='$nik'");
        $ppdata = mysqli_fetch_array($ppsql);                  
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
        // var_dump ($gmbr);
            unlink($ppdata['foto']); //menghapus gambar lama

            $ppquery = mysqli_query($config, "UPDATE masyarakat SET foto='$target_file' WHERE nik='$nik'"); // mengupdate data pada table crud

            if ($ppquery) {
                echo "<script>alert('Foto Berhasil di Ubah');window.location='profile.php';</script>";
            }
        }

    }else{
        echo "<script>alert('File Yang Dimasukan Terlalu Besar');window.location='profile.php';</script>";
    }

}else{
    echo "<script>alert('Ada Masalah Saat Upload File');window.location='profile.php';</script>";
}
}

?>