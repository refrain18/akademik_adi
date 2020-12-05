<?php 
  $foto   = $_FILES['foto']['name'];
  // Apabila gambar tidak diganti
  if (empty($foto)){
    $mysqli->query("UPDATE guru SET nip = '$_POST[nip]',
                        nm_guru    = '$_POST[nm_guru]',
                        jenkel    = '$_POST[jenkel]',
                        agama    = '$_POST[agama]',
                        tmpt_lahir = '$_POST[tmpt_lahir]',
                        tgl_lahir = '$_POST[tgl_lahir]',
                        alamat  = '$_POST[alamat]'
                    WHERE nip = '$_POST[nip]'");
  }
  header('location:index.php');
?>