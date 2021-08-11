<div class="modal fade" id="myModal<?php echo $rowa['id_pengaduan']; ?>" role="dialog">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $mnika = $rowa['nik'];
        $mida = $rowa['id_pengaduan'];
        $mqa = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$mnika' AND status='2' AND id_pengaduan='$mida' ");
        while ($mra = mysqli_fetch_array($mqa)) {
          ?>
          <div class="container-fluid">
            <p><?php echo $mra['isi_laporan']; ?></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="myModals<?php echo $rowa['id_pengaduan']; ?>" role="dialog">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $mnika2 = $rowa['nik'];
        $mnimg = $rowa['no_img'];
          $mqa2 = mysqli_query($config,"SELECT * FROM uploads_image WHERE nik='$mnika' AND no_img='$mnimg'");
        while ($mra2 = mysqli_fetch_array($mqa2)) {
          $a = 1;
          if($a <= 3){ //number of cells in row
            echo "<div class='container-fluid'><div class='img-fluid'><a href='$mra2[name_img]' target='_blank'><img class='img-thumbnail center-img' src='$mra2[name_img]'></a></div></div>";
          }else {}$a++;
          ?>
        <?php } ?>
          <?php } ?>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
