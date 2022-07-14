<?php include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan SMKN 1 Cibinong</title>
    <link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9d080f7ece.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand"><b>PERPUSTAKAAN SMKN 1 CIBINONG</b></a>
        <div class="icon">
          <h5>
          <a href="index.php" class="text-dark"><i class="fa-solid fa-right-from-bracket" data-toggle ="tooltip" title="Logout"></i></a>
        </h5>
      </div>
      </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-light mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link text-dark " href="index.php"><i class="fa-solid fa-gauge mr-3"></i> DASHBOARD</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dBuku.php"><i class="fa fa-book"></i> BUKU</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dAnggota.php"><i class="fa-solid fa-user-check"></i> ANGGOTA</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="laporan.php"><i class="fa fa-file-alt"></i> LAPORAN</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dPinjam.php"><i class="fa fa-book-reader"></i> DATA PEMINJAMAN</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dKembali.php"><i class="fa fa-archive"></i> DATA PENGEMBALIAN DAN DENDA</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> LOGOUT</a><hr class="bg-dark">
      </li>
</ul>
</div>
<div class="col-md-10 p-5 pt-5">
	<a href="iAnggota.php" class="btn btn-info">[+] Tambah Data Anggota</a>

<table class="table table-hover table-bordered mt-5">
	<thead>
		<th scope="col">Username</th>
		<th scope="col">Nama</th>
		<th scope="col">Password</th>
    <th scope="col">Tanggal Lahir</th>
    <th scope="col">Kelas</th>
    <th scope="col">Jurusan</th>
    <th scope="col">No Telpon</th>
    <th scope="col">Email</th>
    <th scope="col">Level</th>
		<th scope="col">Opsi</th>
	</thead>
	<tbody>
		<?php
			$sql = "SELECT * FROM tb_user WHERE level = 'Anggota'";

			$query = mysqli_query($koneksi, $sql);
			while($perpustakaan = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$perpustakaan['username']."</td>";
				echo "<td>".$perpustakaan['nama']."</td>";
				echo "<td>".$perpustakaan['password']."</td>";
        echo "<td>".$perpustakaan['tgl_lahir']."</td>";
        echo "<td>".$perpustakaan['kelas']."</td>";
        echo "<td>".$perpustakaan['jurusan']."</td>";
        echo "<td>".$perpustakaan['no_tlp']."</td>";
        echo "<td>".$perpustakaan['email']."</td>";
        echo "<td>".$perpustakaan['level']."</td>";
				echo "<td>";
				echo "<a
						href='editAnggota.php?username=".$perpustakaan['username']."' class='btn btn-info'>Edit</a>";
				echo "<a
						href='hapusAnggota.php?username=".$perpustakaan['username']."' class='btn btn-danger'> Hapus</a>";
				echo "</td>";
				echo "</tr>";

			}

			?>
	</tbody>
</table>
</div>
</div>


	
</body>
</html>