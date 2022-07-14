<?php 

include('config.php');

	$kode_buku = $_GET['kode_buku'];
	$sql = "DELETE FROM tb_buku WHERE kode_buku = '$kode_buku'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		header('Location: dBuku.php');
	}else{
		die("gagal menghapus...");
	}
?>