<?php 
   //buat class Laptop

class Laptop
{
	public $pemilik;
	//buat public method
	public function hidupkan_laptop()
	{
		return "hidupkan Laptop";
	}
} 
  //buat objek dari class laptop (instansiasi)
  $Laptop_anto = new Laptop();
  // set property
  $Laptop_anto->pemilik = "auto";

  //tampilkan property
  echo $Laptop_anto->pemilik;// anto

  //tampilkan method
  echo $Laptop_anto->hidupkan_laptop();//"Hidupkan"

 ?>