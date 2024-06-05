
<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Profile Santri Pondok Modern Al-Ghozali</title>


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-main.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

<body>
    
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
        <nav>
            <!--logo pondok di bar kiri-->
          <div class="logo">
              <img src="img/logopondok.png" alt="">
          </div>
          <div class="mini-logo">
              <img src="img/logo1.png" alt="" heigth=100px width=70px>
          </div>
<!--menu menu dalam side bar-->
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>Profile</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Upload & Soal Test</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Seragam</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Pengumuman</em></a></li>
          </ul>
        </nav>
        
<!--slide pertama pada menu home-->
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-9">
                      <h2>Selamat datang</h2>
                      <p>Terimakasih telah melakukan pengisian formulir pendaftaran silahkan Cek Biodata Diri pada Menu <em>Profile</em> untuk melihat hasil pengisian formulir pendaftaran. jika dirasa sudah sesuai silahkan lanjut ke tahap  <em>Upload bukti Pembayaran untuk mendapat Kode Test Ujian</em>.</p>
                      <!--href #3 merupakan sebuah alamat link slide untuk mengalihkan ke slide ke 3-->
                      <div class="main-btn"><a href="#3">Lakukan Pembayaran</a></div>
                      <!--href #2 merupakan sebuah alamat link slide untuk mengalihkan ke slide ke 2-->
                      <div class="main-btn"><a href="#2">Cek Profile Santri</a></div>
                  </div>
              </div>
            </div>
          </div>

