<form name="form_siswa" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="Kelas">Kelas</label>
    <select name="kd_kelas" class="form-control" id="kd_kelas" name="kd_kelas" required>
      <option value="">-Pilih-</option>
      <option value="71">Kelas 7.1</option>
      <option value="72">Kelas 7.2</option>
      <option value="73">Kelas 7.3</option>
      <option value="81">Kelas 8.1</option>
      <option value="82">Kelas 8.2</option>
      <option value="83">Kelas 8.3</option>
      <option value="91">Kelas 9.1</option>
      <option value="92">Kelas 9.2</option>
      <option value="93">Kelas 9.3</option>
    </select>
  </div>

  <div class="form-group">
    <label for="NIS">NIS</label>
    <input type="text" class="form-control" id="nis" placeholder="Nomor Induk Siswa" name="nis" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nm_siswa" placeholder="Nama" name="nm_siswa" required>
  </div>

  <div class="form-group">
    <label for="Jenkel">Jenis Kelamin</label>
    <select name="jenkel" class="form-control" id="jenkel" name="jenkel" required>
      <option value="">-Pilih-</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Agama">Agama</label>
    <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama" required>
  </div>


  <div class="form-group">
    <label for="Tempat Lahir">Tempat Lahir</label>
    <input type="text" class="form-control" id="tmpt_lahir" placeholder="Tempat Lahir" name="tmpt_lahir" required>
  </div>

  <div class="form-group">
    <label for="Tanggal Lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" required>
  </div>

  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required></textarea>
  </div>

  <div class="form-group">
    <input type="button" class="btn btn-warning" value="Batal" onclick="history.back(-1)" /> 
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>