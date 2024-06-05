<?php

include 'koneksi.php';
session_start();
$no = 1;
$sql = "SELECT Jenis_kelamin, jenjang FROM data_siswa WHERE id_siswa='".$_SESSION['id']."'";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
    // Proses data yang diambil dari database
    while ($row = $result->fetch_assoc()) {

        $jenis_kelamin = $row["Jenis_kelamin"];
        $jenjang = $row["jenjang"];
        // Lakukan apa pun yang Anda inginkan dengan nilai-nilai tersebut
    }
    function generate_kode_pendaftaran($auto_increment_value) {
        return "2425" . str_pad($auto_increment_value, 3, '0', STR_PAD_LEFT);
    }
    $sql="SELECT MAX(id_siswa) as max_id FROM data_siswa";
    $result = $koneksi->query($sql);
    while($row = $result->fetch_assoc()){
    $auto_increment_value = $row['max_id'] + 1;
    
    // Memanggil fungsi untuk menghasilkan nomor kode pendaftaran baru
    $newkode = generate_kode_pendaftaran($auto_increment_value);

    echo "Nomor Kode Pendaftaran Baru: " . $newkode;
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}
// Fungsi untuk mengecek jenis kelamin dan jenjang pendidikan
function getGradeValue($jenis_kelamin, $jenjang) {
        // La_kukan konversi huruf kecil untuk memastikan pembandingan tidak case-sensitive
        $jenis_kelamin = strtolower($jenis_kelamin);
        $jenjang = strtolower($jenjang);
        
        // Mengecek jenis kelamin dan jenjang pendidikan
        if ($jenjang === "smp") {
            if ($jenis_kelamin === "laki-laki") {
                return "A";
            } elseif ($jenis_kelamin === "perempuan") {
                return "B";
            }
        } elseif ($jenjang === "sma") {
            if ($jenis_kelamin === "laki-laki") {
                return "C";
            } elseif ($jenis_kelamin === "perempuan") {
                return "D";
            }
        }
        // Jika jenis kelamin atau jenjang pendidikan tidak valid, return nilai lain jika diperlukan
        return "dapatkan kode pendaftaran tahun"; // Ganti dengan nilai yang diinginkan jika jenis kelamin atau jenjang pendidikan tidak valid
    }
$idgender = getGradeValue($jenis_kelamin, $jenjang);
$Kode =$idgender.$newkode;
//tambar file pdf
  if(isset($_POST['tambah'])){

        $judul_pdf = htmlentities($_POST['judul_file_pdf'], ENT_QUOTES);
        $ekstensi_diperbolehkan = array('pdf');
        $file = $_FILES['nama_file_pdf']['name'];
        $x = explode('.', $file);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['nama_file_pdf']['size'];
        $file_tmp = $_FILES['nama_file_pdf']['tmp_name']; 
        $folder = "assets/$file";

      // cek apakah ekstensi nya berupa PDF
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            // maka tambahkan ke folder assets
            if(move_uploaded_file("$file_tmp", "$folder")){ 
			    
                $query  = mysqli_query($koneksi, "UPDATE data_siswa SET  kode='$Kode',nama_file_pdf='$file',judul_file_pdf='$judul_pdf' WHERE id_siswa='".$_SESSION['id']."'");
                if($query){
                    echo '<script>alert("File berhasil di upload!");</script>';
                    echo "<meta http-equiv='refresh' content='0; URL=index2.php?id=".mysqli_insert_id($koneksi)."'>";
                }
            }
            // Cek jika bukan file pdf yang di masukkan
        }else{
            // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
            echo "<script>alert('Ekstensi harus berupa PDF!');
                document.location.href='berkasActsiswa.php';
                </script>";
        } 
    }
?>