<?php
include 'config.php';

if (isset($_POST['kembali'])) {
	
	$kode_buku=$_POST['kode_buku'];
	$judul=$_POST['judul'];
	$username=$_POST['username'];
	$nama=$_POST['nama'];
	$tgl_pinjam=$_POST['tgl_pinjam'];
	$tgl_kembali=$_POST['tgl_kembali'];
	$denda=$_POST['denda'];

	mysqli_query($koneksi,"INSERT INTO tb_pengembalian VALUES('$kode_buku', '$judul','$username','$nama','$tgl_pinjam','$tgl_kembali','$denda')");

	header('Location: dKembaliA.php?status=sukses');
}
?>