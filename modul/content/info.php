<div class="card3">
    <div class="card3-header">
        information
    </div>
    <div class="card3-content">
        This is the content of the card3. You can put any information you want here.
        <div>
            <tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM pengumuman");
                while ($info = mysqli_fetch_array($sql)) {
                ?>
            </tr>

            <div class="card-info">
                <center>
                    <h1><?= $info['header1']; ?></h1>
                </center>
                <h3><?= $info['text']; ?></h3>
                <p><?= $info['isi']; ?></p>
            </div>
        </div>
    </div>
    <div class="card3-footer">
        <button class="card3-button">Button</button>
    </div>

<?php } ?>
</div>
<style>
    /* Existing styles ... */

    .navigation ul li {
        position: relative;
    }

    .card3 {
        position: absolute;
        top: -335px;
        left: 110%;
        /* Adjust this value to position the card3 */
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

    .card3-header {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card3-content {
        font-size: 1em;
        color: #333;
        line-height: 1.5;
    }

    .card3-footer {
        margin-top: 20px;
        text-align: right;
    }

    .card3-button {
        background: var(--bg);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .card3-button:hover {
        background: darken(var(--bg), 10%);
    }

    .navigation ul li.active .card3 {
        opacity: 1;
        visibility: visible;
    }

    .card-info {
        padding: 10px;
        width: 96.5%;
        background: #f9f9f9;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        background-color: #0fc70f;
        border-radius: 10px;
        padding: 5px 0 0 5px;
        color: white;
    }
</style>