<?php 
 
include('config.php'); 
 
	$kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit= $_POST['penerbit'];
    $th_terbit = $_POST['th_terbit'];
 
    $sql = "UPDATE tb_buku SET kode_buku='$kode_buku', judul='$judul', penulis='$penulis', penerbit='$penerbit', th_terbit='$th_terbit' WHERE kode_buku='$kode_buku'";     
    $query = mysqli_query($koneksi, $sql); 
 
    if($query) {         
    header('Location: dBuku.php');     
    } else {         
    die("Gagal menyimpan perubahan...");     
    } 

?> 