<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from pemilih where pemilih_id='$id'");

mysqli_query($koneksi, "delete from voting where voting_pemilih='$id'");

header("location:pemilih.php");
