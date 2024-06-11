<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Pondok</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: white; border-radius: 10px;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo1.png" style="width: 200px;" alt="Logo"></a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" style="color:black;">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php" style="color:black;">Umum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galerisantri.php" style="color:black;">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeriguru.php" style="color:black;">Dewan Asatidz</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <h5 style="text-align:center">Dewan Asatidz</h5><br>

    <div class="wrapper">
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
        <div class="box">
            <img src="img/DT.jpg" alt="" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
            <p>Keterangan</p>
        </div>
    </div>

    <footer>
        <?php include 'modul/footer.php'; ?>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="modalImage" class="img-fluid" alt="Gambar">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        function showImage(element) {
            const src = element.getAttribute('src');
            document.getElementById('modalImage').setAttribute('src', src);
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>

</html>