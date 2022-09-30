<?php
require 'function.php';
$barang = query("SELECT * FROM buku")

//ketika tombil cari di klik
// if (isset($_POST['cari'])) {
//   $barang = cari($_POST['keyword']);
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Daftar Novel</title>
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg sticky-top bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">DAFTAR NOVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tambah.php">Tambah Novel</a>
            </li>
          </ul>
          <form class="d-flex" action="" method="POST">
            <input class="form-control me-2" type="search" name="keyword" autocomplete="off" autofocus placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <h1>Hello</h1>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-5 g-1">
        <?php foreach ($barang as $bk) : ?>
          <div>
            <div class="card text-bg-light border-light card1" style="width: 14rem;">
              <a href="detail.php?idBuku=<?= $bk["idBuku"] ?>">
                <img src="img/<?= $bk["Gambar"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text ">Judul : <?= $bk["Judul"]; ?> </p>
                  <p class="card-text">Tahun Terbit : <?= $bk["Tahun"]; ?> </p>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>