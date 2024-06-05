<?php

include 'koneksi.php';
$id=$_GET['id'];
mysqli_query($koneksi, "DELETE `data_siswa` FROM data_siswa JOIN tb_gambar ON data_siswa.id_siswa=tb_gambar.id_siswa WHERE data_siswa.id_siswa = '".$id."' ");
echo "<script> alert('Data Ini Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
?>