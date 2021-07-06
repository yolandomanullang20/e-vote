<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from kandidat where kandidat_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['kandidat_foto'];
unlink("../gambar/kandidat/$foto");
mysqli_query($koneksi, "delete from kandidat where kandidat_id='$id'");

mysqli_query($koneksi, "delete from voting where voting_kandidat='$id'");

header("location:kandidat.php");
