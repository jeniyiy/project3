<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan SMKN 1 Cibinong</title>
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/dist/css/signin.css" rel="stylesheet">

</head>
<body class="text-center">		

	<form class="form-signin" method="POST" action="cek_login.php">
		<img class="col-md-12" src="assets/img/logo.png">
		<h1 class="mt-5">LOGIN</h1>

		<div class="form-floating mt-4">
			<input type="text" name="username" class="form-control" placeholder="Username">
			<label>Username</label>
		</div><br>

		<div class="form-floating">
			<input type="password" name="password" class="form-control" placeholder="Password">
			<label>Password</label>
		</div><br>

		<div class="form-floating">
			<select class="form-select" name="level" id="floatingSelect">
				<option value="Pustakawan">Pustakawan</option>
				<option value="Anggota">Anggota</option>
			</select>
			<label for="floatingSelect">Silahkan Pilih</label>
		</div><br>

		<button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
		<p class="mt-5 mb-5 text-muted">&copy;Perpustakaan SMKN 1 Cibinong</p>
	</form>

</body>
</html>