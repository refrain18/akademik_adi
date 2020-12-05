<?php 
   $hapus=$mysqli->query("select*from guru where nip='$_GET[nip]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // script delete gambar dari folder
    unlink($hapus_gambar);
    $mysqli->query("DELETE FROM guru WHERE nip='$_GET[nip]'");
    header('location:index.php');
?>