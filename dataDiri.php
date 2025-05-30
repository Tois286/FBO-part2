<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<title>Formulir Pendaftaran</title>

	<style>
		body {
			font-family: "Times New Roman", Times, serif;
			font-size: 10px;
			margin: 30px;
		}

		.kop {
			text-align: center;
			border-bottom: 3px solid black;
			padding-bottom: 10px;
			margin-bottom: 20px;
		}

		.kop img {
			width: 80px;
			position: absolute;
			top: 10px;
			left: 30px;
		}

		h2 {
			margin: 0;
			font-size: 14px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 10px;
		}

		td {
			padding: 5px;
			vertical-align: top;
		}

		.numbered td:first-child() {
			width: 10%;
		}

		.numbered td:nth-child(2) {
			width: 2%;
		}

		.numbered td:nth-child(3) {
			width: 30%;
		}

		.numbered2 td:first-child() {
			width: 10%;
		}

		.numbered2 td:nth-child(2) {
			width: 2%;
		}

		.numbered2 td:nth-child(3) {
			width: 59%;
		}


		.section-title {
			background: #f0f0f0;
			font-weight: bold;
		}

		.signature {
			margin-top: 40px;
			text-align: right;
		}

		.photo-box {
			margin-top: 20px;
			float: left;
			width: 100px;
			height: 120px;
			border: 1px solid #000;
			margin-left: 10px;
		}

		@media print {
			.section-title {
				background-color: #f0f0f0 !important;
				-webkit-print-color-adjust: exact;
				print-color-adjust: exact;
			}
		}
	</style>
</head>

