<?php
$kd_nilai = $_POST['kd_nilai'];
$kd_pelajaran = $_POST['kd_pelajaran'];
$nis = $_POST['nis'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$mysqli->query("INSERT INTO nilai (kd_nilai,kd_pelajaran,nis,tugas,uts,uas) VALUES('$kd_nilai','$kd_pelajaran','$nis','$tugas','$uts','$uas')");
header('location:index.php');
?>