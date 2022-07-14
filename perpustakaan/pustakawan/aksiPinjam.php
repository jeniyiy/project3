<?php
include 'config.php';

if (isset($_POST['pinjam'])) {
	
	$id_anggota=$_POST['id_anggota'];
	$nama=$_POST['nama'];
	$kode_buku=$_POST['kode_buku'];
	$judul=$_POST['judul'];
	$tgl_pinjam=$_POST['tgl_pinjam'];

	mysqli_query($koneksi,"INSERT INTO tb_pinjam VALUES('$id_anggota','$nama','$kode_buku', '$judul','$tgl_pinjam')");

	header('Location: dPinjam.php?status=sukses');
}
?>