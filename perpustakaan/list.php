<?php include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan SMKN 1 Cibinong</title>
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
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
        <a class="nav-link text-dark" href="login.php"><i class="fa-solid fa-user"></i> LOGIN</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="daftar.php"><i class="fa-solid fa-user"></i> DAFTAR ANGGOTA</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dBuku.php"><i class="fa fa-book"></i> BUKU</a><hr class="bg-dark">
      </li>
</ul>
</div>
<div class="col-md-10 p-5 pt-5">
	<h3 class="text-right">Berhasil Mendaftar!!!</h3>
	<table class="table table-bordered mt-3">
		<thead>
				<th scope="col">Email</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Kelas</th>
				<th scope="col">Jurusan</th>
				<th scope="col">Tempat Lahir</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Alamat</th>
				<th scope="col">No Telepon</th>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM tb_daftar";

			$query = mysqli_query($koneksi, $sql);
			while($perpustakaan = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$perpustakaan['email']."</td>";
				echo "<td>".$perpustakaan['nama_lengkap']."</td>";
				echo "<td>".$perpustakaan['kelas']."</td>";
				echo "<td>".$perpustakaan['jurusan']."</td>";
				echo "<td>".$perpustakaan['tmptlhr']."</td>";
				echo "<td>".$perpustakaan['tgllhr']."</td>";
				echo "<td>".$perpustakaan['jk']."</td>";
				echo "<td>".$perpustakaan['alamat']."</td>";
				echo "<td>".$perpustakaan['no_tlp']."</td>";
				echo "</tr>";

			}

			?>
		</tbody>
	</table>
</div>
</body>
</html>