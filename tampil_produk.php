<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h2>Daftar Produk Kecantikan</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Merek</th>
            <th>Deskripsi</th>
        </tr>
        <?php
        $query = "SELECT p.*, k.nama_kategori, m.nama_merek FROM produk_kecantikan p
                  JOIN kategori k ON p.id_kategori = k.id_kategori
                  JOIN merek m ON p.id_merek = m.id_merek";

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['nama_produk']}</td>
                    <td>{$row['harga']}</td>
                    <td>{$row['nama_kategori']}</td>
                    <td>{$row['nama_merek']}</td>
                    <td>{$row['deskripsi']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>