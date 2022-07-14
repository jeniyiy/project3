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
  <h2 class="text-center">DATA PENGEMBALIAN</h2>
  <table class="table table-hover table-bordered mt-5">
  <thead>
    <th scope="col">Kode Buku</th>
    <th scope="col">Judul</th>
    <th scope="col">Username</th>
    <th scope="col">Nama</th>
    <th scope="col">Tanggal Pinjam</th>
    <th scope="col">Tanggal Kembali</th>
    <th scope="col">Denda</th>
    <th scope="col">Status</th>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM tb_pengembalian";

      $query = mysqli_query($koneksi, $sql);
      while($perpustakaan = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$perpustakaan['kode_buku']."</td>";
        echo "<td>".$perpustakaan['judul']."</td>";
        echo "<td>".$perpustakaan['username']."</td>";
        echo "<td>".$perpustakaan['nama']."</td>";
        echo "<td>".$perpustakaan['tgl_pinjam']."</td>";
        echo "<td>".$perpustakaan['tgl_kembali']."</td>";
        echo "<td>".$perpustakaan['denda']."</td>";

        echo "<td>";
        echo "<button>Sudah Dikembalikan</button>";
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