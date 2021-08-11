<header class="topbar" id="header" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="index.php">
                <b class="logo-icon">
                    <img src="assets/images/logo-icon.png" alt="homepage" />
                </b>
                <span class="logo-text">
                    <img src="assets/images/logo-text.png" alt="homepage" />
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"  href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-none d-md-block d-lg-none">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="waves-effect waves-dark">
                    <?php 
                    include 'config.php';
                    $user = $_SESSION['username'];
                    $d = mysqli_query($config,"SELECT username,foto FROM petugas WHERE username='$user'");
                    while($data = mysqli_fetch_assoc($d)){
                        ?>
                      <a class="profile-pic" href="#">
                        <img src="<?php echo $data['foto']; ?>" alt="user-img" width="35" height="35" class="img-circle">
                        <span class="text-white font-medium"><?php echo $data['username']; ?></span></a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>
</header>