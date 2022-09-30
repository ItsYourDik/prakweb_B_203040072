<?php
function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_2022_b_203040072');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function ubah($data)
{
  $conn = koneksi();

  $idBuku = $data['idBuku'];
  $Judul = htmlspecialchars($data['Judul']);
  $Pengarang = htmlspecialchars($data['Pengarang']);
  $Tahun = htmlspecialchars($data['Tahun']);
  $sinopsis = htmlspecialchars($data['sinopsis']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'noimg.png') {
    $gambar = $gambar_lama;
  }

  $query = " UPDATE buku SET
            Judul = '$Judul', 
            Pengarang = '$Pengarang', 
            Tahun = '$Tahun', 
            sinopsis = '$sinopsis', 
            gambar = '$gambar'
          WHERE idBuku = $idBuku";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    return 'noimg.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('Ukuran terlalu Besar!');
          </script>";
    return false;
  }

  // lolos pengecekan 
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function hapus($idBuku)
{
  $conn = koneksi();

  // menghapus gambar di folder img
  $buku = query("SELECT * FROM buku WHERE idBuku = $idBuku");
  if ($buku['gambar'] != 'noimg.png') {
    unlink('img/' . $buku['gambar']);
  }

  mysqli_query($conn, "DELETE FROM buku WHERE idBuku = $idBuku") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  $conn = koneksi();

  $Judul = htmlspecialchars($data['Judul']);
  $Pengarang = htmlspecialchars($data['Pengarang']);
  $Tahun = htmlspecialchars($data['Tahun']);
  $sinopsis = htmlspecialchars($data['sinopsis']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
              buku
            VALUES
            (null, '$Judul', '$Pengarang', '$gambar','$Tahun', '$sinopsis');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM buku 
              WHERE 
              Judul LIKE '%$keyword%' OR
              Pengarang LIKE '%$keyword%' OR
              Tahun LIKE '%$keyword%' OR
              sinopsis LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
