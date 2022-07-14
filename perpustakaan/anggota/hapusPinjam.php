<?php 

include('config.php');

	$username = $_GET['username'];
	$sql = "DELETE FROM tb_pinjam WHERE username = '$username'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		header('Location: dPinjamA.php');
	}else{
		die("gagal menghapus...");
	}
?>