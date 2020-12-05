<?php 
   $hapus=$mysqli->query("select*from pelajaran where kd_pelajaran='$_GET[kd_pelajaran]'");
    // memilih gambar untuk dihapus
    $nama_foto=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_foto['foto'];
    // script delete gambar dari folder
    unlink($hapus_foto);
    $mysqli->query("DELETE FROM pelajaran WHERE kd_pelajaran='$_GET[kd_pelajaran]'");
    header('location:index.php');
?>