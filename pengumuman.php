<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<title>Pengumuman</title>
</head>

<body>
	<!-- Heading -->
	<heading>
		<?php include 'modul/heading.php' ?>
	</heading>

	<!-- Navbar -->
	<navbar>
		<?php include 'modul/navbar.php' ?>
	</navbar>

	<!-- Konten -->
	<tbody>
		<tr>
		<?php
			include 'koneksi.php';
			$no = 1;
			$sql = mysqli_query($koneksi, "SELECT * FROM pengumuman");
			while ($text = mysqli_fetch_array($sql)) {
		?>
		</tr>
	<div class="container mt-3">
		<div class="row">
			<!-- Konten kiri -->
			<!--tinggal cngambil output text kedalam class card-->
			<div class=" col bg-white radius">
				<div class="card my-3">
					<div class="card-header text-white"  style="background-color: #3c8dbc;">
					<td><?= $text['header1']; ?></td>
					</div>
					<div class="card-body">
						<h5 class="card-title"><td><?= $text['text']; ?></td></h5>
						<p class="card-text"><td><?= $text['isi']; ?></td></p>

						<a href="#" class="btn btn btn-outline-primary btn-sm">Read More</a>
						<a href="pendaftaran.php" class="btn btn btn-outline-primary btn-sm">Ayok Daftar Sekarang</a>
					</div>
				</div>
			</div>


			<!-- Konten kanan -->
		</div>
	</div>
	<?php } ?>
</tbody>

	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php' ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>