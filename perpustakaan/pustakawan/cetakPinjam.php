<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan SMKN 1 Cibinong</title>
</head>
<body>
	<center>
		<h2>DATA LAPORAN PEMINJAMAN</h2>
		<h2>PERPUSTAKAAN SMKN 1 CIBINONG</h2>
	</center>

	<?php 
	include 'config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama</th>
			<th>Kode Buku</th>
			<th>Judul</th>
			<th>Tanggal Pinjam</th>

		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM tb_pinjam");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['kode_buku']; ?></td>
			<td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['tgl_pinjam']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>