<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['tanggal'];
$gender = $_POST['gender'];
$idk = $_POST['idk'];
 
mysqli_query($koneksi,"UPDATE siswa SET nama_siswa='$nama', alamat='$alamat', ttl='$ttl', gender='$gender', id_kelas='$idk' WHERE nisn='$nisn'");

header("Location: siswa.php?kelas='$kelas'");
?>