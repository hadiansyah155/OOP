<?php 
   //buat class Laptop

class Laptop
{
	//buat protected property
  protected $pemilik;

  //buat protected method
	protected function hidupkan_laptop()
	{
		return "hidupkan Laptop";
	}
} 
  //buat objek dari class laptop (instansiasi)
  $Laptop_anto = new Laptop();
  // set protected property akan menghasilkan erorr
  $Laptop_anto->pemilik = "Anto";

  //tampilkan property
  echo $Laptop_anto->pemilik;// anto

  //tampilkan method
  echo $Laptop_anto->hidupkan_laptop();//"Hidupkan"
  

 ?>