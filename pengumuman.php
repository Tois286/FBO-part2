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
	<div class="">
		<nav class="container radius navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav">
						<a class="nav-link " href="index.php"><i class="bi bi-house-door"></i> Beranda</a>
						<a class="nav-link" href="pendaftaran.php"><i class="bi bi-person-plus"></i> Pendaftaran</a>
						<a class="nav-link active" href="pengumuman.php"><i class="bi bi-bell"></i>Pengumuman</a>
						<div class="dropdown"><button class="dropbtn"><i class="bi bi-files"></i>pendidikan</button>
						<div class="dropdown-content">
						<a href="https://www.alghozali.ac.id/profil/taman-pendidikan-al-quran-TPQ">Taman Pendidikan Al-Qur'an</a>
						<a href="https://www.alghozali.ac.id/profil/madrasah-ibtidaiyah-mi">Madrasah Ibtidaiyah (MI)</a>
						<a href="https://www.alghozali.ac.id/profil/smp-islam">SMP Islam Al-Ghozali</a>
						<a href="https://www.alghozali.ac.id/profil/sma-islam">SMA Islam Al-Ghozali</a>
						<a href="https://www.alghozali.ac.id/informasi/brosur-kegiatan-dan-biaya">Biaya dan Kegiatan</a>

</div>
</div>
					</div>
				</div>
				<form class="d-flex">
					<a href="login.php" class="btn btn-outline-danger">Login</a>
				</form>
			</div>

		</nav>
	</div>

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