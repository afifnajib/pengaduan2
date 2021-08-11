<div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Dashboard</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <a href="history.php">
                        <div class="card">
                            <div class="card-body waves-effect waves-dark">
                                <h4 class="card-title">JUMLAH LAPORAN</h4>
                                <div class="text-right">
                                    <?php
                                    $dusera = $_SESSION['username'];
                                    $dsqla = mysqli_query($config,"SELECT * FROM masyarakat WHERE username='".$dusera."'");
                                    while($drwa = mysqli_fetch_array($dsqla)){
                                        $dnika = $drwa['nik'];
                                        $dsqlb = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$dnika'");
                                        $dlda = mysqli_num_rows($dsqlb);
                                        echo "<h2 class='font-light m-b-0'><i class='fa fa-users text-danger'></i> $dlda</h2>";
                                    }
                                    ?>
                                    <span class="text-muted">Jumlah Pengaduan Yang Di Buat</span>
                                </div>
                                <span class="text-danger">100%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                    style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="history.php#headingOne">
                        <div class="card">
                            <div class="card-body waves-effect waves-dark">
                                <h4 class="card-title">SELESAI</h4>
                                <div class="text-right">
                                    <?php
                                    $duserb = $_SESSION['username'];
                                    $dsqlc = mysqli_query($config,"SELECT * FROM masyarakat WHERE username='".$duserb."'");
                                    while($drwb = mysqli_fetch_array($dsqlc)){
                                        $dnikb = $drwb['nik'];
                                        $dsqld = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$dnikb' AND status='2' ");
                                        $dldb = mysqli_num_rows($dsqld);
                                        echo "<h2 class='font-light m-b-0'><i class='fa fa-check text-success'></i> $dldb</h2>";
                                    }
                                    ?>
                                    <span class="text-muted">Pengaduan Telah Selesai</span>
                                </div>
                                <span class="text-success">100%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar"
                                    style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="history.php#headingTwo">
                        <div class="card">
                            <div class="card-body waves-effect waves-dark">
                                <h4 class="card-title">PROSES</h4>
                                <div class="text-right">
                                    <?php
                                    $duserc = $_SESSION['username'];
                                    $dsqle = mysqli_query($config,"SELECT * FROM masyarakat WHERE username='".$duserc."'");
                                    while($drwc = mysqli_fetch_array($dsqle)){
                                        $dnikc = $drwc['nik'];
                                        $dsqlf = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$dnikc' AND status='1' ");
                                        $dldc = mysqli_num_rows($dsqlf);
                                        echo "<h2 class='font-light m-b-0'><i class='fa fa-spinner text-info'></i> $dldc</h2>";
                                    }
                                    ?>
                                    <span class="text-muted">Pengaduan Sedang di Proses</span>
                                </div>
                                <span class="text-info">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="history.php#headingThree">
                        <div class="card">
                            <div class="card-body waves-effect waves-dark">
                                <h4 class="card-title">BELUM</h4>
                                <div class="text-right">
                                    <?php
                                    $duserd = $_SESSION['username'];
                                    $dsqlg = mysqli_query($config,"SELECT * FROM masyarakat WHERE username='".$duserd."'");
                                    while($drwd = mysqli_fetch_array($dsqlg)){
                                        $dnikd = $drwd['nik'];
                                        $dsqlh = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$dnikd' AND status='0' ");
                                        $dldd = mysqli_num_rows($dsqlh);
                                        echo "<h2 class='font-light m-b-0'><i class='fa fa-calendar-times text-warning'></i> $dldd</h2>";
                                    }
                                    ?>
                                    <span class="text-muted">Pengaduan Belum di Proses</span>
                                </div>
                                <span class="text-warning">25%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                    style="width: 25%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php include 'components/footer.php'; ?>
</div>