<body>

	<?php
	include 'koneksi.php';
	session_start();
	$id = isset($_GET['id']) ? $_GET['id'] : $_SESSION['id'];
	$sql = mysqli_query($koneksi, "SELECT * FROM data_siswa JOIN tb_gambar ON data_siswa.id_siswa = tb_gambar.id_siswa WHERE data_siswa.id_siswa = '$id'");
	$data = mysqli_fetch_array($sql);
	?>

	<div class="kop">
		<h2>FORMULIR PENDAFTARAN PESERTA DIDIK SMP TAZKIA INSANI</h2>
	</div>

	<table class="numbered">
		<tr class="section-title">
			<td colspan="6">A. IDENTITAS PESERTA DIDIK</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?= $data['nama_siswa']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?= $data['Jenis_kelamin']; ?></td>
		</tr>
		<tr>
			<td>NISN</td>
			<td>:</td>
			<td><?= $data['nisn']; ?></td>
		</tr>
		<tr>
			<td>Nomor Seri Ijazah</td>
			<td>:</td>
			<td><?= $data['skhun']; ?></td>
		</tr>
		<tr>
			<td>Nomor Induk Pendudukan</td>
			<td>:</td>
			<td><?= $data['nik']; ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><?= $data['tempat']; ?>,<?= $data['tanggal'] ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?= $data['agama']; ?></td>
		</tr>
		<tr>
			<td>Kebutuhan Khusus</td>
			<td>:</td>
			<td><?= $data['berkebutuhan']; ?></td>
		</tr>
		<tr>
			<td>Alamat Tempat Tinggal</td>
			<td>:</td>
			<td><?= $data['alamat']; ?></td>
		</tr>
		<tr>
			<td>Alat Transportasi</td>
			<td>:</td>
			<td><?= $data['transportasi']; ?></td>
		</tr>
		<tr>
			<td>Apakah Sebagai Penerima KPS</td>
			<td>:</td>
			<td><?= $data['kps']; ?></td>
			<td>No. KPS</td>
			<td>:</td>
			<td><?= $data['no_kps'] ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?= $data['email_siswa']; ?></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td>:</td>
			<td><?= $data['no_telphon']; ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?= $data['username_siswa']; ?></td>
		</tr>
		<tr>
			<td>Jenjang</td>
			<td>:</td>
			<td><?= $data['jenjang']; ?></td>
		</tr>
	</table>

	<table class="numbered2" style="margin-top:10px;">
		<tr class="section-title">
			<td colspan="6">B. DATA AYAH KANDUNG</td>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td>:</td>
			<td><?= $data['nama_ayah']; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan Ayah</td>
			<td>:</td>
			<td><?= $data['pekerjaan_ayah']; ?></td>
		</tr>
		<tr>
			<td>Pendidikan Ayah</td>
			<td>:</td>
			<td><?= $data['pendidikan_ayah']; ?></td>
		</tr>
		<tr>
			<td>Penghasilan Ayah</td>
			<td>:</td>
			<td><?= $data['penghasilan_ayah']; ?></td>
		</tr>
	</table>

	<table class="numbered2" style="margin-top:10px;">
		<tr class="section-title">
			<td colspan="6">B. DATA IBU KANDUNG</td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><?= $data['nama_ibu']; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan Ibu</td>
			<td>:</td>
			<td><?= $data['pekerjaan_ibu']; ?></td>
		</tr>
		<tr>
			<td>Pendidikan Ibu</td>
			<td>:</td>
			<td><?= $data['pendidikan_ibu']; ?></td>
		</tr>
		<tr>
			<td>Penghasilan Ibu</td>
			<td>:</td>
			<td><?= $data['penghasilan_ibu']; ?></td>
		</tr>
	</table>

	<table class="numbered2" style="margin-top:10px;">
		<tr class="section-title">
			<td colspan="4">B. DATA WALI</td>
		</tr>
		<tr>
			<td>Nama Wali</td>
			<td>:</td>
			<td><?= $data['nama_wali']; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan Wali</td>
			<td>:</td>
			<td><?= $data['pekerjaan_wali']; ?></td>
		</tr>
		<tr>
			<td>Pendidikan Wali</td>
			<td>:</td>
			<td><?= $data['pendidikan_wali']; ?></td>
		</tr>
	</table>

	<table class="numbered2" style="margin-top:10px;">
		<tr class="section-title">
			<td colspan="4">B. DATA PRIODIK</td>
		</tr>
		<tr>
			<td>Tinggi Bandan</td>
			<td>:</td>
			<td><?= $data['tb']; ?></td>
		</tr>
		<tr>
			<td>Berat Badan</td>
			<td>:</td>
			<td><?= $data['bb']; ?></td>
		</tr>
		<tr>
			<td>Jarak Tempat Tinggal ke Sekolah</td>
			<td>:</td>
			<td><?= $data['jarak_sekolah']; ?></td>
		</tr>
		<tr>
			<td>Waktu Tempuh Berangkat Sekolah</td>
			<td>:</td>
			<td><?= $data['waktu_ditempuh']; ?></td>
		</tr>
	</table>

	<table class="numbered2" style="margin-top:10px;">
		<tr class="section-title">
			<td colspan="4">B. BEASISWA</td>
		</tr>
		<tr>
			<td>Jenis Beasiswa</td>
			<td>:</td>
			<td><?= $data['jenis_beasiswa']; ?></td>
		</tr>
		<tr>
			<td>Sumber Beasiswa</td>
			<td>:</td>
			<td><?= $data['sumber_beasiswa']; ?></td>
		</tr>
		<tr>
			<td>Tahun Mulai</td>
			<td>:</td>
			<td><?= $data['tahun_mulai']; ?></td>
		</tr>
		<tr>
			<td>Tahun Selesai</td>
			<td>:</td>
			<td><?= $data['tahun_akhir']; ?></td>
		</tr>

	</table>
	<div class="photo-box">
		<img src="data:image/jpeg;base64,<?= base64_encode($data['gambar']) ?>" style="width:100%; height:100%;">
	</div>
	<div class="signature">
		<p><?= date('d F Y'); ?></p>
		<p>Peserta Didik</p>
		<br><br><br>
		<p>( <?= $data['nama_siswa']; ?> )</p>
	</div>


	<script>
		window.print();
	</script>
</body>

</html>