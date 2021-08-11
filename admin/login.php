<?php
session_start();
if ($_SESSION) {
    if ($_SESSION['level']=="admin") {
        header("location: index.php");
    }
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
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>
<style type="text/css">
body {
    background: #026684;
}
    .my-7 {
        margin-top: 5rem;
    }
    #toggler {
        position: relative;
        float: right;
        bottom: 1.50rem;
    }
</style>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-5 col-lg-4 mx-auto">
            <div class="card my-7 shadow-lg">
              <div class="card-body">
                <h3 class="card-header text-center"><b>Sign In</b></h3><br>
                <form class="form-horizontal form-material" action="proses_login.php" method="post">
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Username</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" name="username" placeholder="Masukkan Username/E-mail" id="username" class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Password</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password" placeholder="Masukkan Password" name="password" id="password" class="form-control p-0 border-0">
                            <i id="toggler"class="fas fa-eye mr-2"></i>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
        var password = document.getElementById('password');
      var toggler = document.getElementById('toggler');

      showHidePassword = () => {
        if (password.type == 'password') {
          password.setAttribute('type', 'text');
          toggler.classList.add('fa-eye-slash');
        } else {
          toggler.classList.remove('fa-eye-slash');
          password.setAttribute('type', 'password');
        }
      };
      toggler.addEventListener('click', showHidePassword);
    </script>

</body>

</html>