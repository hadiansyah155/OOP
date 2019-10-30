<?php

class Handphone
{
	private $kunci_hp = 54321;
	protected $kunci_aplikasi = 12345;
    public $spesifikasi;
	public function masuk_handphone()
	{
		$this->kunci_hp;
		return"masuk handphone =" .$this->kunci_hp;
	}
}
 class aplikasi extends handphone
 {
 	public function aplikasi()
 	{
 	return"<br> masuk aplikasi = ".$this->kunci_aplikasi;
    }
}
$handphone_hadi = new Handphone();
$aplikasi_hadi = new aplikasi();

$handphone_hadi->spesifikasi = "Internal 225GB RAM 6/64 GB <br>";
echo $handphone_hadi->spesifikasi;
echo $handphone_hadi->masuk_handphone();
echo $aplikasi_hadi->aplikasi();

 ?>