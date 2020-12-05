<?php
$kd_kelas = $_POST['kd_kelas'];
$nis = $_POST['nis'];
$nm_siswa = $_POST['nm_siswa'];
$jenkel = $_POST['jenkel'];
$agama = $_POST['agama'];
$tmpt_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$mysqli->query("INSERT INTO siswa (kd_kelas,nis,nm_siswa,jenkel,agama,tmpt_lahir,tgl_lahir,alamat) VALUES('$kd_kelas','$nis','$nm_siswa','$jenkel','$agama','$tmpt_lahir','$tgl_lahir','$alamat')");
header('location:index.php');
?>