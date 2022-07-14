<?php 
 
include('config.php'); 
 
	$username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $tgl_lahir= $_POST['tgl_lahir'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $level = $_POST['level'];
 
    $sql = "UPDATE tb_user SET username='$username', nama='$nama', password='$password', tgl_lahir='$tgl_lahir', kelas='$kelas', jurusan='$jurusan', no_tlp='$no_tlp', email='$email', level='$level' WHERE username='$username'";     
    $query = mysqli_query($koneksi, $sql);
 
    if($query) {         
    header('Location: dAnggota.php');     
    } else {         
    die("Gagal menyimpan perubahan...");     
    } 

?> 