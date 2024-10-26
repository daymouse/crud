<?php
include "koneksi.php";

$id_mapel = $_POST['idm'];
$nama= $_POST['nama'];
$id_guru = $_POST['idg'];

mysqli_query($koneksi,"INSERT INTO mapel VALUE('$id_mapel','$nama','$id_guru')");

header('location: mapel.php');
?>