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
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						03.30 - 04.30 : Sholat Tahajjud & Zikir Malam</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						04.30 - 05.00 : Sholat Shubuh dan Khatamul Qur'an</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						05.00 - 06.00 : Belajar Bahasa atau Kitab Salaf</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						06.00 - 07.20 : Sarapan dan persiapan Sekolah</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						07.20 - 14.00 : Belajar Formal</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						14.00 - 15.00 : Rehat Siang</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						15.00 - 17.00 : Sholat Ashar, Tahfidz/Kitab salaf</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						17.00 - 17.30 : Olahraga atau ESKUL lainnya</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						17.30 - 19.00 : Tadarus, Sholat Magrib, Tahfidz/Tahshin Qur'an dan Kitab Salaf</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						19.00 - 19.30 : Sholat Isya Berjama'ah</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						19.30 - 20.00 : Makan Malam</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						20.00 - 21.30 : Belajar Malam (Kajian Kitab salaf)</li>
					<li style="text-size-adjust: 50px; overflow: hidden; text-overflow: ellipsis;">
						21.30 - 03.30 : Istirahat</li>
				</ol>
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