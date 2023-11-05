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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($toko as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" >Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body> 