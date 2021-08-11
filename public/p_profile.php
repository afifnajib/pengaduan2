<style type="text/css">
  .border-img {
    border: 3px solid #dadada;
  }
</style>
    <div class="modal fade" id="myM<?php echo $prow['nik']; ?>" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Detail Petugas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
              <form action="p_profile2.php?nik=<?php echo base64_encode($prow['nik']);?>" method="POST" enctype="multipart/form-data">
                <input type="file" class="inputfile" name="foto" id="your_picture"  onchange="readURL(this);" />
                <label for="your_picture">
                  <figure>
                    <?php 
                      if ($prow['foto']=='uploads/users/') {
                        echo "<img src='uploads/users/default_user.png' id='your_picture_image' class='border-img rounded-circle' width='150' height='150'>";
                      }else {
                        echo "<img src='$prow[foto]' id='your_picture_image' class='border-img rounded-circle' width='150' height='150'>";
                      }
                     ?>
                  </figure>
                </label>
                <div class="form-group">
                  <button type="submit" class="btn btn-success mx-auto mx-md-0 text-center text-white">Simpan</button>
                </div>
              </form>
            </center>
          </div>
          <div class="modal-footer">  
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>