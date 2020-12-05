<?php
$kd_pelajaran = $_POST['kd_pelajaran'];
$nm_pelajaran = $_POST['nm_pelajaran'];
$mysqli->query("INSERT INTO pelajaran(kd_pelajaran,nm_pelajaran) VALUES('$kd_pelajaran','$nm_pelajaran')");
header('location:index.php');
?>