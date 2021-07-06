<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$kode  = $_POST['kode'];
$tgl_daftar  = $_POST['tgl_daftar'];
$ktp  = $_POST['ktp'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = md5($_POST['password']);

if($_POST['password'] == ""){
	mysqli_query($koneksi, "update pemilih set pemilih_kode='$kode', pemilih_tgl_daftar='$tgl_daftar', pemilih_ktp='$ktp', pemilih_nama='$nama', pemilih_umur='$umur', pemilih_alamat='$alamat', pemilih_jk='$jk', pemilih_username='$username' where pemilih_id='$id'");
	header("location:pemilih.php");
}else{
	mysqli_query($koneksi, "update pemilih set pemilih_kode='$kode', pemilih_tgl_daftar='$tgl_daftar', pemilih_ktp='$ktp', pemilih_nama='$nama', pemilih_umur='$umur', pemilih_alamat='$alamat', pemilih_jk='$jk', pemilih_username='$username', pemilih_password='$password' where pemilih_id='$id'");
	header("location:pemilih.php");
}