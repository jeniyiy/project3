<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan SMKN 1 Cibinong</title>
</head>
<body>
	<center>
		<h2>DATA LAPORAN BUKU</h2>
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
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM tb_buku");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['kode_buku']; ?></td>
			<td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['penulis']; ?></td>
			<td><?php echo $data['penerbit']; ?></td>
			<td><?php echo $data['th_terbit']; ?></td>
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