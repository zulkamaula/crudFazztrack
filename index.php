<?php
require 'functions.php';
$produk = query("SELECT * FROM produk");

if (isset($_POST["cari"])) {
    $produk = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD dengan PHP</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="container-index">
        <h1>Aplikasi CRUD Produk dengan PHP<br>
            <span style=" font-size: 0.5em; font-weight: 100; background-color: lightslategray; color: white; padding: 10px 15px;">
                Tugas 10 Fazztrack!
            </span>
        </h1>

        <form action="" method="post">
            <input type="text" name="keyword" size="37" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off" id="keyword">
            <button type="submit" name="cari" id="tombol-cari">Cari!</button>
        </form>
        <br>

        <a href="tambah.php" style="color: lightslategray;">Tambah Data Produk</a>
        <br>
        <br>

        <div class="container">
            <table border="1" cellpadding="15" cellspacing="0">

                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($produk as $row) : ?>

                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?'); ">Hapus</a>
                        </td>
                        <td><?= $row["nama_produk"]; ?></td>
                        <td><?= $row["keterangan"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["jumlah"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>