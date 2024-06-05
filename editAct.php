<?php
include('koneksi.php');


$tgl = $_POST['tgl'];


$id = $_POST['id_siswa'];

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password);
$name = $_POST['name'];
$tempat = $_POST['tempat'];
$asal_skolah = $_POST['asal_skolah'];
$nisn = $_POST['nisn'];
$email = $_POST['email'];
$no_telphon = $_POST['no_telphon'];
$skhun = $_POST['no_skhun'];
$no_ijazah = $_POST['ijazah'];
$nik = $_POST['nik'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$jenjang = $_POST['jenjang'];
$status = $_POST['status'];

mysqli_query($koneksi, "UPDATE `data_siswa` SET username_siswa = '$username',password_enk = '$password',password2 = '$password2',nama_siswa = '$name',tempat = '$tempat',tanggal = '$tgl',Jenis_kelamin = '$jenis_kelamin',jenjang='$jenjang',status='$status',email_siswa='$email',no_telphon='$no_telphon',asal_skolah='$asal_skolah'
,nisn='$nisn',skhun='$skhun',no_ijazah=$no_ijazah,nik='$nik' WHERE id_siswa='$id'");

echo "<script> alert('Data Berhasil di Update')</script>";
echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
