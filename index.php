<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/style.css">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>CRUD SIMPLE</title>
</head>

<body>
	<section class="header bg-dark">
		<div class="container-fluid  text-center">
			<h3 class="navbar-brand text-light">CRUD SIMPLE (PHP + MYSQL)</h3>
		</div>
		<div class="navbar-nav text-center border">
			<ul class="bg-light text-dark border">
				<a href="#" class="p-4 hover:text-red-700">Home</a>
				<a href="#" class="p-4 hover:text-red-700">About</a>
				<a href="#" class="p-4 hover:text-red-700">Contact</a>
			</ul>
		</div>
	</section>
	<section class="container-fluid">
		<div class="p-4 bg-dark text-warning shadow-lg">
			<h2 class="text-3xl font-bold text-center hover:text-red-400">DATA MAHASISWA </h2>
		</div>


		<div class="p-2 border text-center hover:text-orange-200 bg-info">
			<a class="btn text-light hover:text-red-200  hover:bg-slate-600" href="tambah.php">(+) TAMBAH MAHASISWA</a>
		</div>
		<table class="table table-striped table-dark">
			<thead>
				<tr class="shadow-lg">
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">NIM</th>
					<th scope="col">Jurusan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "select * from mahasiswa");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<tbody>
					<tr>
						<th scope="row"><?php echo $no++; ?></th>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['nim']; ?></td>
						<td><?php echo $d['jurusan']; ?></td>
						<td>
							<a class="btn badge btn-success hover:text-red-400" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
							<a class="btn badge btn-warning hover:text-red-800" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
						</td>
					</tr>
				</tbody>
			<?php
			}
			?>
		</table>
	</section>

	<div class="p-4 bg-dark">
		<div class="text-center text-light">
			CRUD SIMPLE 2022 |<i class="text-warning"> Made with Nur4Nto-Project</i>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>