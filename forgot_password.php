<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/register/css/custom.css">
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
.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.form_error span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}
  </style>
  <body>
    <?php
      // $email="test@yahoo.com";
      // $email2 = preg_replace('/(?<=.).(?=.*@)/', '*', $email);
      // echo $email2;
      // echo "<script>$(document).ready(function() {
      //   var ma= $email2;
      //   alert('Data email yang dimasukkan tidak sesuai, data email anda');
      // });</script>";
     ?>
    <div class="wrapper" style="width: auto;">
      <form id="fp-form" class="container" method="POST">
        <div id="wizard" class="mt-5">
          <div class="form-header">
            <a href="#">Pengaduan Masyarakat</a>
            <h3 class="judul">Lupa Password</h3>
          </div>
          <div class="form-row">
            <label for="">
              NIK:
            </label>
            <div class="form-holder">
              <input type="number" id="nik" name="nik" value="<?php echo $nik; ?>" class="form-control" required="">
            </div>
            <span id="availability"></span>
          </div>
          <div class="form-row">
            <label for="">
              Email:
            </label>
            <div class="form-holder">
              <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required="">
            </div>
          </div>  
          <br>
          <button type="submit" class="btn btn-lg btn-block sign-btn" id="fp-btn" name="fp_btn" >Send</button>    
        </div>
      </form>
    </div>
</body>
</html>
<?php include 'config.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  setInterval(function() {
    var paragraf = document.getElementsByClassName("judul");
    paragraf[0].style.color="#000";

    setTimeout(function() {
      paragraf[0].style.color="#337";
    },500)
  },1000);

</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
 -->
<!-- <script type="text/javascript">
  var ea="<?php echo $email2 ?>";
       Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong! '+ ea,
});
     </script> -->
