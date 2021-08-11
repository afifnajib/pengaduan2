<div class="modal fade" id="myMdm<?php echo $ddata['nik']; ?>" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $dmnik = $ddata['nik']; 
        $dmsql = mysqli_query($config,"SELECT * FROM masyarakat WHERE nik='$dmnik' ");
        while ($dmrow = mysqli_fetch_array($dmsql)) {  
          ?>
          <div class="container-fluid">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-center">
                  <tr>
                    <th colspan="7">Detail Masyarakat</th>
                  </tr>
                </thead>
                <tbody class="text-left">
                  <tr>
                    <td rowspan="7" class="text-center">
                      <a href="../public/<?php echo $dmrow['foto'] ?>" target="_blank">
                        <img src="../public/<?php echo $dmrow['foto'] ?>" style="height: 12rem;width: auto;" class="img-thumbnail">
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Nik : <?php echo $dmrow['nik']; ?></td>
                  </tr>
                  <tr>
                    <td>Nama : <?php echo $dmrow['nama']; ?></td>
                  </tr>
                  <tr>
                    <td>Alamat : <?php echo $dmrow['alamat']; ?></td>
                  </tr>
                  <tr>
                    <td>No.HP/WA: <?php echo $dmrow['telp']; ?></td>
                  </tr>
                  <tr>
                    <td>E-mail: <?php echo $dmrow['email']; ?></td>
                  </tr>
                  <tr>
                    <?php 
                      if ($dmrow['verified']=='approved') {
                        echo "<td>Status: <strong class='badge badge-pill badge-success text-white'>$dmrow[verified]</strong></td>";
                      }else {
                        echo "<td><strong class='badge badge-pill badge-danger'>$dmrow[verified]</strong></td>";
                      }
                     ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">  
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>



    <div class="modal fade" id="myMdm2<?php echo $ddata['nik']; ?>" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Masyarakat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-left">
              <form class="form-horizontal form-material" action="p_dm2.php?nik=<?php echo $dmrow['nik'];?>" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-4">
                <label class="col-md-12 p-0">NIK</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="number" name="nik" value="<?php echo $dmrow['nik']; ?>" class="form-control p-0 border-0" disabled>
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">Nama</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="text" name="nama" value="<?php echo $dmrow['nama']; ?>" class="form-control p-0 border-0">
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">Alamat</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="textarea" name="alamat" value="<?php echo $dmrow['alamat']; ?>" class="form-control p-0 border-0">
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">E-mail</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="email" name="email" value="<?php echo $dmrow['email']; ?>" class="form-control p-0 border-0">
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">No.HP/WA</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="text" name="telp" value="<?php echo $dmrow['telp']; ?>" class="form-control p-0 border-0">
                </div>
              </div>
          </div>
          <div class="modal-footer">  
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning mx-md-0">Simpan</button>
          </div>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>