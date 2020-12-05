
<?php 

  if (empty($foto)){
    $mysqli->query("UPDATE pelajaran SET kd_pelajaran = '$_POST[kd_pelajaran]',
                        nm_pelajaran    = '$_POST[nm_pelajaran]'
                    WHERE kd_pelajaran = '$_POST[kd_pelajaran]'");
  }
  header('location:index.php');
?>