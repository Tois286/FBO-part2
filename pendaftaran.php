<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- html datepicker-->
	<link rel="stylesheet" href="datepicker/date_html.js">
	<link rel="stylesheet" href="datepicker/datepicker.js">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
						<a class="nav-link " href="index.php"><i class="bi bi-house-door"></i> Beranda</a>
						<a class="nav-link active" href="pendaftaran.php"><i class="bi bi-person-plus"></i> Pendaftaran</a>
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
			<!-- Konten kiri -->
			<div class=" col bg-white radius">
				gunakan (-) untuk mengkosongkan form
				<p class="h8 pt-3">INPUT DATA SISWA </p>
				<form action="pendaftaranAct.php" method="POST" >
					<div class="container-fluid bg-abu radius">
						<div class="mb-3 pt-1">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username" autofocus Required>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="masukan password anda" Required>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Nama Lengkap </label>
							<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap anda" name="name" Required>
						</div>
						<div class="mb-3">
						<label for="name" class="form-label">tempat </label>
							<input type="text" class="form-control" id="tempat" placeholder="masukan nama lengkap anda" name="tempat" Required><br>
						<form action="<?php echo $_SERVER["PHP_SELF"];?>"Required>
             				Tanggal Lahir: <br>
			 					<input type="date" name="tgl" Required><br>
			 				</form><br>
							 <p1 class="black m-minus" Required>Jenis Kelamin :<br>
  								<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    							<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>

							<p1 class="black m-minus" Required>Pilih Jenjang :<br>
							<input type="radio" name="jenjang" value="SMP"> SMP ISLAM AL-GHOZALI<br>
							<input type="radio" name="jenjang" value="SMA"> SMA ISLAM AL-GHOZALI</p1><br>
							<br>
							<p2 class="black m-minus" Required>Pilih Status Santri :</p2><br>
							<input type="radio" name="status" value="Mukim"> Mukim<br>
							<input type="radio" name="status" value="Non-Mukim"> Non-Mukim</p2><br>
							</form>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" placeholder="masukan email anda" name="email" Required>
							<script> 
							@error('username')
                                <p style="color: rgb(253, 21, 21)">{("isikan data diri")}</p>
                            @enderror
							</script>
						</div>
						<div class="mb-3">
							<label for="no_telphon" class="form-label">Masukan Nomor Telpon </label>
							<input type="no_telphon" class="form-control" id="notlpn" placeholder="Masukan nomor telphon anda" name="no_telphon" Required>
							<script> 
							@error('username')
                                <p style="color: rgb(253, 21, 21)">{("isikan data diri")}</p>
                            @enderror
							</script>
						</div>
						<div class="mb-3">
							<label for="asal_skolah" class="form-label">Asal Sekolah </label>
							<input type="asal_skolah" class="form-control" id="asal_skolah" placeholder="masukan nama sekolah asal" name="asal_skolah" Required>
						</div>
						<div class="mb-3">
							<label for="nisn" class="form-label">Nomor Induk Siswa Nasional </label>
							<input type="nisn" class="form-control" id="nisn" placeholder="Masukan nomor nisn" name="nisn">
						</div>
						<div class="mb-3">
							<label for="no_skhun" class="form-label">No. SKHUN (SD/MI)/ (SMP/MTS)</label>
							<input type="no_skhun" class="form-control" id="no_skhun" placeholder="Masukan nomor skhun" name="no_skhun">
						</div>
						<div class="mb-3">
							<label for="ijazah" class="form-label">Nomor Seri Ijazah</label>
							<input type="ijazah" class="form-control" id="ijazah" placeholder="Masukan nomor seri ijazah" name="ijazah">
						</div>
						<div class="mb-3">
							<label for="nik" class="form-label">NIK (Nomor Induk Keluarga) calon santri</label>
							<input type="nik" class="form-control" id="nik" placeholder="Masukan nik(nomor induk keluarga) calon santri" name="nik" Required>
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
</body>

</html>