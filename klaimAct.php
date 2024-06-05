<?php

include 'koneksi.php';

$id_siswa = $_POST['id_siswa'];
$username = $_POST['username'];
$kode = $_POST['kode'];
$mtk = $_POST['mtk'];
$ind = $_POST['ind'];
$ing = $_POST['ing'];
$mtq = $_POST['mtq'];

$n_mtk = $mtk * 0.2;
$n_ing = $ing * 0.2;
$n_ind = $ind * 0.3;
$n_mtq = $mtq * 0.4;

$ket = $n_mtk + $n_ing + $n_ind + $n_mtq;

if ($ket>=80){
$grade = "A Lulus";
}
else if ($ket>=70){
$grade = "B Lulus";
}
else if ($ket>=50){
$grade = "C Lulus";
}
else if ($ket>=40){
$grade = "D tidk Lulus";
}
else
{
$grade = "E tidak Lulus";
}

$id=mysqli_query($koneksi, "INSERT INTO ujian VALUES ('$id_siswa','', '$username','$kode', '$n_mtk','$n_ind','$n_ing','$n_mtq','$ket','$grade')");

echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=login.php?id=".mysqli_insert_id($koneksi)."'>";
?>   