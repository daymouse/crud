<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn='$id'");

header('location: siswa.php');
?>