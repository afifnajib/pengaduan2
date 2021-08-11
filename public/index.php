<?php
    include "config.php";
    session_start();
    if (!isset($_SESSION['username'])){
        echo "<script>window.location.href='../login.php';</script>";
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
    <title>Monster Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/icons/font-awesome/css/fontawesome-all.min.css">
</head>
<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Rubik:300, 400, 500, 700, 900");
    @import url(css/icons/simple-line-icons/css/simple-line-icons.css);
    @import url(css/icons/weather-icons/css/weather-icons.min.css);
    @import url(css/icons/themify-icons/themify-icons.css);
    @import url(css/icons/material-design-iconic-font/css/materialdesignicons.min.css);
    .topbar .dropdown-menu .with-arrow>span {
    transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
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
    // if (isset($_GET['p'])) {
    //     if ($_GET['p'] == 'profile') {
    //         include "profile.php";
    //     }else {
    //         echo "<meta http-equiv='refresh' content='0 url=404.php'>";
    //     }
    // }else {
    //     include "dashboard.php";
    // }
    include "dashboard.php";
    ?>
</div>

<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/app-style-switcher.js"></script>
<script src="js/waves.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/custom.js"></script>
<script src="assets/plugins/flot/jquery.flot.js"></script>
<!-- <script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script> -->
<script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>