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
	<div class=" heading pt-3 pb-1 mb-3">
		<div class="container">
			<center><img src="img\logo1.png" class="gambar logo-navbar" heigth=120px width=90px /></center>
			<h4 class=" text-white">
				<font size="4">
					<center>Penerimaan Santri Baru Online
				</font>
				</center>
			</h4>
			<h5 class=" text-white m-minus">
				<font class="text-pondok" size="6">
					<center>PONDOK MODERN AL-GHOZALI</center>
				</font>
			</h5>
			<h6 class="text-white m-minus text-alamat-on-navbar">
				<font size="3">
					<center>Jl. Permata No.19, RT.06/RW.05, Curug, Kec. Gn. Sindur, Kabupaten Bogor, Jawa Barat 16340
				</font>
				</center>
			</h6>

		</div>
	</div>

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
						<a class="nav-link " href="pendaftaran.php"><i class="bi bi-person-plus"></i> Buat Akun</a>
						<a class="nav-link " href="pengumuman.php"><i class="bi bi-bell"></i>Pengumuman</a>
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
	<div class="container mt-3">
		<div class="row">
			<!-- Konten Kanan -->
			<div class=" col-8 bg-white radius" style="display: flex; margin-left: auto; margin-right: auto; width: auto;">
				<img src="img/santri.jpg" class="d-block w-100 radius mt-2 mb-2">
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
						<a href="pendaftaran.php" class="btn btn-primary btn-sm"><i class="bi bi-person-plus"></i> Daftar Baru</a>
					</div>
					<div class="row mt-2 ">
						<h6> <strong>Pusat Bantuan :</strong></h6>
					</div>
					<div class="row radius m-0">
						<ul class="text-primary">
							<small>
								<li><a href="http://gg.gg/13fe53">Informasi tentang pendaftaran bisa di tanyakan melalui link (bisa klik disini)</a><br></li>
								<li><a href="https://www.alghozali.ac.id/berita-kegiatan">kegiatan kami akan menjadi berita di website (bisa klik disini)</a></li>
								<li><a href="https://www.instagram.com/pmalghozali/">Follow Instagram Untuk mengikuti kegiatan kami (bisa klik disini)</a></li>
								<li><a href="https://goo.gl/maps/3vXC3McXMiVJNNWk6">Alamat pondok pesantren (bisa di klik disini)</a></li>
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
				<p>Pondok Pesantren Al-Ghozali didirikan pada tahun XXXX, dengan visi dan misi untuk ...</p>
				<p>Fasilitas yang tersedia di pondok pesantren kami meliputi ...</p>
				<p>Program-program unggulan kami adalah ...</p>
				<img src="img/santri.jpg" class="d-block w-100 radius mt-2 mb-2" alt="Profil Pondok">
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="container-fluid my-3 text-center heading text-white">
		<p>Copyright @ 2023 <a href="index.php" class=" text-white">Pesantren Al-Ghozali</a><br>
			Create_By @ 2023 <a href="https://www.instagram.com/tois_n10/?igshid=ZDdkNTZiNTM%3D" class=" text-white">Toto_Iswanto</a></p>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>