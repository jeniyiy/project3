<?php

include "config.php";

$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);
$level = mysqli_escape_string($koneksi, $_POST['level']);


//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' and level = '$level'");
$user_valid = mysqli_fetch_array($cek_user);

//jika user terdaftar
if($user_valid){
	if ($password == $user_valid['password']) {
		session_start();
		$_SESSION['username'] = $user_valid['username'];
		$_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
		$_SESSION['level'] = $user_valid['level'];

		//uji level
		if ($level == "Pustakawan") {
			header('location:pustakawan/index.php');
		}elseif ($level == "Anggota") {
			header('location:anggota/home_anggota.php');
		}
	}else{
		echo "<script>alert('Maaf Login Gagal, Password salah');
		document.location='login.php'</script>";
	}
}else{
	echo "<script>alert('Maaf Login Gagal, Username tidak terdaftar');
	document.location='login.php'</script>";
}

?>