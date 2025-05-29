<!doctype html>
<html lang="en">
<?php
include 'koneksi.php';

$myQry = mysqli_query($koneksi, "select * from periode_pendaftaran");
$mydata = mysqli_fetch_array($myQry);
$txtStatus = $mydata['status'];

?>

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
			<center><img src="img\logo.png" class="gambar logo-navbar" heigth=120px width=90px /></center>
			<h4 class=" text-white">
				<font size="4">
					<center>Penerimaan Santriwan & SantriWati Baru Online
				</font>
				</center>
			</h4>
			<h5 class=" text-white m-minus">
				<font class="text-pondok" size="6">
					<center>PONDOK PESANTREN DAARUT TAZKIA</center>
				</font>
			</h5>

			<h6 class="text-white m-minus text-alamat-on-navbar">
				<font size="3">
					<center>Jl. Kp. Cibarengkok No.23, Pengasinan, Kec. Gn. Sindur, Kabupaten Bogor, Jawa Barat 16340
				</font>
				</center>
			</h6>

		</div>
	</div>

	<!-- Navbar -->
	<?php include 'modul/navbar.php' ?>



	<!-- Konten -->
	<div class="container mt-3">
		<div class="row">
			<!-- Konten kiri -->
			<div class=" col bg-white radius">
				<?php if ($txtStatus == '1') { ?>
					gunakan (-) untuk mengkosongkan form
					<p class="h8 pt-3">INPUT DATA SISWA </p>
					<form action="pendaftaranAct.php" method="POST">
						<div class="container-fluid bg-abu radius">
							<div class="row">
								<div class="mb-3 pt-1">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username" autofocus Required>
								</div>
								<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<input type="text" class="form-control" id="password" name="password" placeholder="masukan password anda" Required>
								</div>
								<div>
									<p1 class="black m-minus" Required>Pilih Jenjang :<br>
										<input type="radio" name="jenjang" value="SMP"> SMP TAZKIA INSANI<br>
										<input type="radio" name="jenjang" value="SMA"> MA TAZKIA INSANI
									</p1><br><br>
								</div>
								<div class="mb-3">
									<label for="name" class="form-label">Nama Lengkap </label>
									<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap anda" name="name" Required>
								</div>
								<div>
									<p1 class="black m-minus" Required>Jenis Kelamin :<br>
										<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
										<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>
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
								<div class="col-md-3 mb-3">
									<label for="name" class="form-label">tempat </label>
									<input type="text" class="form-control" id="tempat" placeholder="masukan nama lengkap anda" name="tempat" Required>
								</div>
								<div class="col-md-3 mb-3">
									<label for="" class="form-label">Tanggal Lahir</label>
									<input class="form-control" type="date" name="tgl" Required>
								</div>
								<br>
								<div>
									<div class="mb-3 pt-1">
										<label for="agama" class="form-label">Agama</label>
										<input type="text" class="form-control" id="agama" placeholder="masukan Agama Anda" name="agama" autofocus Required>
									</div>
								</div>
								<div>
									<p1 class="black m-minus" Required>Berkebutuhan Khusus :<br>
										<input type="radio" name="berkebutuhan" value="Iya"> Iya
										<input type="radio" name="berkebutuhan" value="Tidak"> Tidak<br><br>
								</div>
								<div>
									<div class="mb-3">
										<label for="alamat" class="form-label">Alamat Lengkap </label>
										<input type="text" class="form-control" id="alamat" placeholder="masukan alamat lengkap anda" name="alamat" Required>
									</div>
								</div>
								<div class="mb-3 pt-1">
									<label for="tranfortasi" class="form-label">Alat Tranfortasi Ke Sekolah</label>

									<select class="form-control" name="tranportasi" id="">
										<option value="-">Pilih Transportasi</option>
										<option value="Jalan Kaki">Jalan Kaki</option>
										<option value="Angkutan Umum">Angkutan Umum</option>
										<option value="Motor">Motor</option>
										<option value="Mobil">Mobil</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email" placeholder="masukan email anda" name="email" Required>

								</div>
								<div class="mb-3">
									<label for="no_telphon" class="form-label">Masukan Nomor Telpon </label>
									<input type="no_telphon" class="form-control" id="notlpn" placeholder="Masukan nomor telphon anda" name="no_telphon" Required>

								</div>
								<div class="mb-3">
									<label for="asal_skolah" class="form-label">Asal Sekolah </label>
									<input type="asal_skolah" class="form-control" id="asal_skolah" placeholder="masukan nama sekolah asal" name="asal_skolah" Required>
								</div>
								<div>
									<p1 class="black m-minus" Required>Apakah Sebagai Penerima Kartu PerlindunganSosial (KPS) :<br>
										<input type="radio" name="kps" value="Iya"> Iya
										<input type="radio" name="kps" value="Tidak"> Tidak<br><br>
								</div>
								<div class="mb-3">
									<label for="nama_ayah" class="form-label">Nama Ayah</label>
									<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap Ayah" name="nama_ayah" Required>
								</div>
								<div class="mb-3">
									<label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="pekerjaan_ayah" Required>
								</div>
								<div class="mb-3">
									<label for="pendidikan_ayah" class="form-label">Pendidikan Ayah </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="pendidikan_ayah" Required>
								</div>
								<div class="mb-3">
									<label for="penghasilan_ayah" class="form-label">Penghasilan Ayah </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="penghasilan_ayah" Required>
								</div>
								<div class="mb-3">
									<label for="nama_ibu" class="form-label">Nama Ibu</label>
									<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap Ibu" name="nama_ibu" Required>
								</div>
								<div class="mb-3">
									<label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="pekerjaan_ibu" Required>
								</div>
								<div class="mb-3">
									<label for="pendidikan_ibu" class="form-label">Pendidikan Ibu</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="pendidikan_ibu" Required>
								</div>
								<div class="mb-3">
									<label for="penghasilan_ibu" class="form-label">Penghasilan Ibu </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="penghasilan_ibu" Required>
								</div>
								<div class="mb-3">
									<label for="nama_wali" class="form-label">Nama Wali</label>
									<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap Wali" name="nama_wali" Required>
								</div>
								<div class="mb-3">
									<label for="pekerjaan_wali" class="form-label">Pekerjaan wali</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="pekerjaan_wali" Required>
								</div>
								<div class="mb-3">
									<label for="pendidikan_wali" class="form-label">Pendidikan Wali</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="pendidikan_wali" Required>
								</div>
								<div class="mb-3">
									<label for="tb" class="form-label">Tinggi Badan</label>
									<input type="text" class="form-control" id="name" placeholder="masukan tinggi badan anda" name="tb" Required>
								</div>
								<div class="mb-3">
									<label for="bb" class="form-label">Berat Badan </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="bb" Required>
								</div>
								<div class="mb-3">
									<label for="jarak_sekolah" class="form-label">Jarak Tempat Tinggal ke Sekolah</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="jarak_sekolah" Required>
								</div>
								<div class="mb-3">
									<label for="waktu_ditempuh" class="form-label">Waktu ditempuh Ke Sekolah</label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="waktu_ditempuh" Required>
								</div>
								<div class="mb-3">
									<label for="jumlah_sdr" class="form-label">Jumlah Saudara Kandung </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="jumlah_sdr" Required>
								</div>
								<div>
									<p1 class="black m-minus" Required>Apakah Anda Penerima Beasiswa :<br>
										<input type="radio" name="penerima_beasiswa" value="Iya"> Iya
										<input type="radio" name="penerima_beasiswa" value="Tidak"> Tidak<br><br>
								</div>
								<div class="mb-3">
									<label for="jenis_beasiswa" class="form-label">Jenis Beasiswa </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="jenis_beasiswa" Required>
								</div>
								<div class="mb-3">
									<label for="tahun_mulai" class="form-label">Tahun Mulai </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="tahun_mulai" Required>
								</div>
								<div class="mb-3">
									<label for="tahun_akhir" class="form-label">Tahun Akhir </label>
									<input type="text" class="form-control" id="name" placeholder="masukan jawaban anda" name="tahun_akhir" Required>
								</div>
								<div class="mb-4 pb-2">
									<button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"><i class="bi bi-save2"></i> Submit</button>
									<button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</button>
								</div>

							</div>
						</div>
					</form>
				<?php } else { ?>
					<div class="card my-3">
						<div class="card-header text-white" style="background-color: #3c8dbc;">
						</div>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<h2 class="card-text text-center">Periode Pendaftaran Sedang Ditutup Untuk Informasi lebih lanjut harap Hubungi ADMIN</h2>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php' ?>
	</footer>
</body>

</html>