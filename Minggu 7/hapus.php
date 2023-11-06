<?php
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
            <script>
                alert('Data toko perabot berhasil dihapus!');
                document.location.href = 'toko.php';
            </script>
        ";
}else{
    echo "
            <script>
                alert('Data toko perabot gagal dihapus!');
                document.location.href = 'toko.php';
            </script>
        ";
}

?>