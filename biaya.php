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

	<title>Biaya & kegiatan</title>
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
	<navbar>
        <?php include 'modul/navbar.php'; ?>
    </navbar>
	

	<!-- Konten 3-->
	<div class="container mt-3">
		<div class="row justify-content-center">
			<!-- Konten Visi -->
			<div class="col-sm-6 bg-white radius card" style="width: 49%; margin-right: 10px;">
				<h5 class="text-center">ESKUL KEPESANTRANAN</h5>
				<ol>
					<li>Malam Jum'at : Ratib Haddad dan Sholawatan bersama</li>
					<li>Malam Sabtu : Tahlil dan Majlis Ta'lim Umum</li>
                    <li>Malam Ahad : Latihan Barjanzi dan Muhadloroh</li>
					<li>Hari Ahad : Penjengukan</li>
				</ol>
                <h5 class="text-center">Sebagian Presentasi Santri</h5>
				<ol>
					<li>Juara 3 Lomba Tahfidz Qur'an Tingkat Kecamatan</li>
					<li>Juara 2 Lomba Pidato 3 Bahasa Tingkat Kecamatan</li>
                    <li>Juara 2 Lomba Cerdas Cermat Tingkat Kecamatan</li>
					<li>Juara 1 Lomba IPSI Putra Tingkat Wilayah Jampang, Parung</li>
                    <li>Juara 2 MHQ Antar sekolah Swasta se Gunung Sindur</li>
				</ol>
			</div>

			<!-- Konten Misi -->
			<div class="col-sm-6 bg-white radius card" style="width: 49%;margin-left: 10px;">
				<h5 class="text-center">AKTIVITAS HARIAN SANTRI</h5>
				<ol>
					<li>Mendirikan dan menyediakan sarana pendidikan Islam yang baik, nyaman, representatif, dan berkualitas.</li>
					<li>Mewujudkan pendidikan yang Islami, terintegrasi dengan teknologi sebagai sarana dakwah Islamiyah.</li>
				</ol>
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
	</div>



	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php'; ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>