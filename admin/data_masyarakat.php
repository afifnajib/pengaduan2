<?php
    include "config.php";
    session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bower_components/sweetalert2/sweetalert2.all.min.css">
    <link rel="stylesheet" href="assets/plugins/bower_components/DataTables/dataTables.bootstrap4.min.css">

</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <?php include 'components/header.php'; ?>
        <?php include 'components/sidebar.php' ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">data petugas</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="#">Dashboard</a></li>
                            </ol>
                            <!-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade
                                to Pro</a> -->
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">KELOLA DATA MASYARAKAT</h3>
                            <br>
                            <div class="table-responsive">
                                <table id="table-masyarakat" class="display table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                    <?php
                                    $dmq = mysqli_query($config,"SELECT * FROM masyarakat");
                                    $no = 1;
                                    while($ddata = mysqli_fetch_array($dmq)){
                                        ?>                               
                                        <tr class="text-center">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $ddata['nik']; ?></td>
                                            <td><?php echo $ddata['nama']; ?></td>
                                            <?php 
                                                if ($ddata['verified']=='approved') {
                                                   echo "<td><srtong class='badge badge-pill badge-success text-white'>$ddata[verified]</strong></td>";
                                                }else {
                                                     echo "<td><strong class='badge badge-pill badge-danger'>$ddata[verified]</strong></td>";
                                                }
                                             ?>
                                             <td>
                                                <button class="btn btn-info" data-toggle="modal" title="Detail" data-target="#myMdm<?php echo $ddata['nik']; ?>"><i class="fas fa-info"></i></button>
                                                <?php include 'p_dm.php'; ?>
                                                <button class="btn btn-warning" data-toggle="modal" title="Edit" data-target="#myMdm2<?php echo $ddata['nik']; ?>"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-danger" onclick="notifDelete()"><i class="fas fa-trash"></i></button>
                                             </td>
                                             <script type="text/javascript">
                                               function notifDelete() {
                                                   Swal.fire({
                                                    title: 'Apakah Kamu Yakin ?',
                                                    text: "Kamu Akan Menghapus Data Ini.",
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Ya, Hapus',
                                                    cancelButtonText: 'Batal'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                      Swal.fire(
                                                        'Terhapus!',
                                                        'Data Berhasil di Hapus',
                                                        'success',
                                                        window.location.href="hapus_masyarakat.php?nik=<?php echo $ddata['nik']; ?>",
                                                        )
                                                  }
                                              })
                                            };
                                             </script>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'components/footer.php' ?>
        </div>
    </div>


    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/bower_components/DataTables/datatables.js"></script>
    <script src="assets/plugins/bower_components/DataTables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/plugins/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#table-masyarakat').DataTable();
} );
</script>


</body>

</html>