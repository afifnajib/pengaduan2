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
</head>
<style type="text/css">
.accordion-collapse{
    margin: 20px;
}
.accordion .fa{
    margin-right: 0.5rem;
    font-size: 24px;
    font-weight: bold;
    position: relative;
    top: 2px;
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
                                <li class="breadcrumb-item active" aria-current="page">History Pengaduan</li>
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
                            <div class="accordion-collapse">
                                <?php
                                    $huser = $_SESSION['username'];
                                    $hsql = mysqli_query($config,"SELECT * FROM masyarakat WHERE username='".$huser."'");
                                    while($hrow = mysqli_fetch_array($hsql)){
                                        $hnik = $hrow['nik'];
                                        $hsqla = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$hnik' ");
                                        $hld = mysqli_num_rows($hsqla);
                                        echo "<h3 class='font-light m-b-0'>Jumlah Pengaduan Anda : $hld</h3>";
                                    }
                                    ?>
                                    <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header bg-success" id="headingOne">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-success btn-block text-left text-white waves-effect waves-dark

                                                " data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-angle-right"></i> Pengaduan (Selesai)</button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4 class="card-title">Tabel Pengaduan (Selesai)</h4>
                                                <!-- <a href="export/export-all-pdf.php?nik=<?php echo $hnik;?>" class="btn btn-success" target="_blank"><i class="fa fa-download fa-sm"></i> Download Semua Ke PDF</a> -->
                                                <div class="table-responsive">
                                                    <table class="table user-table no-wrap">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">#</th>
                                                                <th class="border-top-0">Tgl Pengaduan</th>
                                                                <th class="border-top-0">Isi Laporan</th>
                                                                <th class="border-top-0">Bukti (Foto)</th>
                                                                <th class="border-top-0">Tgl Tanggapan</th>
                                                                <th class="border-top-0">Tanggapan</th>
                                                                <th class="border-top-0">Save to PDF</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $usera=$_SESSION['username'];
                                                        $querya = mysqli_query($config,"SELECT nik FROM masyarakat WHERE username='".$usera."'");
                                                        $dataa=mysqli_fetch_assoc($querya);
                                                        $nika = $dataa['nik'];
                                                        $sqla= mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$nika' AND status='2' ");
                                                        $noa = 1;
                                                        while($rowa = mysqli_fetch_array($sqla)){
                                                            $id_pengaduan=$rowa['id_pengaduan'];

                                                            ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $noa++; ?></td>
                                                                <td><?php echo $rowa['tgl_pengaduan'];?></td>
                                                                <td><button class="btn btn-success" data-toggle="modal" title="Isi Laporan" data-target="#myModal<?php echo $rowa['id_pengaduan']; ?>">
                                                                    <i class="fas fa-eye"> Lihat</i>
                                                                </button></td>
                                                                <td><button class="btn btn-success" data-toggle="modal" title="Foto" data-target="#myModals<?php echo $rowa['id_pengaduan']; ?>">
                                                                    <i class="fas fa-eye"> Lihat</i>
                                                                </button></td>
                                                                <td>
                                                                    <!-- <?php echo $rowa['tgl_tanggapan']; ?> -->
                                                                    -</td>
                                                                    <td>-</td>
                                                                <td><a href="export/export-pdf.php?id_pengaduan=<?php echo $rowa['id_pengaduan']?>" class="btn btn-default" target="_blank">Save</a></td>
                                                            </tr>
                                                        </tbody>
                                                        <?php include 'detail_history.php'; ?>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-info" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-info btn-block text-left collapsed waves-effect waves-dark" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-angle-right"></i> Pengaduan (Proses) </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4 class="card-title">Tabel Pengaduan (Proses)</h4>
                                                <div class="table-responsive">
                                                    <table class="table user-table no-wrap">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">#</th>
                                                                <th class="border-top-0">Tgl Pengaduan</th>
                                                                <th class="border-top-0">Isi Laporan</th>
                                                                <th class="border-top-0">Bukti (Foto)</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $userb=$_SESSION['username'];
                                                        $queryb = mysqli_query($config,"SELECT nik FROM masyarakat WHERE username='".$userb."'");
                                                        $datab=mysqli_fetch_assoc($queryb);
                                                        $nikb = $datab['nik'];
                                                        $sqlb= mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$nikb' AND status='1' ");
                                                        $nob = 1;
                                                        while($rowb = mysqli_fetch_array($sqlb)){
                                                            ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $nob++; ?></td>
                                                                <td><?php echo $rowb['tgl_pengaduan'];?></td>
                                                                <td><button class="btn btn-info" data-toggle="modal" title="Isi Laporan" data-target="#myModalss<?php echo $rowb['id_pengaduan']; ?>">
                                                                    <i class="fas fa-eye"> Lihat</i>
                                                                </button></td>
                                                                <td><button class="btn btn-info" data-toggle="modal" title="Foto" data-target="#myModalsss<?php echo $rowb['id_pengaduan']; ?>">
                                                                    <i class="fas fa-eye"> Lihat</i>
                                                                </button></td>
                                                            </tr>
                                                        </tbody>
                                                        <?php include 'detail_history2.php'; ?>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-warning" id="headingThree">
                                            <h2 class="mb-0">
                                                <button type="button" class="btn btn-warning btn-block text-left collapsed waves-effect waves-dark" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-right"></i> Pengaduan (Belum di Proses)</button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <h4 class="card-title">Tabel Pengaduan (Belum di Proses)</h4>
                                                <div class="table-responsive">
                                                    <table class="table user-table no-wrap">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-top-0">#</th>
                                                                <th class="border-top-0">Tgl Pengaduan</th>
                                                                <th class="border-top-0">Isi Laporan</th>
                                                                <th class="border-top-0">Bukti (Foto)</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $userc=$_SESSION['username'];
                                                        $queryc = mysqli_query($config,"SELECT nik FROM masyarakat WHERE username='".$userc."'");
                                                        $datac=mysqli_fetch_assoc($queryc);
                                                        $nikc = $datac['nik'];
                                                        $sqlc= mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$nikc' AND status='0' ");
                                                        $noc = 1;
                                                        while($rowc = mysqli_fetch_array($sqlc)){
                                                            ?>
                                                        <tbody>

                                                            <tr>
                                                                <td><?php echo $noc++; ?></td>
                                                                <td><?php echo $rowc['tgl_pengaduan'];?></td>
                                                                <td><button class="btn btn-warning" data-toggle="modal" title="Isi Laporan" data-target="#myModalssss<?php echo $rowc['id_pengaduan']; ?>">
                                                                    <i class="fas fa-eye"> Lihat</i>
                                                                </button></td>
                                                                <td><button class="btn btn-warning" data-toggle="modal" title="Foto" data-target="#myModalsssss<?php echo $rowc['id_pengaduan']; ?>">
                                                                    <i class="fas fa-eye"> Lihat</i>
                                                                </button></td>
                                                            </tr>
                                                        </tbody>
                                                        <?php include 'detail_history3.php'; ?>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script>
        $(document).ready(function(){
        // Add down arrow icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-angle-down").removeClass("fa-angle-right");
        });

        // Toggle right and down arrow icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");

        }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    });
</script>
</body>

</html>
