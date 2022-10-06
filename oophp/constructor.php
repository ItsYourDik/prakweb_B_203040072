<?php
//jualan produk
//komik
// game

use Produk as GlobalProduk;

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judu = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "game :" . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
