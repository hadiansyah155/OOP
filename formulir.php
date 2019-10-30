<?php 
  class RPL2 {
  	public $siswa;
  	public $laki;
  	public $cewe;
  	public $wakel;
  	public $ketua;

  	public function sekola(){
              return"SMK ASALAAM";
  	}public function jurusan(){
  		return"RPL";
  	}
  }
  $a = new RPL2;
  $a->siswa=32;
  $a->laki=22;
  $a->cewe=10;
  $a->wakel="Wildan A.S";
  $a->ketua="Refana B.A";
  echo $a->jurusan()."Terdiri Dari $a->siswa siswa,
  yang diantara nya : <br>";
  echo "Siswa Laki-laki : $a->laki<br>";
  echo "Siswa cewe      : $a->cewe<br>";
  echo "Wali kelas      : $a->wakel<br>";
  echo "Ketua  murid    : $a->ketua<br>";

 ?>