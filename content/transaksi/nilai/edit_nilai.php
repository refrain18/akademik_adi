<?php 
  $edit=$mysqli->query("select*from nilai where kd_nilai='$_GET[kd_nilai]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_siswa" action="index.php?page=update" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="Pelajaran">Pelajaran</label>
    <input type="hidden" name="kd_nilai" value="<?php echo $e['kd_nilai'];?>">
    <select name="kd_pelajaran" class="form-control" id="kd_pelajaran" name="kd_pelajaran" required>
      <option value="<?php echo $e['kd_pelajaran'];?>"><?php echo $e['kd_pelajaran'];?></option>
      <option value="">-Pilih-</option>
      <?php 
            $pelajaran=$mysqli->query("SELECT * FROM pelajaran order by kd_pelajaran");
            while($m=mysqli_fetch_array($pelajaran)){
              echo '<option value="'.$m['kd_pelajaran'].'">'.$m['kd_pelajaran'].' - '.$m['nm_pelajaran'].'</option>';
      }?>
    </select>
  </div>

  <div class="form-group">
    <label for="Siswa">Siswa</label>
    <select name="nis" class="form-control" id="nis" name="nis" required>
      <option value="<?php echo $e['nis'];?>"><?php echo $e['nis'];?></option>
      <option value="">-Pilih-</option>
      <?php 
            $pelajaran=$mysqli->query("SELECT * FROM siswa order by nm_siswa");
            while($m=mysqli_fetch_array($pelajaran)){
              echo '<option value="'.$m['nis'].'">'.$m['nis'].' - '.$m['nm_siswa'].'</option>';
      }?>
    </select>
  </div>

  <div class="form-group">
    <label for="Tugas">Tugas</label>
    
    <input type="text" class="form-control" id="tugas" placeholder="Tugas" name="tugas" required value="<?php echo $e['tugas'];?>">
  </div>

  <div class="form-group">
    <label for="UTS">UTS</label>
    <input type="text" class="form-control" id="uts" placeholder="UTS" name="uts" required value="<?php echo $e['uts'];?>">
  </div>


  <div class="form-group">
    <label for="UAS">UAS</label>
    <input type="text" class="form-control" id="uas" placeholder="UAS " name="uas" required value="<?php echo $e['uas'];?>">
  </div>

  <div class="form-group">
    <input type="button" class="btn btn-warning" value="Batal" onclick="history.back(-1)" />
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>