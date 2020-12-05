<form name="form_guru" action="index.php?page=create_guru" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIP">NIP</label>
    <input type="text" class="form-control" id="nip" placeholder="Nomor Induk Pegawai" name="nip" required>
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nm_guru" placeholder="Nama" name="nm_guru" required>
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