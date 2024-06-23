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

	<title>Profil Pimpinan</title>
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
            <img src="img/calon.jpg" class="d-block w-100 radius mt-2 mb-2" style="height: 500px; width: auto;">
			</div>

			<!-- Konten Misi -->
			<div class="col-sm-6 bg-white radius card" style="width: 49%;margin-left: 10px;">
				<h3 style="padding: top 50px;">Pimpinan Yayasan</h3>
				
			</div>
		</div>
        <!-- menambah content -->
	<div class="container mt-3">
		<div class="row">
			<div class="col bg-white radius p-3">
				<h2>Catatan Khusus Lainnya Diluar Biaya PSB :</h2>
				<ol>
					<li>Paket Buku Umum, Kitab Kepesantrenan, dan LKS</li>
					<li>Seragam Umum SMP/SMA (Putih/biru atau Abu-abu/Jilbab), dan juga Perlengkapan lainnya</li>
					<li>Dalam 1 tahun ajaran, ada biaya rutin lain setiap triwulan yang harus disiapkan oleh wali santri yakni : PAS 1 Bulan Desember, PTS 2 bulan Maret & PAS 2 dibulan Juni</li>
					<li>jika ada program & kegiatan khusus lainnya seperti :</li>
				</ol>
				<ul>
					<li>Ziarah Ulama/Aulia</li>
					<li>Kunjungan Ke Museum</li>
					<li>Kunjuangan Ke PT/Pabrik/UKM</li>
					<li>Muhibbah antar Pesantren</li>
					<li>Pelatihan Khusus di Sebuah CV/PT yang biasanya dilaksanakan pasca PTS atau PAS</li>
					<li>dan lain-lain</li>
				</ul>

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