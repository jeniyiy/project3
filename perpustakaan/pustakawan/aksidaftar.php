<?php
include 'config.php';

if (isset($_POST['daftar'])) {
	
	$email=$_POST['email'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$tmptlhr=$_POST['tmptlhr'];
	$tgllhr=$_POST['tgllhr'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$no_tlp=$_POST['no_tlp'];


	mysqli_query($koneksi,"INSERT INTO tb_daftar VALUES('$email','$nama_lengkap','$kelas','$jurusan','$tmptlhr','$tgllhr','$jk','$alamat','$no_tlp')");

	header('Location: list.php?status=sukses');
}
?>