<?php   
require 'functions.php';
$toko = query("SELECT * FROM toko")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
    <body>
    <h1>Daftar Toko Perabot</h1>

    <a href="tambah.php">Tambah Data Toko Perabot</a>
    <br> <br>

    <table border="4" cellpadding="10" cellspacing="1">
        <tr style="background-color:#4090db;">
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($toko as $row) : ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" >Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('Apa anda yakin ingin menghapus produk ini?');">Hapus</a>
            </td>
            <td align="center"><img src="img/<?= $row["gambar"]; ?>" width="80"></td>
            <td align="center"><?= $row["nama"]; ?></td>
            <td align="center"><?= $row["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </body> 
</html>