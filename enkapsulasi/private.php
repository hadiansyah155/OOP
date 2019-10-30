<?php
 // buat class komputer
class komputer
{
	//property dengan hak akses protected
	private $jenis_processor = "Intel Core i7-4790 3.6ghz";
	public function tampilkan_processor()
	{
		return $this->jenis_processor; 

	}
}

 //buat class laptop
 class laptop extends komputer
 {
 	public function tampilkan_processor()
 	{
 		return $this->jenis_processor;
 	}
 }
  // buat objek daro class laptop (intasiasi)
 $komputer_baru = new komputer();
 $laptop_baru = new laptop();

 // jalankan method dari class komputer (erorr)
 echo $komputer_baru->tampilkan_processor();//"Intel Core 17-4790 3.6ghz"
 //jalankan method dari class laptop (error)
 echo $laptop_baru->tampilkan_processor();

 ?>