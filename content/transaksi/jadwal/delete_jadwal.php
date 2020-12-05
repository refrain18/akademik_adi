<?php 
   $hapus=$mysqli->query("select*from jadwal where kd_jadwal='$_GET[kd_jadwal]'");
    // memilih gambar untuk dihapus
    $nama_foto=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_foto['foto'];
    // script delete gambar dari folder
    unlink($hapus_foto);
    $mysqli->query("DELETE FROM jadwal WHERE kd_jadwal='$_GET[kd_jadwal]'");
    header('location:index.php');
?>