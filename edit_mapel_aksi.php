<?php
include 'koneksi.php';

$nisn = $_POST['idm'];
$nama = $_POST['nama'];

 
mysqli_query($koneksi,"UPDATE mapel SET nama_mapel='$nama' WHERE Id_mapel='$nisn'");

header("location: mapel.php");
?>