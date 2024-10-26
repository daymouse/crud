<?php
include "koneksi.php";

$id_mapel = $_POST['idk'];
$nama= $_POST['nama'];

mysqli_query($koneksi,"INSERT INTO kelas VALUE('$id_mapel','$nama')");

header('location: kelas.php');
?>