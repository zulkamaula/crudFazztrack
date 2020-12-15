<?php
require 'functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM produk WHERE    
            nama_produk LIKE '%$keyword%' OR
            keterangan LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            jumlah LIKE '%$keyword%'
        ";

$produk = query($query);
?>
<table border="1" cellpadding="10" cellspacing="0">

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