<?php

include 'koneksi.php';

$tgldaftar=date('d-m-y');
$tgl = $_POST['tgl'];

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password);
$name = $_POST['name'];
$tempat = $_POST['tempat'];
$asal_skolah=$_POST['asal_skolah'];
$nisn=$_POST['nisn'];
$email = $_POST['email'];
$no_telphon = $_POST['no_telphon'];
$no_skhun=$_POST['no_skhun'];
$ijazah=$_POST['ijazah'];
$nik=$_POST['nik'];
if (isset($_POST['jenis_kelamin'])) {

    $jenis_kelamin=$_POST['jenis_kelamin'];
    echo "<br>".$jenis_kelamin;
}

if (isset($_POST['jenjang'])) {
    
        $jenjang=$_POST['jenjang'];
        echo "<br>".$jenjang;
}

if (isset($_POST['status'])) {
        $status=$_POST['status'];
        echo "<br>".$status;
}

$text="Blum membayar";
$text1="file kosong";
$text2="dapatkan kode";
$id=mysqli_query($koneksi, "INSERT INTO data_siswa VALUES ('','$text2','$username', '$password', '$password2', '$name','$tempat','$tgl','$tgldaftar','$jenis_kelamin', '$jenjang','$status', '$email','$no_telphon','$asal_skolah','$nisn','$no_skhun','$ijazah','$nik','$text1','$text','')");

echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=upload.php?id=".mysqli_insert_id($koneksi)."'>";
?>  