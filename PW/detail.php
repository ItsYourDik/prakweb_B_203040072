<?php
require 'function.php';

// ambil id dari url
$idBuku = $_GET['idBuku'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM buku WHERE idBuku = $idBuku");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header.css">
  <title>Daftar Novel</title>
</head>

<body>
  <div>
    <nav class="navbar sticky-top bg-secondary">
      <div class=" container">
        <a href="index.php">
          <span class="navbar-brand mb-0 text-white">DAFTAR NOVEL</span>
        </a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col" style="margin: 20px 0 0 120px ;">
          <div class="card" style="width: 25rem;">
            <img src="img/<?= $m["Gambar"]; ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col" style="margin: 120px 0 0 0 ;">
          <div class="card border-light" style="width: 45rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $m['Judul']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $m['Pengarang']; ?></h6>
              <h6 class="card-subtitle mb-2 text-muted"><?= $m['Tahun']; ?></h6>
              <h5 class="mb-2 text-muted">Sinopsis</h5>
              <p class="card-text"><?= $m['sinopsis']; ?></p>
              <a href="ubah.php?idBuku=<?= $m['idBuku']; ?>" type="button" class="btn btn-outline-warning">Ubah</a>
              <a href="hapus.php?idBuku=<?= $m['idBuku']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');" type="button" class="btn btn-outline-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script>
    $(document).ready(function() {
      $('select').formSelect();
    });
  </script>
</body>

</html>