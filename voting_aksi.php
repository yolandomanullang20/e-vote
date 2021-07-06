<?php 
include 'koneksi.php';
session_start();
$kandidat  = $_POST['pilih'];
$pemilih = $_SESSION['id'];
$waktu = date('Y-m-d H:i:s');

mysqli_query($koneksi, "insert into voting values (NULL,'$waktu','$pemilih','$kandidat')");

header("location:pesan.php?alert=terimakasih");