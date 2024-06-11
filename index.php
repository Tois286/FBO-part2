<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	header("Location: index2.php");
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/style1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<title>Beranda</title>
	<style>
		.radius {
			border-radius: 10px;
		}

		@media only screen and (max-width: 600px) {
			.logo-navbar {
				width: 20%;
			}

			.text-pondok {
				font-size: 15px !important;
			}

			.text-alamat-on-navbar {
				justify-content: end;
				display: flex;
			}

			.box-login {
				margin-left: 0px !important;
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
						<a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door"></i> Beranda</a>
						<a class="nav-link " href="galeri.php"><i class="bi bi-images"></i> Galeri Pondok</a>
						<a class="nav-link " href="pengumuman.php"><i class="bi bi-bell"></i>Pengumuman</a>
						<div class="dropdown"><button class="dropbtn"><i class="bi bi-files"></i>pendidikan</button>
							<div class="dropdown-content">
								<a href="brosur.php">Brosur</a>
								<a href="kegiatan.php">Biaya dan Kegiatan</a>
								<a href="https://www.instagram.com/daaruttazkia_official?igsh=MW95dDB0d2hhOTh0MA==">Instagram</a>
							</div>
						</div>
						<a class="nav-link " href="pendaftaran.php"><i class="bi bi-person-plus"></i> Pendaftaran</a>
					</div>
				</div>
				<form class="d-flex">
					<a href="login.php" class="btn btn-outline-danger">Login Admin</a>
				</form>
			</div>

		</nav>
	</div>
	<!-- Konten -->
	<div class="container mt-3">
		<div class="row">
			<!-- Konten Kanan -->
			<div class=" col-8 bg-white radius" style="display: flex; margin-left: auto; margin-right: auto; width: auto;">
				<img src="img/DT.jpg" class="d-block w-100 radius mt-2 mb-2" style="height: 400px; width: auto;">
			</div>

			<!-- Konten Kiri -->
			<div class="col rounded bg-white mt-1 radius box-login">
				<form action="loginAct.php" method="POST">
					<small>
						<div class="form-group pt-1 mb-1">
							<label for="exampleInputEmail1"><b>Username</b>
							</label>
							<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username" placeholder="Enter Username">
						</div>
						<div class="form-group pt-1">
							<label for="exampleInputPassword1"><b>Password</b></label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</small>
					<div class="mt-2 ">
						<button type="submit" class="btn btn-success btn-sm	"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>

					</div>
					<div class="row mt-2 ">
						<h6> <strong>Pusat Bantuan :</strong></h6>
					</div>
					<div class="row radius m-0">
						<ul class="text-primary">
							<small>
								<li><a href="https://api.whatsapp.com/send?phone=628121379508&text=Halo%20Admin%20Saya%20Mau%20Tanya">Informasi tentang pendaftaran bisa di tanyakan melalui whatsapp (bisa klik disini)</a><br></li>
								<li><a href="galeri.php">kegiatan kami akan selalu update di galeri pondok (bisa klik disini)</a></li>
								<li><a href="https://www.instagram.com/daaruttazkia_official?igsh=MW95dDB0d2hhOTh0MA==">Follow Instagram Untuk mengikuti kegiatan kami (bisa klik disini)</a></li>
								<li><a href="https://maps.app.goo.gl/8CnfWhMwfaXhYKrs6">Alamat pondok pesantren (bisa di klik disini)</a></li>
							</small>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- menambah content -->
	<div class="container mt-3">
		<div class="row">
			<div class="col bg-white radius p-3">
				<h2>Profil Pondok Pesantren</h2>
				<p>Pesantren Daarut Tazkia didirikan pada tahun 2007 sebagai wadah perjuangan untuk mengembangkan dakwah islamiyah disaat sudah banyak generasi islam yang yang sudah mulai jauh dan bangga dari nilai-nilai mulia agama islam</p>
				<p>Pesantren ini memiliki Keunggulan Program Pendidikan yang terpadu dimana selain pengetahuan Agama yang merupakan dasar pendidikan formal, juga pengetahuan umum yang merupakan sistem dari DepDikNas. Keunggulan program lain di pesantren ini adalah masih dipelajarinya kitab-kitab salaf kuning yang merupakan rujukan ulama salaf dan modern agar santri dapat lebih mudah memahami agama secara konprehensif sebagai kebijakan moral bagi seorang muslim yang dalam kehidupannya harus tetap beroreantasi akhirat.</p>
				<p>Hal itu kami wujudkan dengan cara memprioritaskan santri untuk sejak dini lebih banyak mempraktekan ajaran Agama sehari-hari seperti sholat berjama'ah, tahajjud, memimpin dzikir, tahlil, doa, dan lain-lain yang sangant dibutuhkan ketika mereka kelak terjun langsung kepada objek dakwah/masyarakat.</p>

			</div>
		</div>
	</div>

	<!-- Konten 3-->
	<div class="container mt-3">
		<div class="row justify-content-center">
			<!-- Konten Visi -->
			<div class="col-sm-6 bg-white radius card" style="width: 49%; margin-right: 10px;">
				<h5 class="text-center">VISI</h5>
				<ol>
					<li>Mendirikan dan menyediakan sarana pendidikan Islam yang baik, nyaman, representatif, dan berkualitas.</li>
					<li>Mewujudkan pendidikan yang Islami, terintegrasi dengan teknologi sebagai sarana dakwah Islamiyah.</li>
				</ol>
			</div>

			<!-- Konten Misi -->
			<div class="col-sm-6 bg-white radius card" style="width: 49%;margin-left: 10px;">
				<h5 class="text-center">MISI</h5>
				<ol>
					<li>Mendirikan dan menyediakan sarana pendidikan Islam yang baik, nyaman, representatif, dan berkualitas.</li>
					<li>Mewujudkan pendidikan yang Islami, terintegrasi dengan teknologi sebagai sarana dakwah Islamiyah.</li>
				</ol>
			</div>
		</div>
	</div>



	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php'; ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>