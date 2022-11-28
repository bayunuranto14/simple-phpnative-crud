<!DOCTYPE html>
<html>

<head>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

	<div class="container-fluid bg-dark">
		<h2 class="text-center p-4 text-warning">CRUD SIMPLE (PHP + MYSQL)</h2>
	</div>
	<div class="container-fluid bg-dark">
		<a class="text-warning" href="index.php">KEMBALI</a>
	</div>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "select * from mahasiswa where id='$id'");
	while ($d = mysqli_fetch_array($data)) {
	?>

		<div class="shadow-lg bg-info">
			<h3 class="text-center p-4 py-4 text-light">EDIT DATA MAHASISWA</h3>
			<div class="container-fluid py-4">
				<form class="align-items-center text-center" method="post" action="update.php">
					<table>
						<div class="form-group">
							<label class="text-light">Nama : </label>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
						</div>
						<div class="form-group">
							<label class="text-light">NIM : </label>
							<input type="text" name="nim" value="<?php echo $d['nim']; ?>">
						</div>
						<div class="form-group">
							<label class="text-light">Jurusan : </label>
							<input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="PERBARUI">
						</div>
					</table>
				</form>
			</div>
		</div>
		<div class="p-4 bg-dark">
			<div class="text-center text-light">
				CRUD SIMPLE 2022 |<i class="text-warning"> Made with Nur4Nto-Project</i>
			</div>
		</div>


	<?php
	}
	?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>