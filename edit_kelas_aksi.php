<?php
include 'koneksi.php';

$idk = $_POST['idk'];
$nama = $_POST['nama'];

 
mysqli_query($koneksi,"UPDATE kelas SET nama_kelas='$nama' WHERE Id_kelas='$idk'");

header("location: kelas.php");
?>