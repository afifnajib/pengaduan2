<?php
include 'config.php';
$nik = base64_decode($_GET["email"]);
if (isset($email)) {
  $email = base64_decode($_GET["email"]);
  $sql = mysqli_query($config,"SELECT * FROM masyarakat WHERE email='$email'");
  $row=mysqli_fetch_array($sql);

  if($row['email']==$email){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="colorlib.com">
      <link rel="stylesheet" href="assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
      <link rel="stylesheet" href="assets/register/css/style.css">
    </head>
    <style type="text/css">
    .wrapper {
      display: block;
    }

    .container {
      position: relative;
      margin: 0 auto;
    }

    .btn {
      display: inline-block;
      font-weight: 700;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 5px;
      transition: all 0.15s ease-in-out;
    }

    @media screen and (prefers-reduced-motion: reduce) {
      .btn {
        transition: none;
      }
    }

    .btn:hover, .btn:focus {
      text-decoration: none;
    }

    .btn:focus, .btn.focus {
      outline: 0;
      box-shadow: 0;
    }

    .btn.disabled, .btn:disabled {
      opacity: 0.65;
    }

    .btn:not(:disabled):not(.disabled) {
      cursor: pointer;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
      pointer-events: none;
    }

    .btn-lg, .btn-group-lg > .btn {
      padding: 0.5rem 1rem;
      font-size: 18px;
      line-height: 1.5;
    }


    .btn-block {
      display: block;
      width: 100%;
    }

    .btn-block + .btn-block {
      margin-top: 0.5rem;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
      width: 100%;
    }

    #toggler {
      position: relative;
      float: right;
      bottom: 1.8rem;
    }

    a {
      color: #516ca9;
      text-decoration: none;
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
    }

    a:hover {
      color: #31404a;
      text-decoration: underline;
    }

    a:not([href]):not([tabindex]) {
      color: inherit;
      text-decoration: none;
    }

    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
      color: inherit;
      text-decoration: none;
    }

    a:not([href]):not([tabindex]):focus {
      outline: 0;
    }

  </style>
  <body>
    <div class="wrapper" style="width: auto;">
      <form action="p_rp.php" id="signin-form" class="container" method="POST">
        <div id="wizard">
          <div class="form-header">
            <a href="#">Pengaduan Masyarakat</a>
            <h3 class="judul">Reset Password</h3>
          </div>
          <div class="form-row">
            <label for="">
              Password Baru:
            </label>
            <div class="form-holder">
              <input type="password"  id="password" class="form-control" required="">
            </div>
          </div>
          <div class="form-row">
            <label for="">
              Konfirmasi Password:
            </label>
            <div class="form-holder">
              <input type="password" id="konfirmasi_password" name="password" required="">
              <i id="toggler"class="zmdi zmdi-eye zmdi-hc-lg mr" onclick="mySP()"></i>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-lg btn-block sign-btn" id="rp-btn">login</button>    
        </div>
      </form>
    </div>
  </body>
  </html>
  <script type="text/javascript">
    var password = document.getElementById('password');
    var toggler = document.getElementById('toggler');
    function mySP () {
      if (password.type == 'password') {
        password.setAttribute('type', 'text');
        toggler.classList.remove('zmdi-eye');
        toggler.classList.add('zmdi-eye-off');
      } else {
        toggler.classList.remove('zmdi-eye-off');
        toggler.classList.add('zmdi-eye');
        password.setAttribute('type', 'password');
      }
    };

    setInterval(function() {
      var paragraf = document.getElementsByClassName("judul");
      paragraf[0].style.color="#000";

      setTimeout(function() {
        paragraf[0].style.color="#3377c0";
      },500)
    },1000);

    var pb = document.getElementById('password').value();
    var kp = document.getElementById('konfirmasi_password').value();
    function myPass () {
      if(pb !== kp) {
        alert('Password baru dengan password konfirmasi berbeda, silahkan coba lagi !!');
      }else{}
    }
  </script>
    <?php
  }else {
    // echo '<h3>Silahkan</h3>';
  }
}else {
    echo "<script>alert('Silahkan Cek Kembali Anda Kembali');window.location.href='forgot_password.php';<h3/>";
  }
  ?>