<!--slide kedua pada menu profile-->
<tbody>
		<tr>
		<?php
			include 'koneksi.php';
			session_start();
            $no = 1;
			$sql = mysqli_query($koneksi, "SELECT * FROM `data_siswa` JOIN tb_gambar    
            ON data_siswa.id_siswa = tb_gambar.id_siswa WHERE data_siswa.id_siswa='".$_SESSION['id']."'");
			while ($text = mysqli_fetch_array($sql)) {
		?>  
		</tr>
          <div class="slide" id="2">
            <div class="content second-content">
                    <br></br><h2>Profile Santri</h2>
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                        <table border="2" style="width:50%">
                        <tr>
                            <td><a href="dataDiri.php" class="btn btn-outline-success btn-sm"><i class="bi bi-printer"></i>Print</a></td>
                            <td><button onclick="fungsiSaya()"class="main-btn btn-outline-primary btn-sm">Details</button></td>
                            <td><a href="logout.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-person-plus"></i>Log Out</a></td>
                        </tr>
                            </table>
                                <script>
                                    function fungsiSaya() {
                                        var x = document.getElementById("target");
                                            if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
                            </script>
                            <!--data santri pada menu profile di input otomatis dari database-->
                            <p><br>No. Pendaftaran     : <?= $text['id_siswa']; ?></p> 
                            <p>Kode Test    : <?= $text['kode']; ?></p>
                            <p>Nick Name   : <?= $text['username_siswa']; ?></p>
                            <p>Name    : <?= $text['nama_siswa']; ?></p>
                            <p>email     : <?= $text['email_siswa']; ?></p>
                            <div id="target" color="#fff 0%">
                                <!--data detail santri-->
                                <p>Tempat Lahir     : <?= $text['tempat']; ?></p> 
                                <p>Tanggal Lahir     : <?= $text['tanggal']; ?></p>
                                <p>Jenis Kelamin     : <?= $text['Jenis_kelamin']; ?></p> 
                                <p>Nomer Telphon     : <?= $text['no_telphon']; ?></p> 
                                <p>Asal Sekolah     : <?= $text['asal_skolah']; ?></p>
                                <p>Status Santri    : <?= $text['status']; ?></p>
                                <p>Jenjang Pendidikan     : <?= $text['jenjang']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="right-image" color="#fff 0%">
                            <tr>
                                <p><img src="data:image/jpeg;base64,<?php echo base64_encode($text['gambar']) ?>"width="400px" height="300px"></img></p>
                                <p>Nama gambar : <?= $text['nama_gambar']; ?></p>
                            </tr>
                        </div>
                    </div>

                </div>
            </div>
          </div>
</tbody>    
<!--slide ketiga pada menu upload Berkas-->
          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2>Upload Bukti Pembayaranmu</h2>
                                                <p>silahkan klik tombol Upload Berkas dengan bentuk format PDF yang berisikan foto Bukti Pembayaran yang sudah di convert kedalam format PDF</p>
                                                   <!--main button ini untuk mengunggah berkas kedalam database-->
                                                    <a href="halaman_upload.php" class="btn btn-primary btn-sm"><i class="bi bi-person-plus"></i>Upload Bukti Tf/cash</a>
                                                    <td><p>Status Pembayaran     </td>:<br> <?= $text['judul_file_pdf']; ?></p></b>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                               <!--div ini akan mengatur pada content gambar untu upload berkas-->
                                            <div class="right-image">
                                                <img src="img/folder.jpg" alt="first service">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
 <?php } ?>
<!--slide keempat pada menu Seragam-->
          <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/senin_lk_smp.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMP</br>Hari Senin-selasa</h2>
                                            <p>celana biru, ikat pinggang, kemeja puti, bet logo sekolah, dasi, sepatu hitam, kaos kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/senin_lk_smp.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/senin_lk_sma.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMA</br>Hari Senin-Selasa</h2>
                                            <p>celana Abu-abu, ikat pinggang, kemeja puti, bet logo sekolah, dasi, sepatu hitam, kaos kaki..</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/senin_lk_sma.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/rabu_lk.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMP&SMA </br>Hari Rabu</h2>
                                            <p>Batik resmi, celana hitam, ikat pinggang, kaos kaki, sepatu hitam, papan nama.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/rabu_lk.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/kamis_lk.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMP&SMA</b>Hari Kamis</h2>
                                            <p>Batik resmi, celana hitam, ikat pinggang, kaos kaki, sepatu hitam, papan nama.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/kamis_lk.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/jumat_solat.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMP&SMA </br>Hari Jum'at</h2>
                                            <p>peci hitam, baju gamis, celana pangsi, bersepatu hitam, kaos kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/jumat_solat.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/sabtu_lk_pgk.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMA</br>Hari Sabtu</h2>
                                            <p>Seragam Pramuka Lengkap, berhasduk, ikat pinggang, bersepatu, berkaos kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/sabtu_lk_pgk.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/sabtu_lk_pgg.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah <br>Santri Putra SMP</br>Hari Sabtu</h2>
                                            <p>seragam pramuka lengkap, berhasduk.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/sabtu_lk_pgg.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/olahraga_lk.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Olahraga<br>Santri Putra</br></h2>
                                            <p>Baju Olahraga, Celana Olahraga, Berkaos Kaki, Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/olahraga_lk.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/harian.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Harian<br>Santri Putra</br></h2>
                                            <p>Baju Bebas Dan Sopan, Celana Panjang, Beralas Kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/harian.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/senin_solat.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>seragam solat <br>Santri Putra<br>Hari Senin-Selasa</h2>
                                            <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/senin_solat.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/rabu_solat.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Solat <br>Santri Putra </br>Hari Rabu-Kamis</h2>
                                            <p>Baju Batik bebas, sarung, ikat pinggang, peci hitam, sajadah.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/rabu_solat.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/jumat_lk.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Solat <br>Santri Putra</br>Hari Jum'at-Sabtu</h2>
                                            <p>Baju koko bebas, sarung, ikat pinggang, peci hitam, sajadah..</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/jumat_lk.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/minggu_solat.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Solat<br>Santri Putra</br>Hari minggu</h2>
                                            <p>Peci Putih, Koko Putih, Sarung, Ikat pinggang, sajadah.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/minggu_solat.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/senin_smp_ptr.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah<br>Santri SMP Putri</br>Hari Senin-Selasa</h2>
                                            <p>Kerudung Putih, Seragam Putih, Rok Abu-abu, Berkaos Kaki, dan Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/senin_smp_ptr.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/senin_ptr_sma.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah<br>Santri SMA Putri</br>Hari Senin-Selasa</h2>
                                            <p>Kerudung Putih, Seragam Putih, Rok Abu-abu, Berkaos Kaki, dan Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/senin_ptr_sma.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/rabu_ptr_sma.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah<br>Santri SMP&SMA Putri</br>Hari Rabu</h2>
                                            <p>kerudung hitam, seragam batik, Rok Hitam, Berkaos Kaki, dan Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/rabu_ptr_sma.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/kamis_ptr_skl.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah<br>Santri SMP&SMA Putri</br>Hari Kamis</h2>
                                            <p>Kerudung Hitam, Gamis Bebas, Berkaos Kaki, Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/kamis_ptr_skl.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/jumat_ptr.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah<br>Santri SMP&SMA Putri</br>Hari Jum'at</h2>
                                            <p>Kerudung Hitam, Gamis Sekolah, Berkaos Kaki, dan Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/jumat_ptr.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/sabtu_ptr_pgk.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Sekolah<br>Santri SMP&SMA Putri</br>Hari Sabtu</h2>
                                            <p>Kerudung Coklat, Seragam Pramuka Lengkap, Berhasduk, Berkaos Kaki, Dan Bersepatu.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/sabtu_ptr_pgk.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/olahraga_ptr.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam olahraga<br>Santri Putri</br>Hari Sabtu</h2>
                                            <p>Kerudung Bebas, Seragam olahraga, Celana Training Olahraga, Berkaos Kaki, Dan Bersepatu Running.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/olahraga_ptr.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/harian_senin_ptr.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Senin-Selasa<br>Santri SMP&SMA Putri</br>Hari Sabtu</h2>
                                            <p>Kerudung Hitam, Gamis Bebas, Rok Bebas, Berkaos Kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/harian_senin_ptr.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/rabu_kamis.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Harian Rabu-Kamis<br>Santri SMP&SMA Putri</br>Hari Sabtu</h2>
                                            <p>Kerudung Hitam, Gamis Bebas, Rok Bebas, Berkaos Kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/rabu_kamis.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <!--gambar untuk keterangan seragam sekolah apabila kursor diarah kan ke gambar akan menampilkan tulisan-->
                                    <a href="img/jumat_minggu.JPG" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Seragam Harian Jum'at-Minggu<br>Santri SMP&SMA Putri</br>Hari Sabtu</h2>
                                            <p>Kerudung Hitam, Gamis Bebas, Rok Bebas, Berkaos Kaki.</p>
                                        </div>
                                    </div></a>
                                    <!--apa bila gambar di klik maka gambar akan membesar-->
                                    <div class="image">
                                        <img src="img/jumat_minggu.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

<!--slide kelima pada menu contact-->
          <div class="slide" id="5">
            <div class="content fifth-content">
            <tbody>
		<tr>
		<?php
			include 'koneksi.php';
			$no = 1;
			$sql = mysqli_query($koneksi, "SELECT * FROM pengumuman");
			while ($text = mysqli_fetch_array($sql)) {
		?>
		</tr>
	<div class="container mt-3">
		<div class="row">
			<!-- Konten kiri -->
			<!--tinggal cngambil output text kedalam class card-->
			<div class=" col bg-white radius" style="font-size:1.875em">
				<div class="card my-3">
					<div class="card-header text-white"  style="background-color: #3c8dbc;">
					<td><?= $text['header1']; ?></td>
					</div>
					<div class="card-body" style="background-color: #d9e0e7;">
						<h5 class="card-title"><td><?= $text['text']; ?></td></h5>
						<p class="card-text"><td><?= $text['isi']; ?></td></p>

						<a href="#" class="btn btn btn-outline-primary btn-sm">Read More</a>
					</div>
				</div>
			</div>


			<!-- Konten kanan -->
		</div>
	</div>
	<?php } ?>
</tbody>
            </div>
          </div>
        </div>
        <!--pada class footer ini untuk membuat sebuah water mark berisikan akun sosial media yang dimiliki oleh admin(pihak pondok)-->
        <div class="footer">
          <div class="content">
          <p>Copyright @ 2023 <a href="logout.php" class="text-white"><mark>Pesantren Al-Ghozali</mark></a><br>
		Create_By @ 2023 <a href="https://www.instagram.com/tois_n10/?igshid=ZDdkNTZiNTM%3D" class=" text-white"><mark>Toto_Iswanto</mark></a></p>
          </div>
        </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    
    function showPopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "block"; // Tampilkan popup
    }

    function hidePopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "none"; // Sembunyikan popup
    }
    </script>
    
</body>
</html>