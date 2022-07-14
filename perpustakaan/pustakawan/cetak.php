<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan SMKN 1 Cibinong</title>
</head>
<body>
	<center>
		<h2>DATA LAPORAN ANGGOTA</h2>
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
		<th>Password</th>
	    <th>Tanggal Lahir</th>
	    <th>Kelas</th>
	    <th>Jurusan</th>
	    <th>No Telpon</th>
	    <th>Email</th>
	    <th>Level</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM tb_user");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['tgl_lahir']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
			<td><?php echo $data['no_tlp']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['level']; ?></td>
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