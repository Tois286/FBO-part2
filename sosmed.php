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

	<title>Sosial Media</title>
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
     <br>
	<div class="card" style="width: 84%; left: 8%;">
        <div class="card-header">
    YouTube
        </div>
        <div class="card-body">
            <h5 class="card-title">DAARUT TAZKIA OFFICIAL</h5>
            <p class="card-text">Bantu kami dengan Subscribe Cheannel YouTube Kami.</p>
            <a href="https://youtube.com/@pondok-pesantren.daarut_tazkia?si=ku2m6T9o5vRnEgBe" class="btn btn-primary">Click Me</a>
        </div>
    </div>
    <br>
	<div class="card" style="width: 84%; left: 8%;">
        <div class="card-header">
    Instagram
        </div>
        <div class="card-body">
            <h5 class="card-title">daaruttazkia_official</h5>
            <p class="card-text">Bantu kami dengan Follow akun Instagram Kami.</p>
            <a href="https://www.instagram.com/daaruttazkia_official?igsh=MW95dDB0d2hhOTh0MA==" class="btn btn-primary">Click Me</a>
        </div>
    </div>
    <br>
	<div class="card" style="width: 84%; left: 8%;">
        <div class="card-header">
    Facebook
        </div>
        <div class="card-body">
            <h5 class="card-title">Pontren Daarut Tazkia</h5>
            <p class="card-text">Marihlah Berteman dengan kami melalui facebook agar mengetahui kegiatan kami.</p>
            <a href="https://www.facebook.com/daarut.tazkia/?locale=id_ID" class="btn btn-primary">Click Me</a>
        </div>
    </div>
    
	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php'; ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>