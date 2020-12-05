<?php 
  $edit=$mysqli->query("select*from pelajaran where kd_pelajaran='$_GET[kd_pelajaran]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_pelajaran" action="index.php?page=update" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="Kode Pelajaran">Kode Pelajaran</label>
    <input type="hidden" name="kd_pelajaran" value="<?php echo $e['kd_pelajaran'];?>">
    <input type="text" class="form-control" id="kd_pelajaran" placeholder="Kode Pelajaran" name="kd_pelajaran" required value="<?php echo $e['kd_pelajaran'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama Pelajararan</label>
    <input type="text" class="form-control" id="nm_pelajaran" placeholder="Nama" name="nm_pelajaran" required value="<?php echo $e['nm_pelajaran'];?>">
  </div>

  <div class="form-group">
    <input type="button" class="btn btn-warning" value="Batal" onclick="history.back(-1)" /> 
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>