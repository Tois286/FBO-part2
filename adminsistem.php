<?php 
 
session_start();
 
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
   header("Location: index.php");
}
 
?>

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

	<title>Data Siswa</title>
</head>

<body>
	<!-- Heading -->
	<div class=" heading pt-3 pb-1 mb-3">
		<div class="container">
		<center><img src="img\logo1.png" class="gambar logo-navbar" heigth=120px width=90px/></center>
			<h4 class=" text-white"><font size="4">
			<center>Penerimaan Santri Baru Online</font></center>
			</h4>
			<h5 class=" text-white m-minus">
				<font class="text-pondok" size="6">
					<center>PONDOK MODERN AL-GHOZALI</center>
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
						<a class="nav-link active" href="adminsistem.php"><i class="bi bi-card-checklist"></i> Data Siswa</a>
						<a class="nav-link active" href="pengumumanPros.php"><i class="bi bi-bell"></i>Buat Pengumuman</a>
						<a class="nav-link active" href="daftarUser.php"><i class="bi bi-person-plus"></i>Form SuperUser</a>
						<a class="nav-link active" href="dataguru.php"><i class="bi bi-person"></i>Daftar SuperUser</a>
					</div>
				</div>
					<form action="cari.php" method="POST" class="d-flex">
						<input class="form-control" type="cari" placeholder="cari" aria-label="cari" id="cari" name="cari">
						<button class="btn btn-outline-success" type="submit">Search</button>
						<a href="logout.php" class="btn btn-outline-danger btn-sm">
								
						<i class="bi bi-box-arrow-left"></i>
						</i>
					</a>
						<a href="print.php" class="btn btn-outline-warning btn-xs"><i class="bi bi-printer"></i></a>
						<a href="download2.php" class="btn btn-outline-primary btn-xs"><i class="bi bi-file-arrow-down"></i></a>
					</form>
			</div>

		</nav>
	</div>
	<!-- Konten -->
	<div class="container mt-2">
		<font size="2">
		<div class="row">
			<div class="container bg-white radius">
				<table class="table text-center mt-2">
					<thead class="table-primary radius">
						<tr>
							<th scope="col">No</th>
							<th scope="col">No. Pendaftaran</th>
							<th scope="col">Username</th>
							<th scope="col">kode Santri</th>
							<th scope="col">Nama Lengkap</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Tanggal Pendaftaran</th>
							<th scope="col">Jenjang</th>
							<th scope="col">Email</th>
							<th scope="col">Status santri</th>
							<th scope="col">Asal Sekolah</th>
							<th scope="col">No.Telphone</th>
							<th scope="col">info pembayaran</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							include 'koneksi.php';
							$no = 1;
							$sql = mysqli_query($koneksi, "SELECT * FROM data_siswa");
							while ($data = mysqli_fetch_array($sql)) {
							?>
						</tr>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $data['id_siswa']; ?></td>
							<td><?= $data['username_siswa']; ?></td>
							<td><?= $data['kode']; ?></td>
							<td><?= $data['nama_siswa']; ?></td>
							<td><?= $data['Jenis_kelamin']; ?></td>
							<td><?= $data['tanggal_daftar']; ?></td>
							<td><?= $data['jenjang']; ?></td>
							<td><?= $data['email_siswa']; ?></td>
							<td><?= $data['status']; ?></td>
							<td><?= $data['asal_skolah']; ?></td>
							<td><?= $data['no_telphon']; ?></td>
							<td><?= $data['judul_file_pdf']; ?></td>
						<td>
						<a href="edit.php?id= <?= $data['id_siswa']; ?>" class="btn btn-outline-primary btn-xs"><i class="bi bi-pencil-square"></i></a>
						<a href="hapus.php?id= <?= $data['id_siswa']; ?>" class="btn btn-outline-danger btn-xs"><i class="bi bi-trash3"></i></a>
						</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div></font>

	<!-- footer -->
	<div class="container-fluid my-3 text-center heading text-white">
		<p>Copyright @ 2023 <a href="index.php" class=" text-white">Pesantren Al-Ghozali</a><br>
		Create_By @ 2023 <a href="https://www.instagram.com/tois_n10/?igshid=ZDdkNTZiNTM%3D" class=" text-white">Toto_Iswanto</a></p>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>