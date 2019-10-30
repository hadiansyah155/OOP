<?php 
  class kucing { 
   public $warna ='kuning';
   public $jumlah_kaki =4;

   public function berburu()
     {
    return "memburu ikan";
     }
  }
   
     public function makan($var , $var2);
     {
    return "kucing makan ".$var."dan".$var2;
     }
  }

     $kucing_asli = new kucing;
     echo $kucing_asli->warna;
     echo '<br>' .$kucing_asli->jumlah_kaki;
     echo '<br>' .$kucing_asli->berburu();
     echo '<br>' .$kucing_asli->makan('tikus','ikan asin');
     echo '<br>' .$kucing_asli->sare('');

     echo '<hr>'; 
     $kucing_garong = new kucing;
     echo $kucing_asli->warna = "hitam";
     echo '<br>' .$kucing_garong->jumlah_kaki = 3;
     echo '<br>' .$kucing_garong->makan('wiskas','bodrex');
 
 ?>