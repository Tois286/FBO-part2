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
		<?php include 'modul/heading.php'; ?>
	</heading>

	<!-- Navbar -->
	<div class="">
		<nav class="container radius navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav">
						<a class="nav-link active" href="adminsistem.php"><i class="bi bi-card-checklist"></i> Data Siswa</a>
						<a class="nav-link active" href="pengumumanPros.php"><i class="bi bi-bell"></i>Buat Pengumuman</a>
						<a class="nav-link active" href="daftarUserPros.php"><i class="bi bi-person-plus"></i>Form SuperUser</a>
						<a class="nav-link active" href="dataguru.php"><i class="bi bi-person"></i>Daftar SuperUser</a>
					</div>
				</div>
				<form action="cari.php" method="POST" class="d-flex">
					<input class="form-control" type="cari" placeholder="cari" aria-label="cari" id="cari" name="cari">
					<button class="btn btn-outline-success" type="submit">Search</button>
					<a href="logout.php" class="btn btn-outline-danger btn-sm">

						<i class="bi bi-box-arrow-left"></i>
						</i>
					</a>
					<a href="print.php" class="btn btn-outline-warning btn-xs"><i class="bi bi-printer"></i></a>
					<a href="download2.php" class="btn btn-outline-primary btn-xs"><i class="bi bi-file-arrow-down"></i></a>
				</form>
			</div>

		</nav>
	</div>

	<!-- Konten -->
	<div class="container mt-3">
		<div class="row">
			<!-- Konten kiri -->
			<div class=" col bg-white radius">
				<div class="card my-3">
					<form action="pengumumanAct.php" method="POST">
						<div class="card-header text-white" style="background-color: #3c8dbc;">
							<input type="header1" class="form-control" id="header1" placeholder="masukan text" name="header1">
						</div>
						<div class="card-body">
							<h5 class="card-title"><input type="title1" class="form-control" id="title1" placeholder="masukan text" name="title1"></h5>
							<p class="card-text"><input type="isi1" class="form-control" id="isi1" placeholder="masukan text" name="isi1"></p>

							<a href="#" class="btn btn btn-outline-primary btn-sm">Read More</a>
						</div>
				</div>
				<p><button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"><i class="bi bi-save2"></i> Submit</button>
			</div>

			<!-- Konten bawah -->
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
								<div class="card-header text-white" style="background-color: #3c8dbc;">
									<td><?= $text['header1']; ?></td>
								</div>
								<div class="card-body">
									<font size="2">
										<p>terbit pada tanggal : <?= $text['terbit']; ?></p>
									</font>
									<h5 class="card-title">
										<td><?= $text['text']; ?></td>
									</h5>
									<p class="card-text">
										<td><?= $text['isi']; ?></td>
									</p>

									<td><a href="#" class="btn btn btn-outline-primary btn-sm">Read More</a></td>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</tbody>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php'; ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>