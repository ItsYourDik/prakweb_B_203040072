<?php

require 'function.php';

// Jika tidak ada id di url
if (!isset($_GET['idBuku'])) {
  header("Location: index.php");
  exit;
}

//mengambil id dari url

$idBuku = $_GET['idBuku'];

if (hapus($idBuku) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href ='index.php';
          </script>";
} else {
  echo "Data Gagal Dihapus";
}
