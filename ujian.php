<?php

session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	header("Location: index.php");
}

?>
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

	<title>Data Siswa</title>
	<style>
		/* Tabel Responsif */
		@media (max-width: 767px) {
			table {
				display: block;
				width: 100%;
				overflow-x: auto;
				white-space: nowrap;
			}

			th,
			td {
				min-width: 120px;
			}
		}
	</style>
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
						<a class="nav-link active" href="datasiswa.php"><i class="bi bi-card-checklist"></i> Data Siswa</a>
						<a class="nav-link active" href="ujian.php"><i class="bi bi-clipboard2-data"></i>Input kelulusan</a>
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
	<div class="container mt-2">
		<font size="2">
			<div class="row">
				<div class="container bg-white radius">
					<table class="table text-center mt-2">
						<thead class="table-primary radius">
							<tr>
								<th scope="col">No. Pendaftaran</th>
								<th scope="col">Username</th>
								<th scope="col">Kode Santri</th>
								<th scope="col">Nama Lengkap</th>
								<th scope="col">info pembayaran</th>
								<th scope="col">keterangan</th>
								<th scope="col" class="sticky-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								include 'koneksi.php';
								$no = 1;
								$sql = mysqli_query($koneksi, "SELECT * FROM data_siswa");
								while ($data = mysqli_fetch_array($sql)) {
								?>
							</tr>
							<tr>
								<td><?= $data['id_siswa']; ?></td>
								<td><?= $data['username_siswa']; ?></td>
								<td><?= $data['kode']; ?></td>
								<td><?= $data['nama_siswa']; ?></td>
								<td><?= $data['judul_file_pdf']; ?></td>
								<td><?= $data['keterangan']; ?></td>
								<td class="sticky-right action-cell">
									<form action="ujianAct.php" method="post">
										<input type="checkbox" name="keterangan[]" value="Lulus"> Lulus<br>
										<input type="checkbox" name="keterangan[]" value="Tidak"> tidak<br>

										<input type="submit" value="Simpan" class="btn btn-outline-success btn-sm">
									</form>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
	</div>
	</font>
	<style>
		table td.action-cell {
			background-color: white !important;
			/* Atur latar belakang untuk kolom "Action" */
		}

		.sticky-right {
			position: sticky;
			right: 0;
			z-index: 2;
		}
	</style>

	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php'; ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>