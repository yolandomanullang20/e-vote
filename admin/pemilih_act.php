<?php 
include '../koneksi.php';
$kode  = $_POST['kode'];
$tgl_daftar  = $_POST['tgl_daftar'];
$ktp  = $_POST['ktp'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "insert into pemilih values (NULL,'$kode','$tgl_daftar','$ktp','$nama','$umur','$alamat','$jk','$username','$password')");
header("location:pemilih.php");