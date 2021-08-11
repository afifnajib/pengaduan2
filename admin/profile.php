<style type="text/css">
#toggler, #toggler2 {
  position: relative;
        float: right;
        bottom: 1.50rem;
        right: 1rem;
}
</style>
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" id="breadcrumb">
            <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>
        </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ml-auto">
                    <li><a href="index.php?p=profile">Profile</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-xlg-3 col-md-12">
      <div class="white-box">
        <div class="user-bg">
          <div class="overlay-box">
            <div class="user-content">
              <?php 
                    include 'config.php';
                    $user = $_SESSION['username'];
                    $d = mysqli_query($config,"select * from petugas where username='".$user."'");
                    while($data = mysqli_fetch_array($d)){
              ?>
              <a href="javascript:void(0)"><img src="<?php echo $data['foto']; ?>"
                class="thumb-lg img-circle" alt="img"></a>
                <h4 class="text-white mt-2"><?php echo $data['nama_petugas']; ?></h4>
                <h5 class="text-white mt-2"><?php echo $data['email']; ?></h5>
              </div>
            </div>
          </div>
          <div class="user-btm-box mt-5 d-md-flex">
            <div class="col-md-12 col-sm-12 text-center">
              <a href="hapus_akun.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger">Hapus Akun</a>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
      <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal form-material">
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">Password</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="password" value="password" id="password" class="form-control p-0 border-0">
                  <span><i id="toggler"class="fas fa-eye"></i></span>
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">New Password</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="password" value="password" id="newpassword" class="form-control p-0 border-0">
                  <span><i id="toggler2"class="fas fa-eye"></i></span>
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">Re-new Password</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="password" value="password" class="form-control p-0 border-0">
                </div>
              </div>
              <div class="form-group mb-4">
                <div class="col-sm-12">
                  <button class="btn btn-success">Update Profile</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

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

    var newpassword = document.getElementById('newpassword');
    var toggler2 = document.getElementById('toggler2');
    showHideNewPassword = () => {
      if (newpassword.type == 'password') {
        newpassword.setAttribute('type', 'text');
        toggler2.classList.add('fa-eye-slash');
      } else {
        toggler2.classList.remove('fa-eye-slash');
        newpassword.setAttribute('type', 'password');
      }
    };
    toggler2.addEventListener('click', showHideNewPassword);
  </script>