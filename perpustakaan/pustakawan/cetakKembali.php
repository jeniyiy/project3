<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan SMKN 1 Cibinong</title>
</head>
<body>
	<center>
		<h2>DATA LAPORAN PENGEMBALIAN</h2>
		<h2>PERPUSTAKAAN SMKN 1 CIBINONG</h2>
	</center>

	<?php 
	include 'config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th>No</th>
			<th>Kode Buku</th>
    		<th>Judul</th>
    		<th>Username</th>
    		<th>Nama</th>
    		<th>Tanggal Pinjam</th>
    		<th>Tanggal Kembali</th>

		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM tb_pengembalian");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['kode_buku']; ?></td>
			<td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tgl_pinjam']; ?></td>
			<td><?php echo $data['tgl_kembali']; ?></td>
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