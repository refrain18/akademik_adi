<?php 
  if (empty($foto)){
    $mysqli->query("UPDATE jadwal SET kd_jadwal = '$_POST[kd_jadwal]',
                        kd_pelajaran    = '$_POST[kd_pelajaran]',
                        nip    = '$_POST[nip]',
                        hari = '$_POST[hari]',
                        jam  = '$_POST[jam]'
                    WHERE kd_jadwal = '$_POST[kd_jadwal]'");
  }
  header('location:index.php');
?>
