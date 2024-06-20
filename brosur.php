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

	<title>Brosur</title>
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
	<!-- Konten -->
	<div class="container mt-3">
		<div class="row">
			<!-- Konten Kanan -->
			<div class=" col-8 bg-white radius" style="display: flex; margin-left: auto; margin-right: auto; width: auto;">
				<img src="img/brosur.jpeg" class="d-block w-100 radius mt-2 mb-2" style="height: 500px; width: auto;">
			</div>

			<!-- Konten Kiri -->
			<div class="col rounded bg-white mt-1 radius box-login">
				<form action="loginAct.php" method="POST">
					<small>
					<div class="row mt-2 ">
						<h6> <strong>Pusat Bantuan :</strong></h6>
					</div>
					<div class="row radius m-0" style="font-size: 20px;">
						<ul class="text-primary">
							<small>
								<li><a href="https://api.whatsapp.com/send?phone=628121379508&text=Halo%20Admin%20Saya%20Mau%20Tanya">Informasi tentang pendaftaran bisa di tanyakan melalui whatsapp (bisa klik disini)</a><br></li>
								<li><a href="galeri.php">kegiatan kami akan selalu update di galeri pondok (bisa klik disini)</a></li>
								<li><a href="https://www.instagram.com/daaruttazkia_official?igsh=MW95dDB0d2hhOTh0MA==">Follow Instagram Untuk mengikuti kegiatan kami (bisa klik disini)</a></li>
								<li><a href="https://maps.app.goo.gl/8CnfWhMwfaXhYKrs6">Alamat pondok pesantren (bisa di klik disini)</a></li>
							</small>
						</ul>
					</div>
                    <h4>Administrasi PSB Sudah Termasuk : </h4>
                    <ol style="font-size: 20px;">
                        <li>Dana Hibbah Pendidikan</li>
                        <li>Administrasi satu bulan awal</li>
                        <li>Seragam (Batik, Koko, dan kaos olahraga)</li>
                        <li>Pengembangan Sarana dan Lahan</li>
                        <li>Sewa Lemari Tiga Tahun</li>
                        <li>Perawatan Sarana Satu Tahun</li>
                        <li>Kegiatan Orientasi Santri</li>
                        <li>Unit Kesehatan Santri</li>
                    </ol>
				</form>
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