<?php

include 'koneksi.php';

$tglterbit=date("Y-m-d H:i:s");
$header1= $_POST['header1'];
$title1=$_POST['title1'];
$isi1=$_POST['isi1'];

mysqli_query($koneksi, "INSERT INTO pengumuman VALUES ('$header1', '$title1','$isi1','$tglterbit')");

echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=pengumumanPros.php'>";
?>   