<?php
include 'koneksi.php';
session_start();
if (isset($_POST['keterangan'])) {
    $ket_terpilih = $_POST['keterangan'];
    foreach ($ket_terpilih as $ket) {
        echo "keterengan: " . $ket . "<br>";
    }
} else {
    echo "Tidak ada hobi yang dipilih.";
}
$id=mysqli_query($koneksi, "UPDATE data_siswa SET  keterangan='$ket' WHERE id_siswa='".$_SESSION['id']."'");

echo "<script>alert('Data Berhasil ditambah')</script>";
echo "<meta http-equiv='refresh' content='0; URL=ujian.php?id=".mysqli_insert_id($koneksi)."'>";
?>