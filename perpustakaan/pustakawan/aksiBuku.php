<?php
include 'config.php';

if (isset($_POST['simpan'])) {
	
	$kode_buku=$_POST['kode_buku'];
	$judul=$_POST['judul'];
	$penulis=$_POST['penulis'];
	$penerbit=$_POST['penerbit'];
	$th_terbit=$_POST['th_terbit'];

	mysqli_query($koneksi,"INSERT INTO tb_buku VALUES('$kode_buku','$judul','$penulis','$penerbit','$th_terbit')");

	header('Location: dBuku.php?status=sukses');
}
?>