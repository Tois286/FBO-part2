<?php

include 'koneksi.php';
$no = 1;
session_start();
mysqli_query($koneksi, "TRUNCATE TABLE pengumuman");
echo "<script> alert('Data Ini Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
?>