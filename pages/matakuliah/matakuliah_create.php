<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="anggotaModalLabel" aria-hidden="true">
  <form class="" action="" method="post">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="anggotaModalLabel">Create</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_matakuliah">Matakuliah</label>
            <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah"  aria-describedby="matakuliah_help">
            <small id="matakuliah_help" class="form-text text-muted">Nama panjang matakuliah</small>
          </div>
          <div class="form-group">
            <label for="singkatan_matakuliah">Singkatan</label>
            <input type="text" class="form-control" id="singkatan_matakuliah" name="singkatan_matakuliah" aria-describedby="singkatan_matakuliah_help">
            <small id="singkatan_matakuliah_help" class="form-text text-muted">Maksimal 9 huruf</small>
          </div>
          <div class="form-group">
            <label for="nama_dosen">Dosen</label>
            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen"  aria-describedby="nama_dosen_help">
            <small id="nama_dosen_help" class="form-text text-muted">-</small>
          </div>
          <div class="form-group">
            <label for="kontak_dosen">Kontak Dosen</label>
            <input type="text" class="form-control" id="kontak_dosen" name="kontak_dosen" aria-describedby="kontak_dosen_help">
            <small id="kontak_dosen_help" class="form-text text-muted">No HP Dosen</small>
          </div>
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="aktif" name="aktif" value="true">
            <label class="custom-control-label" for="aktif">Aktif</label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" name="create" type="submit" >Simpan</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
        </div>
      </div>

    </div>
  </form>
</div>
