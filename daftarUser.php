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

	<title>Pendaftaran</title>
</head>

<body>
	<!-- Heading -->
	<div class=" heading pt-3 pb-1 mb-3">
		<div class="container">
		<center><img src="img\logo1.png" class="gambar logo-navbar" heigth=120px width=90px/></center>
			<h4 class=" text-white"><font size="4">
			<center>Penerimaan Santri & Santri Wati Baru Online</font></center>
			</h4>
			<h5 class=" text-white m-minus">
				<font class="text-pondok" size="6">
					<center>PONDOK PESANTREN AL-GHOZALI</center>
				</font>
			</h5>
			<h6 class="text-white m-minus text-alamat-on-navbar"><font size="3">
				<center>Jl. Permata No.19, RT.06/RW.05, Curug, Kec. Gn. Sindur, Kabupaten Bogor, Jawa Barat 16340</font></center>
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
						<a class="nav-link active" href="datasiswa.php"><i class="bi bi-card-checklist"></i> Data Siswa</a>
						<a class="nav-link active" href="pengumumanPros.php"><i class="bi bi-bell"></i>Edit Pengumuman</a>
						<a class="nav-link active" href="daftarUser.php"><i class="bi bi-person-plus"></i>Form Guru</a>
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
			<!-- Konten kiri -->
			<div class=" col bg-white radius">
				<p class="h8 pt-3">INPUT DATA GURU</p>
				<form action="daftarUserAct.php" method="POST">
					<div class="container-fluid bg-abu radius">
						<div class="mb-3 pt-1">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username">
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="masukan password anda">
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Nama Lengkap </label>
							<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap anda" name="name">
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">No Guru</label>
							<input type="text" class="form-control" id="guru" placeholder="masukan tempat" name="guru">
						</div>
						<div class="mb-3">
							<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">Pilih Jenis Kelamin : <br>
  								<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    							<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>
						</div>
						<div class="mb-4 pb-2">
							<button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"><i class="bi bi-save2"></i> Submit</button>
							<button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</button>
						</div>
					</div>
				</form>
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