<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="assets/style.css"> -->
	<title>DATA MAHASISWA</title>
</head>

<body>
	<div class="p-4 bg-dark text-center text-warning shadow-lg ">
		<h3 class="navbar-brand text-warning text-center">CRUD SIMPLE (PHP + MYSQL)</h3><br>
	</div>
	<div class="py-2 bg-dark">
		<a class="mx-2 text-light btn badges btn-success" href="index.php">KEMBALI</a>
	</div>

	</div>
	<div class="shadow-lg bg-info">
		<h3 class="text-center p-4 py-4 text-light">TAMBAH DATA MAHASISWA</h3>
		<div class="container-fluid py-4">
			<form class="align-items-center text-center" method="post" action="tambah_aksi.php">
				<div class="form-group">
					<input placeholder="Masukkan Nama Anda..." type="text" name="nama">
				</div>
				<div class="form-group">
					<input placeholder="Masukkan NIM ..." type="number" name="nim">
				</div>
				<div class="form-group">
					<input placeholder="Masukkan Jurusan ..." type="text" name="jurusan">
				</div>
				<div class="form-group ">
					<input class="btn btn-primary" type="submit" value="SIMPAN">
				</div>
			</form>
		</div>
	</div>
	<div class="p-4 bg-dark">
		<div class="text-center text-light">
			CRUD SIMPLE 2022 |<i class="text-warning"> Made with Nur4Nto-Project</i>
		</div>
	</div>
	<!-- <div class="text-center border">
		<form class="container text-light justify-content-center" method="post" action="tambah_aksi.php">
			<table class="my-4">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="jurusan"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</div> -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>