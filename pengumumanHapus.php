<?php

include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM `pengumuman` WHERE id_pengumuman='" . $id . "' ");
echo "<script> alert('Data Ini Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=adminsistem.php'>";
