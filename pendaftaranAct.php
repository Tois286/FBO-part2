<?php

include 'koneksi.php';

$tgldaftar = date('Y-m-d'); // Using a standard date format
$tgl = $_POST['tgl'];

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = md5($password);
$name = $_POST['name'];
$tempat = $_POST['tempat'];
$asal_skolah = $_POST['asal_skolah'];
$nisn = $_POST['nisn'];
$no_skhun = $_POST['no_skhun'];
$ijazah = $_POST['ijazah'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'] ?? null;
$jenjang = $_POST['jenjang'] ?? null;
$email = $_POST['email'];
$no_telphon = $_POST['no_telphon'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$ks = $_POST['berkebutuhan'];
$transport = $_POST['tranportasi'];
$kps = $_POST['kps'];
$no_kps = $_POST['no_kps'] ?? null;
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$penghasilan_ayah = $_POST['penghasilan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$nama_wali = $_POST['nama_wali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$pendidikan_wali = $_POST['pendidikan_wali'];
$tb = $_POST['tb'];
$bb = $_POST['bb'];
$jarak_sklh = $_POST['jarak_sekolah'];
$waktu_tempuh = $_POST['waktu_ditempuh'];
$jumlah_sdr = $_POST['jumlah_sdr'];
$penerima_beasiswa = $_POST['penerima_beasiswa'];
$jenis_beasiswa = $_POST['jenis_beasiswa'];
$sumber_beasiswa = $_POST['sumber_beasiswa'] ?? null;
$tahun_mulai = $_POST['tahun_mulai'];
$tahun_akhir = $_POST['tahun_akhir'];

// Prepare values for insertion
$kode = "dapatkan kode"; // Example value; adjust as necessary

$query = "INSERT INTO data_siswa (
    id_siswa, kode, username_siswa, password_enk, password2,
    nama_siswa, tempat, tanggal, tanggal_daftar, Jenis_kelamin,
    jenjang, email_siswa, no_telphon, asal_sekolah, nisn,
    skhun, no_ijazah, nik, nama_file_pdf, judul_file_pdf,
    keterangan, agama, alamat, berkebutuhan, transportasi,
    kps, no_kps, nama_ayah, pekerjaan_ayah, pendidikan_ayah,
    penghasilan_ayah, nama_ibu, pekerjaan_ibu, pendidikan_ibu,
    penghasilan_ibu, nama_wali, pekerjaan_wali, pendidikan_wali,
    tb, bb, jarak_sekolah, waktu_ditempuh, jumlah_sdr,
    penerima_beasiswa, jenis_beasiswa, sumber_beasiswa,
    tahun_mulai, tahun_akhir
) VALUES (
    NULL, '$kode', '$username', '$password', '$password2',
    '$name', '$tempat', '$tgl', '$tgldaftar', '$jenis_kelamin',
    '$jenjang', '$email', '$no_telphon', '$asal_skolah', '$nisn',
    '$no_skhun', '$ijazah', '$nik', '', '', 
    '', '$agama', '$alamat', '$ks', '$transport',
    '$kps', '$no_kps', '$nama_ayah', '$pekerjaan_ayah',
    '$pendidikan_ayah', '$penghasilan_ayah', '$nama_ibu', '$pekerjaan_ibu',
    '$pendidikan_ibu', '$penghasilan_ibu', '$nama_wali', '$pekerjaan_wali',
    '$pendidikan_wali', '$tb', '$bb', '$jarak_sklh', '$waktu_tempuh',
    '$jumlah_sdr', '$penerima_beasiswa', '$jenis_beasiswa', '$sumber_beasiswa',
    '$tahun_mulai', '$tahun_akhir'
)";

$id = mysqli_query($koneksi, $query);

if ($id) {
        echo "<script>alert('Data Berhasil ditambah')</script>";
        echo "<meta http-equiv='refresh' content='0; URL=upload.php?id=" . mysqli_insert_id($koneksi) . "'>";
} else {
        echo "Error: " . mysqli_error($koneksi);
}
