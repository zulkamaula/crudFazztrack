<?php
// koneksin ke database sudah di dalkukan dlm function.php dgn menghubungkan dg require.
require 'functions.php';

// ambil data di URL dgn GET
$id = $_GET["id"];

// query data produk berdasarkan id-nya
$produk = query("SELECT * FROM produk WHERE id = $id")[0];



// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>

        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
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
    <title>Ubah Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-ubah">
        <h1>Ubah Data Produk</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $produk["id"]; ?>">
            <ul>
                <li>
                    <label for="nama_produk">Nama Produk &nbsp;:</label>
                    <input type="text" name="nama_produk" id="nama_produk" required value="<?= $produk["nama_produk"]; ?>">
                </li>

                <li>
                    <label for="keterangan">Keterangan &emsp;:</label>
                    <input type="text" name="keterangan" id="keterangan" required value="<?= $produk["keterangan"]; ?>">
                </li>

                <li>
                    <label for="harga">Harga &emsp; &emsp; &nbsp;:</label>
                    <input type="text" name="harga" id="harga" required value="<?= $produk["harga"]; ?>">
                </li>

                <li>
                    <label for="jumlah">Jumlah &emsp; &emsp;:</label>
                    <input type="text" name="jumlah" id="jumlah" required value="<?= $produk["jumlah"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>

            </ul>
        </form>
    </div>
</body>

</html>