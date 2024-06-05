<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<title>Pendaftaran</title>
</head>

<body>
	<!-- Heading -->
	<div class=" heading pt-3 pb-1 mb-3">
		<div class="container">

			<h4 class=" text-white">
				<center>Penerimaan Santri & Santri Wati Baru Online</center>
			</h4>
			<h5 class=" text-white m-minus">
				<center>PONDOK PESANTREN AL-GHOZALI</center>
			</h5>
			<h6 class="text-white m-minus">
				<center>Jl. Permata No.19, RT.06/RW.05, Curug, Kec. Gn. Sindur, Kabupaten Bogor, Jawa Barat 16340</center> 
			</h6>
		</div>
	</div>

<?php 
include('koneksi.php');

if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {   
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        //if ($file_size < 10048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        if ($file_size <= 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $id = $_GET['id'];
            mysqli_query($koneksi,"INSERT into tb_gambar (gambar,nama_gambar,tipe_gambar,ukuran_gambar,id_siswa) values ('$image','$file_name','$file_type','$file_size','$id')");
            header("location:login.php");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>
<html>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><i class="bi bi-camera"></i>Upload Foto</h3></div>
                                    <div class="card-body">
        <div class="text-black">
            <form class="text-black" method="post" action="" enctype="multipart/form-data">
        <center>
        <table>
            <tr>
                <td class="text-black">Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </center>
        </form></div>
        </div>
		</div>
	</div>
        	<!-- footer -->
	<div class="container-fluid my-3 text-center heading text-white"><p>Copyright @ 2023 <a href="index.php" class=" text-white">Pesantren Al-Ghozali</a><br>
		Create_By @ 2023 <a href="https://www.instagram.com/tois_n10/?igshid=ZDdkNTZiNTM%3D" class=" text-white">Toto_Iswanto</a></p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>