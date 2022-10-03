<?php
require 'function.php';


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href ='index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

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
    <nav class="navbar navbar-expand-lg sticky-top bg-secondary">
      <div class="container">
        <a class="navbar-brand text-white" style="font-family: Montserrat ;" href="index.php">DAFTAR NOVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" style="font-family: Montserrat ;" href="tambah.php">TAMBAH NOVEL</a>
            </li>
          </ul>
          <form class="d-flex" action="" method="POST">
            <input class="form-control me-2" type="search" name="keyword" autocomplete="off" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
      <h5>Tambah Novel</h5>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col">
            <div class="mb-2">
              <label for="Judul" class="form-label">Judul</label>
              <input class="form-control" id="Judul" type="text" name="Judul" class="validate" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-2">
              <label for="Pengarang" class="form-label">Pengarang</label>
              <input class="form-control" id="Pengarang" type="text" name="Pengarang" class="validate" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-2">
              <label for="Tahun" class="form-label">Tahun</label>
              <input class="form-control" id="Tahun" type="text" name="Tahun" class="validate" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-2">
              <label for="sinopsis" class="form-label">Sinopsis</label>
              <textarea class="form-control" id="sinopsis" type="text" name="sinopsis" class="validate" rows="3" required></textarea>
            </div>
          </div>
        </div>
        <img src="img/noimg.png" width="120" style="display: block;" class="img-preview">
        <div class="row">
          <div class="col">
            <div class="mb-2">
              <label class="form-label">Default file input example</label>
              <input class="form-control gambar" type="file" name="gambar" onchange="previewImage()">
            </div>
          </div>
        </div>
        <button class="btn btn-success" type="submit" name="tambah">Tambah Novel</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script>
    function previewImage() {
      const gambar = document.querySelector('.gambar');
      const imgPreview = document.querySelector('.img-preview');

      const oFReader = new FileReader();
      oFReader.readAsDataURL(gambar.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      };
    }
  </script>
</body>

</html>