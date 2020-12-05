<form name="form_pelajaran" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="Kode Pelajaran">Kode Pelajaran</label>
    <input type="text" class="form-control" id="kd_pelajaran" placeholder="Kode Pelajaran" name="kd_pelajaran" required>
  </div>

  <div class="form-group">
    <label for="Nama Pelajaran">Nama Pelajaran</label>
    <input type="text" class="form-control" id="nm_pelajaran" placeholder="Nama Pelajaran" name="nm_pelajaran" required>
  </div>

  <div class="form-group">
    <input type="button" class="btn btn-warning" value="Batal" onclick="history.back(-1)" />
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>







