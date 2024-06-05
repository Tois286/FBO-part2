<?php

include('koneksi.php');
session_start();
mysqli_query($koneksi, "DELETE FROM superuser WHERE id_guru ='".$_SESSION['id']."' ");
echo "<script> alert('Data Ini Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=adminsistem.php'>";
?>