<?php session_start(); include 'config.php' ?>
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
    <link rel="stylesheet" type="text/css" href="css/icons/font-awesome/css/fontawesome-all.min.css">
</head>
<style type="text/css">
    .form-file {
    margin-bottom: 20px; }
.inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1; }

.inputfile + label {
  text-transform: uppercase; }

.inputfile + label {
  max-width: 100%;
  font-size: 14px;
  font-weight: bold;
  text-overflow: ellipsis;
  white-space: nowrap;
  cursor: pointer;
  display: inline-block;
  overflow: hidden;
  text-align: center; }

.inputfile + label figure {
  width: 154px;
  height: 154px;
  border-radius: 50%;
  background-color: transparent;
  display: block;
  margin: 0 auto;
  margin-bottom: 6px; }

.inputfile + label figure img {
  width: 100%;
  height: 100%;
  border-radius: 50%; }
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
                    <h3 class="page-title mb-0 p-0">Profile</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body profile-card">
                            <?php
                            $puser = $_SESSION['username'];
                            $psql = mysqli_query($config,"SELECT * FROM masyarakat WHERE username='".$puser."'");
                            while($prow = mysqli_fetch_array($psql)){
                                ?>
                                <center class="m-t-30">
                                    <div class="dropdown">
                                      <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php 
                                            if ($prow['foto']=='uploads/users/') {
                                                echo "<img src='uploads/users/default_user.png' alt='user' class='rounded-circle' width='150' height='150'>";
                                            }else {
                                                echo "<img src='$prow[foto]' class='rounded-circle' width='150' height='150' />";
                                            }
                                         ?>
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <?php 
                                            if ($prow['foto']=='uploads/users/') {
                                                echo "<a class='dropdown-item text-center' target='_blank' href='uploads/users/default_user.png'>Lihat Foto</a>";
                                            }else {
                                                echo "<a class='dropdown-item text-center' target='_blank' href='$prow[foto]'>Lihat Foto</a>";
                                            }
                                        ?>
                                        <button class="btn dropdown-item text-center" data-toggle="modal" title="Ubah Foto" data-target="#myM<?php echo $prow['nik']; ?>"> Ubah Foto
                                        </button>
                                    </div>
                                </div>
                                <h4 class="card-title m-t-10"><?php echo $prow['nama']; ?></h4>
                                <h6 class="card-subtitle"><?php echo $prow['email']; ?></h6>
                            </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pribadi</h4>
                        <div class="text-left">
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Nomor Induk Keluarga</th>
                                                <th class="border-top-0">:</th>
                                                <th class="border-top-0"><?php echo $prow['nik']; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="border-top-0">Nama Lengkap</th>
                                                <th class="border-top-0">:</th>
                                                <th class="border-top-0"><?php echo $prow['nama']; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="border-top-0">Alamat Lengkap</th>
                                                <th class="border-top-0">:</th>
                                                <th class="border-top-0"><?php echo $prow['alamat']; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="border-top-0">E-mail</th>
                                                <th class="border-top-0">:</th>
                                                <th class="border-top-0"><?php echo $prow['email']; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="border-top-0">Nomor Handphone/WA</th>
                                                <th class="border-top-0">:</th>
                                                <th class="border-top-0"><?php echo $prow['telp']; ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <?php include 'p_profile.php'; ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
</div>
</div>

<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/app-style-switcher.js"></script>
<script src="js/waves.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/custom.js"></script>
<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
<script type="text/javascript">
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#your_picture_image')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>