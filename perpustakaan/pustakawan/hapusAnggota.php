<?php 

include('config.php');

	$username = $_GET['username'];
	$sql = "DELETE FROM tb_user WHERE username='$username'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		header('Location: dAnggota.php');
	}else{
		die("gagal menghapus...");
	}
?>