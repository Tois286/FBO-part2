<?php
include 'koneksi.php';
session_start();
 
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
   header("Location: index.php");
}
//TAMBAH FILE PDF
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
			          session_start();
                $query  = mysqli_query($koneksi, "UPDATE data_siswa SET  nama_file_pdf='$file',judul_file_pdf='$judul_pdf' WHERE id_siswa='".$_SESSION['id']."'");
                if($query){
                    echo '<script>alert("File berhasil di upload!");</script>';
                }
            }
            // Cek jika bukan file pdf yang di masukkan
        }else{
            // beri pesan ke user lalu alihkan tetap ke halaman tambah.php
            echo "<script>alert('Ekstensi harus berupa PDF!');
                document.location.href='berkasAct.php';
                </script>";
        } 
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <title>Pdf Book</title>
      <style>
      table, th, td {
  border: 1px solid #D3D3D3;
 
}
      
      </style>
  </head>
    
  <body>
    <nav class="navbar navbar-dark bg-primary shadow mb-5">
      <div class="container-fluid">
       <a class="navbar-brand"><i class="bi bi-file-pdf"></i> Pdf Book</a>
      </div>
    </nav>

<div class="container">
  <div class="row">
      <div class="col">
     <h1 class="display-2 text-center mb-3"><i class="bi bi-file-pdf"></i>Bukti Pembayaran.pdf</h1> 
          <a href="datasiswa.php"><button type="button" class="btn btn-danger  mb-3"><i class="bi bi--circle"></i>Kembali</button></a>
           <!-- Table -->
     <table id="dataTable" class="table shadow">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">kode</th>
            <th class="text-center">Pdf Book</th>
        </tr>
    </thead>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM data_siswa"); 
        ?>
    <tbody>
    
         <?php $i = 1; ?>
        	<?php foreach($query as $data) : ?>
        <tr>
            <td class="text-center"><?php echo $i; ?></td>
            <td class="text-center"><?php echo $data['username_siswa'];?></td>
            <td class="text-center"><?php echo $data['kode'];?></td>
            <td class="text-center"><h5><?php echo $data['judul_file_pdf']; ?></h5><a href="download.php?filename=<?php echo $data['nama_file_pdf']?>">download</a></td>
        </tr>
           <?php $i++; ?>
          <?php endforeach; ?>
    </tbody>
</table>
      </div>
    </div>
    <!-- footer -->
	<div class="container-fluid my-3 text-center heading text-primary">
		<p>Copyright @ 2023 <a href="index.php" class=" text-primary">Pesantren Al-Ghozali</a><br>
		Create_By @ 2023 <a href="https://www.instagram.com/tois_n10/?igshid=ZDdkNTZiNTM%3D" class=" text-primary">Toto_Iswanto</a></p>
	</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="datatables-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>