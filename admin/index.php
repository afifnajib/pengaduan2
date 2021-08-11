<?php
    include "config.php";
    session_start();
    if (isset($_SESSION['use'])){
        header ("location:login.php");
    }else {
        $user = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.png">
    <link href="assets/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <link href="assets/css/style.min.css" rel="stylesheet">
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
            <?php
                if (isset($_GET['p'])) {
                    if ($_GET['p'] == 'profile') {
                        include "profile.php";
                    }else {
                        echo "<meta http-equiv='refresh' content='0 url=404.php'>";
                    }
                }else {
                    include "dashboard.php";
                }
            ?>
            <?php include 'components/footer.php' ?>
        </div>
    </div>


    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/app-style-switcher.js"></script>
    <script src="assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/pages/dashboards/dashboard1.js"></script>

</body>

</html>