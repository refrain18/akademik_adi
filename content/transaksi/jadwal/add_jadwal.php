<form name="form_jadwal" action="index.php?page=create" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="Pelajaran">Pelajaran</label>
    <select name="kd_pelajaran" class="form-control" id="kd_pelajaran" name="kd_pelajaran" required>
      <option value="">-Pilih-</option>
      <?php 
            $pelajaran=$mysqli->query("SELECT * FROM pelajaran order by kd_pelajaran");
            while($m=mysqli_fetch_array($pelajaran)){
              echo '<option value="'.$m['kd_pelajaran'].'">'.$m['kd_pelajaran'].' - '.$m['nm_pelajaran'].'</option>';
      }?>
    </select>
  </div>

  <div class="form-group">
    <label for="Guru">Guru</label>
    <select name="nip" class="form-control" id="nip" name="nip" required>
      <option value="">-Pilih-</option>
      <?php 
            $guru=$mysqli->query("SELECT * FROM guru order by nm_guru ASC");
            while($m=mysqli_fetch_array($guru)){
              echo '<option value="'.$m['nip'].'">'.$m['nip'].' - '.$m['nm_guru'].'</option>';
      }?>
    </select>
  </div>


  <div class="form-group">
    <label for="Hari">Hari</label>
    <select name="hari" class="form-control" id="hari" name="hari" required>
      <option value="">-Pilih-</option>
      <option value="Senin">Senin</option>
      <option value="Selasa">Selasa</option>
      <option value="Rabu">Rabu</option>
      <option value="Kamis">Kamis</option>
      <option value="Jum''at">Jum'at</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Jam Mulai">Jam Mulai</label>
    <select name="jam" class="form-control" id="jam" name="jam" required>
      <option value="">-Pilih-</option>
      <option value="07:30:00">07:30 s/d 09:00</option>
      <option value="09:00:00">09:00 s/d 10:30</option>
      <option value="11:00:00">11:00 s/d 12:30</option>
    </select>
  </div>


  <div class="form-group">
    <input type="button" class="btn btn-warning" value="Batal" onclick="history.back(-1)" /> 
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>




</form>