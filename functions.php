<?php
$conn = mysqli_connect("localhost", "root", "", "fazztrack");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data_tambah)
{
    global $conn;

    $nama_produk = htmlspecialchars($data_tambah["nama_produk"]);
    $keterangan = htmlspecialchars($data_tambah["keterangan"]);
    $harga = htmlspecialchars($data_tambah["harga"]);
    $jumlah = htmlspecialchars($data_tambah["jumlah"]);

    // mengambil data
    $query = "INSERT INTO produk
                VALUES
                ('', '$nama_produk', '$keterangan', '$harga', '$jumlah')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data_ubah)
{
    global $conn;

    $id = $data_ubah["id"];
    $namaProduk = htmlspecialchars($data_ubah["nama_produk"]);
    $keterangan = htmlspecialchars($data_ubah["keterangan"]);
    $harga = htmlspecialchars($data_ubah["harga"]);
    $jumlah = htmlspecialchars($data_ubah["jumlah"]);

    // mengambil data
    $query = "UPDATE produk SET 
                nama_produk = '$namaProduk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
            WHERE id = $id;

            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM produk WHERE    
    nama_produk LIKE '%$keyword%' OR
    keterangan LIKE '%$keyword%' OR
    harga LIKE '%$keyword%' OR
    jumlah LIKE '%$keyword%'
    ";

    return query($query);
}
