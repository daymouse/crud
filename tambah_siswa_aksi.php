<?php
include "koneksi.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$gender = $_POST['gender'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "INSERT INTO siswa VALUES('$nisn', '$nama', '$alamat', '$tanggal', '$gender', '$kelas')");

header("Location: siswa.php?kelas='$kelas'");
?>
