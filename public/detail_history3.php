<div class="modal fade" id="myModalssss<?php echo $rowc['id_pengaduan']; ?>" role="dialog">
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
        $mnikc = $rowc['nik']; 
        $midc = $rowc['id_pengaduan'];
        $mqc = mysqli_query($config,"SELECT * FROM pengaduan WHERE nik='$mnikc' AND status='0' AND id_pengaduan='$midc' ");
        while ($mrc = mysqli_fetch_array($mqc)) {  
          ?>
          <div class="container-fluid">
            <p><?php echo $mrc['isi_laporan']; ?></p>
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

<div class="modal fade" id="myModalsssss<?php echo $rowc['id_pengaduan']; ?>" role="dialog">
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
        $mnikc3 = $rowc['nik'];
        $mnimg = $rowc['no_img'];
          $mqb3 = mysqli_query($config,"SELECT * FROM uploads_image WHERE nik='$mnikc3' AND no_img='$mnimg'");
        while ($mrb3 = mysqli_fetch_array($mqb3)) {
          $a = 1;
          if($a <= 3){ //number of cells in row
            echo "<div class='container-fluid'><div class='img-fluid'><a href='$mrb3[name_img]' target='_blank'><img class='img-thumbnail center-img' src='$mrb3[name_img]'></a></div></div>";
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