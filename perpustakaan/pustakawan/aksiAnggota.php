<?php
include 'config.php';

if (isset($_POST['simpan'])) {

	$username=$_POST['username'];
	$nama=$_POST['nama'];
	$password=$_POST['password'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$no_tlp=$_POST['no_tlp'];
	$email=$_POST['email'];
	$level=$_POST['level'];


	mysqli_query($koneksi,"INSERT INTO tb_user VALUES('$username','$nama','$password','$tgl_lahir','$kelas','$jurusan','$no_tlp','$email','$level')");

	header('Location: dAnggota.php?status=sukses');
}
?>