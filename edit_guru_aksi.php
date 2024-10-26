<?php
include 'koneksi.php';

$nisn = $_POST['idg'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['tanggal'];
$gender = $_POST['gender'];
$idm = $_POST['idm'];
$idk = $_POST['tlpn'];
 
mysqli_query($koneksi,"UPDATE guru SET nama_guru='$nama', alamat='$alamat', gender='$gender',id_mapel='$idm', ttl='$ttl', telp='$idk' WHERE id_guru='$nisn'");

header("Location: guru.php?idm= '$idm'");
?>