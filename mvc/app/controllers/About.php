<?php

class About
{

  public function index($nama = 'Dik Dik', $pekerjaan = 'Mahasiswa')
  {
    echo "Hallo, Nama saya $nama, saya adalah seorang $pekerjaan";
  }

  public function page()
  {
    echo 'About/page';
  }
}
