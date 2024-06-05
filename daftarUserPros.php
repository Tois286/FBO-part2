<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Pendaftaran</title>
</head>

<body>
    <!-- Heading -->
    <heading>
        <?php include 'modul/heading.php'; ?>
    </heading>

    <!-- Navbar -->
    <div class="">
        <nav class="container radius navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="adminsistem.php"><i class="bi bi-card-checklist"></i> Data Siswa</a>
                        <a class="nav-link active" href="pengumumanPros.php"><i class="bi bi-bell"></i>Buat Pengumuman</a>
                        <a class="nav-link active" href="daftarUserPros.php"><i class="bi bi-person-plus"></i>Form SuperUser</a>
                        <a class="nav-link active" href="dataguru.php"><i class="bi bi-person"></i>Daftar SuperUser</a>
                    </div>
                </div>
                <form action="cari.php" method="POST" class="d-flex">
                    <input class="form-control" type="cari" placeholder="cari" aria-label="cari" id="cari" name="cari">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <a href="logout.php" class="btn btn-outline-danger btn-sm">

                        <i class="bi bi-box-arrow-left"></i>
                        </i>
                    </a>
                    <a href="print.php" class="btn btn-outline-warning btn-xs"><i class="bi bi-printer"></i></a>
                    <a href="download2.php" class="btn btn-outline-primary btn-xs"><i class="bi bi-file-arrow-down"></i></a>
                </form>
            </div>

        </nav>
    </div>

    </nav>
    </div>




    <!-- Konten -->
    <div class="container mt-3">
        <div class="row">
            <!-- Konten kiri -->
            <div class=" col bg-white radius">
                <p class="h8 pt-3">INPUT DATA GURU</p>
                <form action="daftarUserAct.php" method="POST">
                    <div class="container-fluid bg-abu radius">
                        <div class="mb-3 pt-1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="masukan password anda">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap </label>
                            <input type="text" class="form-control" id="name" placeholder="masukan nama lengkap anda" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">No Guru</label>
                            <input type="text" class="form-control" id="guru" placeholder="masukan tempat" name="guru">
                        </div>
                        <div class="mb-3">
                            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">Pilih Jenis Kelamin : <br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>
                        </div>
                        <div class="mb-4 pb-2">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"><i class="bi bi-save2"></i> Submit</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <?php include 'modul/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>