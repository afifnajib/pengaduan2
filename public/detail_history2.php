<style type="text/css">
  .center-img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
</style>
<div class="modal fade" id="myModalss<?php echo $rowb['id_pengaduan']; ?>" role="dialog">
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
        $mnikb = $rowb['nik'];
        $midb = $rowb['id_pengaduan'];
        $mqb = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$mnikb' AND status='1' AND id_pengaduan='$midb'");
        while ($mrb = mysqli_fetch_array($mqb)) {
          ?>
          <div class="container-fluid">
            <p><?php echo $mrb['isi_laporan']; ?></p>
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
<div class="modal fade" id="myModalsss<?php echo $rowb['id_pengaduan']; ?>" role="dialog">
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
        $mnikb2 = $rowb['nik'];
        $mnimg = $rowb['no_img'];
          $mqb2 = mysqli_query($config,"SELECT * FROM uploads_image WHERE nik='$mnikb2' AND no_img='$mnimg'");
        while ($mrb2 = mysqli_fetch_array($mqb2)) {
          $a = 1;
          if($a <= 3){ //number of cells in row
            echo "<div class='container-fluid'><div class='img-fluid'><a href='$mrb2[name_img]' target='_blank'><img class='img-thumbnail center-img' src='$mrb2[name_img]'></a></div></div>";
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
