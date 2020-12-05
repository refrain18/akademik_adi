<?php 
   $hapus=$mysqli->query("select*from siswa where nis='$_GET[nis]'");
    // memilih gambar untuk dihapus
    $nama_foto=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_foto['foto'];
    // script delete gambar dari folder
    unlink($hapus_foto);
    $mysqli->query("DELETE FROM siswa WHERE nis='$_GET[nis]'");
    header('location:index.php');
?>