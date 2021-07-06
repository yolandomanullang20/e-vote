<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];
$kode = $_POST['kode'];
$tentang = $_POST['tentang'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "insert into kandidat values (NULL,'$kode','$nama','$tentang','')");
	header("location:kandidat.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:kandidat.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/kandidat/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into kandidat values (NULL,'$kode','$nama','$tentang','$file_gambar')");
		header("location:kandidat.php");
	}
}

