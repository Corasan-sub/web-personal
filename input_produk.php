<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Produk</title>
</head>
<body>
    <h2>Input Produk Kecantikan</h2>
    <form id="produkForm">
        <input type="text" name="nama_produk" placeholder="Nama Produk" required><br>
        <input type="number" name="harga" placeholder="Harga" required><br>

        <select name="id_kategori">
            <option value="">Pilih Kategori</option>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM kategori");
            while($row = mysqli_fetch_assoc($res)){
                echo "<option value='{$row['id_kategori']}'>{$row['nama_kategori']}</option>";
            }
            ?>
        </select><br>

        <select name="id_merek">
            <option value="">Pilih Merek</option>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM merek");
            while($row = mysqli_fetch_assoc($res)){
                echo "<option value='{$row['id_merek']}'>{$row['nama_merek']}</option>";
            }
            ?>
        </select><br>

        <textarea name="deskripsi" placeholder="Deskripsi Produk"></textarea><br>
        <button type="button" onclick="submitProduk()">Simpan</button>
    </form>

    <script src="js/script.js"></script>
</body>
</html>