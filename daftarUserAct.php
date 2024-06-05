<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password);
$guru = $_POST['guru'];
if (isset($_POST['jenis_kelamin'])) {

    $jenis_kelamin=$_POST['jenis_kelamin'];
    echo "<br>".$jenis_kelamin;
}

$id=mysqli_query($koneksi, "INSERT INTO superuser VALUES ('','$username', '$password', '$password2', '$guru','$jenis_kelamin')");

echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=login.php?id=".mysqli_insert_id($koneksi)."'>";
?>   