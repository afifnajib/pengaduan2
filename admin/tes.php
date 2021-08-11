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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.png">
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css">
</head>
<body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">KELOLA DATA PETUGAS</h3>
                            <div class="table-responsive">
                                <table class="table" id="table-masyarakat">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">NIK</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0 text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $dmq = mysqli_query($config,"SELECT * FROM masyarakat");
                                    $no = 1;
                                    while($ddata = mysqli_fetch_array($dmq)){
                                        ?>
                                    <tbody>
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
                                                <button class="btn btn-danger" data-toggle="modal" title="Hapus" data-target="#myMdm3<?php echo $ddata['nik']; ?>"><i class="fas fa-trash"></i></button>
                                             </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="../DataTables/datatables.min.js"></script>

</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
    $('#table-masyarakat').DataTable( {
        "order": [[ 0, "asc" ]]    
    } );
} );
</script>