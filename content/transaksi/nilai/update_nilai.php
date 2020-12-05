<?php 
  if (empty($foto)){
    $mysqli->query("UPDATE nilai SET kd_nilai = '$_POST[kd_nilai]',
                        kd_pelajaran    = '$_POST[kd_pelajaran]',
                        nis    = '$_POST[nis]',
                        tugas = '$_POST[tugas]',
                        uts = '$_POST[uts]',
                        uas  = '$_POST[uas]'
                    WHERE kd_nilai = '$_POST[kd_nilai]'");
  }
  header('location:index.php');
?>
