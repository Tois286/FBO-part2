<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'mahasiswa';

$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
	echo "KONEKSI GAGAL : " . mysqli_connect_error();
}
