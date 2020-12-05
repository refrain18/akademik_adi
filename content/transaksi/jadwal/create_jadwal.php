<?php
$kd_pelajaran = $_POST['kd_pelajaran'];
$nip = $_POST['nip'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$mysqli->query("INSERT INTO jadwal (kd_pelajaran,nip,hari,jam) VALUES('$kd_pelajaran','$nip','$hari','$jam')");
header('location:index.php');
?>
