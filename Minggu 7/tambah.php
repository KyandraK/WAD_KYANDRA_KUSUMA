<?php
require 'functions.php';

if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('Data toko perabot berhasil ditambahkan!');
                document.location.href = 'toko.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data toko perabot gagal ditambahkan!');
                document.location.href = 'toko.php';
            </script>
        ";
    }
    
}


?>

<!DOCTYPE html>
<head>
    <title>Tambah Data Toko Perabot</title>
</head>
<body>
    <h1>Tambah Data Produk</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Produk :</label><br>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="harga">Harga  :</label><br>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="gambar">Gambar  :</label><br>
                <input type="text" name="gambar" id="gambar" required><br><br>
            </li>
            <li>
                <input type="submit" name="submit" id="submit"><br><br>
                <a href="toko.php">Kembali ke halaman sebelumnya</a>
            </li>
        </ul>
    </form>
</body>
</html>