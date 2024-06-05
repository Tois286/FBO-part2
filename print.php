<?php 
 
session_start();
 
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
   header("Location: index.php");
}
 
?>
<!DOCTYPE HTML>
    <html lang="en">
        <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CETAK PRINT DATA PENDAFTARAN</title>
        </head>
        <body>
		<center>
            <?php 
                include 'koneksi.php';
            ?>
                <table border="1" style="width:70%">
                <tr>
                <th scope="col">No</th>
				<th scope="col">kode peserta</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Jenjang</th>
				<th scope="col">Asal Sekolah</th>
				<th scope="col">Registrasi</th>
                </tr>
					<tr>
             			<?php

							$no = 1;
							$sql = mysqli_query($koneksi, "SELECT * FROM data_siswa");
							while ($data = mysqli_fetch_array($sql)) {
						?>
					</tr>
                <tr>
				<td class="text-center"><?= $no++; ?></td>
				<td class="text-center"><?= $data['kode']; ?></td>
				<td class="text-center"><?= $data['nama_siswa']; ?></td>
				<td class="text-center"><?= $data['jenjang']; ?></td>
				<td class="text-center"><?= $data['asal_skolah']; ?></td>
				<td class="text-center"><?= $data['judul_file_pdf']; ?></td>
						</tr>
					<?php } ?>
            <script>
                window.print();
            </script>
			</center>
        </body>
</HTML>