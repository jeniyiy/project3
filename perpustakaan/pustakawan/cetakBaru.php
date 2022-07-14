<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan SMKN 1 Cibinong</title>
</head>
<body>
	<center>
		<h2>DATA LAPORAN ANGGOTA BARU</h2>
		<h2>PERPUSTAKAAN SMKN 1 CIBINONG</h2>
	</center>

	<?php 
	include 'config.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th>No</th>
			<th>Email</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No Telepon</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM tb_daftar");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['nama_lengkap']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
			<td><?php echo $data['tmptlhr']; ?></td>
			<td><?php echo $data['tgllhr']; ?></td>
			<td><?php echo $data['jk']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['no_tlp']; ?></td>
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