<?php 
   $hapus=$mysqli->query("select*from nilai where kd_nilai='$_GET[kd_nilai]'");
    // memilih gambar untuk dihapus
    $nama_foto=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_foto['foto'];
    // script delete gambar dari folder
    unlink($hapus_foto);
    $mysqli->query("DELETE FROM nilai WHERE kd_nilai='$_GET[kd_nilai]'");
    header('location:index.php');
?>