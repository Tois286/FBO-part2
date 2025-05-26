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
</head>

<body>
	<!-- Heading -->
	<heading>
		<?php include 'modul/heading.php'; ?>
	</heading>

	<!-- Navbar -->
	<div class="">
		<nav class="container radius navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav me-auto mb-2 mb-lg-0">
						<a class="nav-link active" href="adminsistem.php"><i class="bi bi-card-checklist"></i> Data Santri</a>
						<a class="nav-link active" href="pengumumanPros.php"><i class="bi bi-bell"></i> Buat Pengumuman</a>
						<a class="nav-link active" href="daftarUserPros.php"><i class="bi bi-person-plus"></i> Form Guru</a>
						<a class="nav-link active" href="dataguru.php"><i class="bi bi-person"></i> Daftar Guru</a>
						<a class="nav-link active" href="open.php"><i class="bi bi-person"></i> Pendaftaran</a>
					</div>

					<form action="cari.php" method="POST" class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari" id="cari" name="cari">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>

					<div class="d-flex">
						<a href="logout.php" class="btn btn-outline-danger btn-sm me-2">
							<i class="bi bi-box-arrow-left"></i>
						</a>
						<a href="print.php" class="btn btn-outline-warning btn-xs me-2"><i class="bi bi-printer"></i></a>
						<a href="download2.php" class="btn btn-outline-primary btn-xs"><i class="bi bi-file-arrow-down"></i></a>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<!-- Konten -->
	<div class="container mt-2">
		<div class="row">
			<div class="container bg-white radius">
				<div class="table-responsive">
					<table class="table text-center mt-2">
						<thead class="table-primary radius">
							<tr>
								<th scope="col">No</th>
								<th scope="col">No. Pendaftaran</th>
								<th scope="col">Username</th>
								<th scope="col">Kode Santri</th>
								<th scope="col">Nama Lengkap</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Tanggal Pendaftaran</th>
								<th scope="col">Jenjang</th>
								<th scope="col">Email</th>
								<th scope="col">Status Santri</th>
								<th scope="col">Asal Sekolah</th>
								<th scope="col">No. Telepon</th>
								<th scope="col">Info Pembayaran</th>
								<th scope="col" class="sticky-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include 'koneksi.php';
							$no = 1;
							$sql = mysqli_query($koneksi, "SELECT * FROM data_siswa");
							while ($data = mysqli_fetch_array($sql)) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $data['id_siswa']; ?></td>
									<td><?= $data['username_siswa']; ?></td>
									<td><?= $data['kode']; ?></td>
									<td><?= $data['nama_siswa']; ?></td>
									<td><?= $data['Jenis_kelamin']; ?></td>
									<td><?= $data['tanggal_daftar']; ?></td>
									<td><?= $data['jenjang']; ?></td>
									<td><?= $data['email_siswa']; ?></td>
									<td><?= $data['status']; ?></td>
									<td><?= $data['asal_skolah']; ?></td>
									<td><?= $data['no_telphon']; ?></td>
									<td><?= $data['judul_file_pdf']; ?></td>
									<td class="sticky-right action-cell">
										<a href="edit.php?id=<?= $data['id_siswa']; ?>" class="btn btn-outline-primary btn-xs"><i class="bi bi-pencil-square"></i></a>
										<a href="hapus.php?id=<?= $data['id_siswa']; ?>" class="btn btn-outline-danger btn-xs"><i class="bi bi-trash3"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

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