<?php
include 'koneksi.php';

$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$kategori = $_POST['id_kategori'];
$merek = $_POST['id_merek'];
$deskripsi = $_POST['deskripsi'];

$query = "INSERT INTO produk_kecantikan (nama_produk, harga, id_kategori, id_merek, deskripsi)
          VALUES ('$nama', '$harga', '$kategori', '$merek', '$deskripsi')";

if(mysqli_query($conn, $query)) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>