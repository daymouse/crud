<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$gender = $_POST['gender'];
$idm = $_POST['idm'];
$tlpn = $_POST['tlpn'];

mysqli_query($koneksi,"INSERT INTO guru VALUE('$idm','$id','$nama','$alamat','$gender','$tanggal','$tlpn')");

header("Location: guru.php?idm= '$idm'");
?>