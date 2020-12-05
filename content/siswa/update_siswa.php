<?php 

  if (empty($foto)){
    $mysqli->query("UPDATE siswa SET kd_kelas = '$_POST[kd_kelas]',
                        nis = '$_POST[nis]',
                        nm_siswa    = '$_POST[nm_siswa]',
                        jenkel    = '$_POST[jenkel]',
                        agama  = '$_POST[agama]',
                        tmpt_lahir = '$_POST[tmpt_lahir]',
                        tgl_lahir = '$_POST[tgl_lahir]',
                        alamat  = '$_POST[alamat]'
                    WHERE nis = '$_POST[nis]'");
  }
  header('location:index.php');
?>