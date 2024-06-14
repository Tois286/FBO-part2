<?php
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
session_start();

$query_sql = "SELECT * FROM data_admin WHERE username = '$username' AND password = '$password'";
$query_sql2 = "SELECT * FROM superuser WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);
$result2 = mysqli_query($koneksi, $query_sql2);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_row($result)) {
        $_SESSION['username'] = $row[1];
        $_SESSION['password'] = $password;
    }
    mysqli_free_result($result);
    echo "<script>alert('Anda Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=adminsistem.php'>";
} else if (mysqli_num_rows($result2)) {
    while ($row = mysqli_fetch_row($result2)) {
        $_SESSION['username'] = $row[1];
        $_SESSION['password'] = $password;
    }
    mysqli_free_result($result2);
    echo "<script>alert('Admin Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=datasiswa.php'>";
} else {
    echo "<h2>Username atau Password Salah!</h2>";
}
