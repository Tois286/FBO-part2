<?php
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
session_start();

$query_sql2 = "SELECT * FROM data_admin WHERE username = '$username' AND password = '$password'";
$query_sql3 = "SELECT * FROM superuser WHERE username = '$username' AND password = '$password'";

$result2 = mysqli_query($koneksi, $query_sql2);
$result3 = mysqli_query($koneksi, $query_sql3);

if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_row($result2)) {
        $_SESSION['id'] =  $row[0];
        $_SESSION['username'] = $row[1];
        $_SESSION['password'] = $password;
    }
    mysqli_free_result($result2);
    echo "<script>alert('Anda Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=adminsistem.php'>";
} else if (mysqli_num_rows($result3)) {
    while ($row = mysqli_fetch_row($result3)) {
        $_SESSION['id'] =  $row[0];
        $_SESSION['username'] = $row[1];
        $_SESSION['password'] = $password;
    }
    mysqli_free_result($result3);
    echo "<script>alert('Admin Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
} else {
    echo "<h2>Username atau Password Salah!</h2>";
}