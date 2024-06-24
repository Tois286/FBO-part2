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
            <img src="img/gurubesar.jpg" class="d-block w-100 radius mt-2 mb-2" style="height: 500px; width: auto;">
			</div>

			<!-- Konten Misi -->
			<div class="col-sm-6 bg-white radius card" style="width: 49%;margin-left: 10px;">
				<h3 style="padding: top 50px;">Pimpinan Yayasan</h3>
				<p>KH. Nanang Kosim Lc., lahir di Jakarta pada tanggal 30 September 1973, beliau menempuh pendidikan di Pondok Pesantren As-Shidiqiyah 01 jakarta hingga tamat Sekolah Menengah Atas (SMA) waktu menempuh mendidikan beliau tinggal di Kp. Setu Tangerang Selatan (dekat UNPAM Victor) setelah tamat Sekolah beliau masih haus akan ilmu sehingga melanjutkan Sekolah Tinggi di Cairo, Mesir, namun tidak cukup sampai situ, setelah lulus Sarjana S1 di Cairo beliau masih terus mencari dan mendatangi Kiyai-Kiyai Sepuh untuk memperdalam ilmu dan memperluas akan wawasan.</p>
				<p>Setelah mendapat restu dari para Guru, Beliau pun membuka Majlis kecil-kecilan berupa majlis Sholawat & dzikir untuk Umum dan mengajarkan ilmu yang beliau dapatkan sambil berdakwah, namun siapa sangka Majlis tersebut makin banyak peminat nya dan ada beberapa warga sekitar ataupun teman-teman beliau yang menitipkan anak nya untuk menuntut ilmu bersama Beliau,</p>
				<p>Pada tanggal 4 Maret 2007 beliau pun resmi mendirikan pondok Pesantren yang disambut baik oleh warga sekitar di daerah pengasinan Gn. Sindur bogor yang berawal saung kayu hingga sekarang memiliki gedung Sekolah dan bangunan yang indah. </p>
				
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