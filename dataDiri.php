<!DOCTYPE HTML>
    <html lang="en">
        <head>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="kp/style.css" />
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CETAK PRINT DATA PENDAFTARAN</title>
        </head>

		<body>
		<center>
		<div class="container">
		<table class="table text-center">
			<tr>
					<?php
							include 'koneksi.php';

							$no = 1;
							session_start();
							$sql = mysqli_query($koneksi, "SELECT * FROM `data_siswa` JOIN tb_gambar ON data_siswa.id_siswa = tb_gambar.id_siswa WHERE data_siswa.id_siswa='".$_SESSION['id']."'");
							while ($data = mysqli_fetch_array($sql)) {
						?>
				<td>
					<img src="data:image/jpeg;base64,<?php echo base64_encode($data['gambar']) ?>"width="200px" height="200px">
				</td>
				<table border="0" style="width:50%">
				<tr><td><p scope="col">No. Pedaftaran </td><td>:</td><td> <?= $data['id_siswa']; ?></td></tr></p>
				<tr><td><p scope="col">kode Peserta </td><td>: </td><td><?= $data['kode']; ?></td></tr></p>
				<tr><td><p scope="col">Username </td><td>:</td><td> <?= $data['username_siswa']; ?></td><tr></p>
				<tr><td><p scope="col">Nama Lengkap </td><td>:</td><td> <?= $data['nama_siswa']; ?></td><tr></p>
				<tr><td><p scope="col">Tempat Lahir </td><td>:</td><td> <?= $data['tempat']; ?></td></tr></p>
				<tr><td><p scope="col">Jenis Kelamin </td><td>:</td><td> <?= $data['Jenis_kelamin']; ?></td></tr></p>
				<tr><td><p scope="col">Jenjang </td><td>:</td><td> <?= $data['jenjang']; ?></td></tr></p>
				<tr><td><p scope="col">Email </td><td>:</td><td> <?= $data['email_siswa']; ?></td></tr></p>
				<tr><td><p scope="col">No.tpln </td><td>:</td><td> <?= $data['no_telphon']; ?></td></tr></p>
                </tr>
					</tr>
					<?php } ?>
							</left>
            <script>
                window.print();
            </script>
			</div></div></center>
        </body>
</HTML>