<div class="modal fade" id="myMtp" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Masyarakat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-left">
              <form class="form-horizontal form-material" action="p_tp.php" method="POST">
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">Nama Petugas</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="text" name="nama_petugas" placeholder="Nama Lengkap Petugas" class="form-control p-0 border-0" required>
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">E-mail</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="email" name="email" placeholder="E-mail Petugas" class="form-control p-0 border-0" required>
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0">No.HP/WA</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="text" name="telp" class="form-control p-0 border-0" placeholder="No.Hp/WA Petugas" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">  
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning mx-md-0">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>