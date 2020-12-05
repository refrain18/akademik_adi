<?php
$nip = $_POST['nip'];
$nm_guru = $_POST['nm_guru'];
$jenkel = $_POST['jenkel'];
$agama = $_POST['agama '];
$tmpt_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$mysqli->query("INSERT INTO guru(nip,nm_guru,jenkel,agama,tmpt_lahir,tgl_lahir,alamat) VALUES('$nip','$nm_guru','$jenkel','$nm_guru','$tmpt_lahir','$tgl_lahir','$alamat')");
header('location:index.php');
?>