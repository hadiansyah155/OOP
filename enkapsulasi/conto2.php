<?php 
 
 class manusia
 {
 	public $umur,$tgl_lahir;
 	protected $jenis_kelamin;
 	private $status;

 	    public function makan()
     	{
 		return "Makan Juga Butuh Makan";
    	}
    	public function minum()
        {
     	return "makan juga butuh minum";
        }
 	    public function ambil_status($status_saat_ini)
        {
     	return $this->status =$status_saat_ini;
        }
        public function status_gue()
        {
        	return "santuy namun kadang ambyar";
        }
 }  

 class pria extends manusia
 {
 	    public function jk($jk)
 	    {
 	    	return $this->jenis_kelamin = $jk;
 	    }
 	    public function datadiri()
 	    {
 	    	$datadiri = "<br> aku seorang ".
 	    	            $this->jenis_kelamin;
 	    	$datadiri .= "<br> yang lahir pada".
 	    	            $this->tgl_lahir;
 	    	$datadiri .= "<br> sampai saat ini masih".
 	    	            $this->status_gue;
 	    	$datadiri .= "<br> karena saya masih".
 	    	            $this->umur;
 	    	$datadiri .= "<br> belum pantas untuk menikah";
 	    	return $datadiri;
 	    }
 } 

         $saya = new pria();
         $saya->tgl_lahir = "15 mei 2001";
         $saya->jk ("laki-laki");
         $saya->ambil_status("lajang");
         $saya->umur = "18 tahun";

         echo $saya->datadiri();
         echo $makan->makan();


 ?>