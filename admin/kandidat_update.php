<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$tentang = $_POST['tentang'];

// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($filename==""){
	mysqli_query($koneksi, "update kandidat set kandidat_kode='$kode',kandidat_nama='$nama',kandidat_tentang='$tentang' where kandidat_id='$id'");
	header("location:kandidat.php");
}else{
	if(!in_array($ext,$allowed) ) {
		header("location:kandidat.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/kandidat/'.$rand.'_'.$filename);
		$x = $rand.'_'.$filename;
		mysqli_query($koneksi, "update kandidat set kandidat_kode='$kode',kandidat_nama='$nama', kandidat_foto='$x', kandidat_tentang='$tentang' where kandidat_id='$id'");		
		header("location:kandidat.php?alert=berhasil");
	}
}
