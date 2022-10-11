<?php
class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Dik Dik Nur Illahi",
  //     "nrp" => "203040072",
  //     "email" => "dikdiknurillahi@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Farhat Ganteng",
  //     "nrp" => "203040077",
  //     "email" => "farhatganteng@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Hifki Goreng",
  //     "nrp" => "203040065",
  //     "email" => "hifkigoreng@gmail.com",
  //     "jurusan" => "Teknik Mesin"
  //   ]
  // ];

  private $dbh; // database handler
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
