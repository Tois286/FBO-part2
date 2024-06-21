<div class="card4">
    <div class="card4-header">
        Registration
    </div>
    <div class="card4-content">
        This is the content of the card4. You can put any information you want here.
        <?php
        include 'koneksi.php';
        // session_start();
        $sql = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id_siswa = '" . $_SESSION['id'] . "'");
        while ($text = mysqli_fetch_array($sql)) {
        ?>
            <center>
                <h2><?= $text['judul_file_pdf']; ?></h2>
            </center>

    </div><br>
    <div class="card4-upload">
        <form action="berkasActsiswa.php" method="post" enctype="multipart/form-data">
            <center>
                <div class="form-group">
                    <label class="small mb-1" for="judul_file_pdf">keterangan Pembayaranmu</label>
                    <input class="form-control py-4" id="judul_file_pdf" name="judul_file_pdf" type="text" placeholder="Tf/Cash" autocomplete="off" required />

                </div>
                <div class="form-group">
                    <label class="small mb-1" for="nama_file_pdf">Bukti pembayaran wajib dalam format pdf</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="nama_file_pdf" name="nama_file_pdf" required>
                    </div>
                </div>
                <div class="card4-footer">
                    <center>
                        <button type="submit" name="tambah" class="card4-button">Upload</button>
                    </center>
                </div>
            </center>

        </form>
    </div>
</div>
<?php } ?>
<style>
    /* Existing styles ... */
    /* CSS untuk form group */
    .form-group {
        margin-bottom: 1.5rem;
        /* Jarak antara form group */
    }

    /* CSS untuk label */
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        /* Jarak antara label dan input */
        font-size: 0.875rem;
        /* Ukuran font label */
        color: #333;
        /* Warna teks label */
    }

    /* CSS untuk input dalam form control */
    .form-control {
        display: block;
        width: 98%;
        /* Lebar input */
        padding: 0.375rem 0.75rem;
        /* Padding input */
        font-size: 0.875rem;
        /* Ukuran font input */
        line-height: 1.5;
        /* Tinggi baris input */
        color: #495057;
        /* Warna teks input */
        background-color: #fff;
        /* Warna latar belakang input */
        background-clip: padding-box;
        /* Penyebaran latar belakang input */
        border: 1px solid #ced4da;
        /* Garis tepi input */
        border-radius: 0.25rem;
        /* Sudut melengkung input */
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        /* Transisi perubahan input */
    }

    /* CSS untuk input dalam form control saat aktif */
    .form-control:focus {
        border-color: #80bdff;
        /* Warna garis tepi input saat aktif */
        outline: 0;
        /* Hilangkan outline */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        /* Bayangan input saat aktif */
    }

    /* CSS untuk placeholder dalam input */
    .form-control::placeholder {
        color: #6c757d;
        /* Warna teks placeholder */
    }

    /* CSS untuk input dalam group ketika dihover */
    .input-group:hover .form-control {
        z-index: 2;
    }

    /* CSS untuk file input */
    .input-group input[type="file"] {
        display: block;
        width: 98%;
        /* Lebar input */
        padding: 0.375rem 0.75rem;
        /* Padding input */
        font-size: 0.875rem;
        /* Ukuran font input */
        line-height: 1.5;
        /* Tinggi baris input */
        color: #495057;
        /* Warna teks input */
        background-color: #fff;
        /* Warna latar belakang input */
        background-clip: padding-box;
        /* Penyebaran latar belakang input */
        border: 1px solid #ced4da;
        /* Garis tepi input */
        border-radius: 0.25rem;
        /* Sudut melengkung input */
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        /* Transisi perubahan input */
    }

    /* CSS untuk file input saat aktif */
    .input-group input[type="file"]:focus {
        border-color: #80bdff;
        /* Warna garis tepi input saat aktif */
        outline: 0;
        /* Hilangkan outline */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        /* Bayangan input saat aktif */
    }

    .card4-upload {
        /* padding: 10px; */
        width: 96.5%;
        background: #f9f9f9;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #2196f3;
    }

    .navigation ul li {
        position: relative;
    }

    .card4 {
        position: absolute;
        top: -414px;
        left: 110%;
        /* Adjust this value to position the card4 */
        width: 1200px;
        height: 573px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0 12px 12px 0;
        padding: 20px;
        transition: 0.5s;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
    }

    .card4-header {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card4-content {
        font-size: 1em;
        color: #333;
        line-height: 1.5;
    }

    .card4-footer {
        margin-top: 20px;
        text-align: right;
    }

    .card4-button {
        display: inline-block !important;
        text-align: center;
        text-decoration: none;
        background: #2196f3;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .card4-button:hover {
        background: darken(var(--bg), 10%);
    }

    .navigation ul li.active .card4 {
        opacity: 1;
        visibility: visible;
    }

    h2 {
        background-color: #2196f3;
        padding: 5px;
        border-radius: 10px;
        color: white;
    }
</style>