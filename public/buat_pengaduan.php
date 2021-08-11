<?php session_start();include 'config.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monster Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/all.css">

<link href="assets/plugins/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
 --></head>
 <style type="text/css">
     .br1 {
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
     }
     .br2 {
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
     }
     .file-caption {
        height: 38px !important;
     }
     .file-caption-icon {
        margin-top: 2px !important;
     }
     .file-caption-name {
        margin-top: 2.5px !important;
     }
     .close {
        margin-top: 5px !important;
    margin-right: 7px !important;
     }
     .fileinput-upload-button {
        display: none;
     }
 </style>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <?php 
    include 'components/header.php';
    include 'components/sidebar.php';
    ?>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Pengaduan</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buat Pengaduan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body m-t-30">
                            <form action="proses_bp.php" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Tanggal Pengaduan</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" 
                                        value="<?php echo date('d/m/yy') ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">NIK</label>
                                    <div class="col-md-12">
                                        <?php
                            $user = $_SESSION['username'];
                            $qb = mysqli_query($config,"SELECT nik FROM masyarakat WHERE username='".$user."'");
                            while($db = mysqli_fetch_assoc($qb)){
                                ?>
                                        <input type="text" name="nik" value="<?php echo $db['nik']; ?>" placeholder="Nomor Induk Keluarga" class="form-control" readonly>
                                    
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Pesan Pengaduan</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" name="isi_laporan" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- <div id="myId" name="foto" class="form-group dropzone fallback"> -->
                                    <label for="example-email" class="col-md-12">Gambar</label>
                                    <input id="image_name" name="name_img[]" accept=".jpg,.png,.jpeg" type="file" multiple="multiple">
                                    <!-- <div class="custom-file" style="line-height: 4rem;">
                                        <input type="file" accept=".jpg,.png,.jpeg" name="foto[]" multiple="multiple" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label form-control col-md-12" for="customFile">Pilih Gambar</label>
                                    </div> -->
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Buat Pengaduan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
</div>
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/waves.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/custom.js"></script>
<!-- <script src="assets/plugins/fileinput/piexif.min.js" type="text/javascript"></script>
<script src="assets/plugins/fileinput/sortable.min.js" type="text/javascript"></script> -->
<script src="assets/plugins/fileinput/js/fileinput.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/locales/LANG.js"></script>
 -->
<!-- <script src="https://kit.fontawesome.com/4927647965.js" crossorigin="anonymous"></script> -->
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $("#image_name").fileinput({showCaption: true, dropZoneEnabled: false});
});
</script>