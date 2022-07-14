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
<div class="col-md-10 p-5 pt-3">
<h3 class="text-center">Input Data Anggota Perpustakaan SMKN 1 Cibinong</h3><hr>

  <form action="aksiAnggota.php" method="POST">

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-5">
      <input type="text" name="username" class="form-control">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" name="nama" class="form-control">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="text" name="password" class="form-control">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-5">
      <input type="date" name="tgl_lahir" class="form-control">
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-5">
      <input type="text" name="kelas" class="form-control">
    </div>
  </div>

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-5">
        <input type="text" name="jurusan" class="form-control">
    </div>
    </div>

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nomor Telepon</label>
    <div class="col-sm-5">
        <input type="number" name="no_tlp" class="form-control">
    </div>
    </div>

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
        <input type="email" name="email" class="form-control">
    </div>
    </div>

    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-5">
        <input type="text" name="level" value="Anggota" class="form-control" readonly>
    </div>
    </div>

  <div class="text-center">
  <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
  <a href="iAnggota.php" class="btn btn-success">BATAL</a>
  </div>
</form>
</div>


</body>
</html>