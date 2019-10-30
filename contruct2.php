<?php

class siswa
{
  public $nama,$alamat,$umur;
  public function __construct($a,$b,$c)
  {
    $this->nama = $a;
    $this->alamat = $b;
    $this->umur = $c;
  }
}
 public function datasiswa()
{
  return "Hallo";
 }
}
$hadi = new siswa("hadi","bandung",18)
echo $hadi->datasiswa().
"Nama saya $hadi->nama,
alamat di $hadi->alamat,
umur saya $hadi->umur";
?>