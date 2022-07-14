<?php

include('config.php');

  $username = $_GET['username'];
  $sql = "SELECT * FROM tb_pinjam where username = '$username'";
  $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

  while($perpustakaan = mysqli_fetch_array($query))
{
  $username = $perpustakaan['username'];
  $nama = $perpustakaan['nama'];
  $kode_buku = $perpustakaan['kode_buku'];
  $judul = $perpustakaan['judul'];
  $tgl_pinjam = $perpustakaan['tgl_pinjam'];
}
  
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
          <a href="login.php" class="text-dark"><i class="fa-solid fa-right-from-bracket" data-toggle ="tooltip" title="Logout"></i></a>
        </h5>
      </div>
      </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-light mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link text-dark " href="home_anggota.php"><i class="fa-solid fa-gauge mr-3"></i> DASHBOARD</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dBukuA.php"><i class="fa fa-book"></i> BUKU</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="peminjamanA.php"><i class="fa fa-book-reader"></i> PEMINJAMAN</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dPinjamA.php"><i class="fa fa-book-reader"></i> DATA PINJAM</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dKembali.php"><i class="fa fa-archive"></i> PENGEMBALIAN</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="dKembaliA.php"><i class="fa fa-archive"></i> DATA PENGEMBALIAN</a><hr class="bg-dark">
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> LOGOUT</a><hr class="bg-dark">
      </li>
</ul>
</div>
<div class="col-md-10 p-5 pt-5">
  <h3 class="text-center">Edit Data Pinjam | Perpustakaan SMKN 1 Cibinong</h3><hr>

  <form action="prosesEditB.php" method="POST">
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-5">
        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" readonly>
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Buku</label>
    <div class="col-sm-5">
      <input type="text" name="kode_buku" class="form-control" value="<?php echo $kode_buku; ?>">
    </div>
    </div>

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-5">
        <input type="text" name="judul" class="form-control" value="<?php echo $judul; ?>">
    </div>
    </div>

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
    <div class="col-sm-5">
        <input type="number" name="tgl_pinjam" class="form-control" value="<?php echo $tgl_pinjam; ?>">
    </div>
    </div>

  <div class="text-center">
  <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
  <a href="dPinjamA.php" class="btn btn-success">BATAL</a>
  </div>
</form>

</div>
</div>

</body>
</html>