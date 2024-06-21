<div class="card2">
    <div class="card2-header">
        Person
    </div>
    <div class="card2-content">
        This is the content of the card2. You can put any information you want here.
        <div class="content-action">
            <div class="card-right">
                <?php
                include 'koneksi.php';
                session_start();
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM `data_siswa` JOIN tb_gambar ON data_siswa.id_siswa = tb_gambar.id_siswa WHERE data_siswa.id_siswa='" . $_SESSION['id'] . "'");
                while ($text = mysqli_fetch_array($sql)) {
                ?>
                    <center>
                        <tr>
                            <p><img src="data:image/jpeg;base64,<?php echo base64_encode($text['gambar']) ?>" width="250px" height="auto" style="border-radius:10px;"></img></p>

                        </tr>
                    </center>
            </div>
            <div class="card-left">
                <p><br>No. Pendaftaran : <?= $text['id_siswa']; ?></p>
                <p>Kode Test : <?= $text['kode']; ?></p>
                <p>Nick Name : <?= $text['username_siswa']; ?></p>
                <p>Name : <?= $text['nama_siswa']; ?></p>
                <p>email : <?= $text['email_siswa']; ?></p>
            </div>
        </div>
    </div>
    <div class="card2-footer">
        <center>
            <a class="card2-button" href="logout.php">Logout</a>
            <a href="dataDiri.php" class="card2-button">Print</a>
        </center>
    </div>
</div>
<?php } ?>
<style>
    /* Existing styles ... */

    .navigation ul li {
        position: relative;
    }

    .card2 {
        position: absolute;
        top: -255px;
        left: 110%;
        /* Adjust this value to position the card2 */
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

    .card2-header {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card2-content {
        font-size: 1em;
        color: #333;
        line-height: 1.5;
    }

    .card2-footer {
        margin-top: 20px;
        text-align: right;
    }

    .card2-button {
        display: inline-block !important;
        text-align: center;
        text-decoration: none;
        background: #ffa117;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .card2-button:hover {
        background: darken(var(--bg), 10%);
    }

    .navigation ul li.active .card2 {
        opacity: 1;
        visibility: visible;
    }

    .content-action {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .card-left {
        left: 20px;
        width: 70%;
        background: #f9f9f9;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-right {
        right: 20px;
        width: 30%;
        background: #f9f9f9;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>