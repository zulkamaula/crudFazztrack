<?php
// koneksin ke database sudah di dalkukan dlm function.php dgn menghubungkan dg require.
require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

    // ambil data dari tiap elemen form yg disimpan di functions.php

    // query insert data di simpan dalam function.php 

    // mengecek apakah data berhasil ditambahkan atau tidak dg sintak di bawah ini
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>

        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
            </script>
";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-tambah">
        <h1>Tambah Data Produk</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama_produk">Nama Produk &nbsp;:</label>
                    <input type="text" name="nama_produk" id="nama_produk" required>
                </li>

                <li>
                    <label for="keterangan">Keterangan &emsp;:</label>
                    <input type="text" name="keterangan" id="keterangan" required>
                </li>

                <li>
                    <label for="harga">Harga &emsp; &emsp; &nbsp;:</label>
                    <input type="text" name="harga" id="harga" required>
                </li>

                <li>
                    <label for="jumlah">Jumlah &emsp; &emsp;:</label>
                    <input type="text" name="jumlah" id="jumlah" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>

            </ul>
        </form>
    </div>
</body>

</html>