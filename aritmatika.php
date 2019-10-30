 <?php

class Aritmatika{
  public function pertambahan($bilangan1 = null , $bilangan2 = null)
  {
  	$bil = $bilangan1 + $bilangan2;
  	return"soal pertambahan $bilangan1 + $bilangan2 = ".$bil;
  }
  public function pengurangan($bilangan1 = null , $bilangan2 = null)
  {
  	$bil = $bilangan1 - $bilangan2;
  	return"<br>soal pengurangan $bilangan1 - $bilangan2 = ".$bil;
 }
 public function perkalian($bilangan1 = null , $bilangan2 = null)
  {
  	$bil = $bilangan1 * $bilangan2;
  	return"<br>soal perkalian $bilangan1 * $bilangan2 = ".$bil;
  }
  	public function pembagian($bilangan1 = null , $bilangan2 = null)
  {
  	$bil = $bilangan1 / $bilangan2;
  	return"<br>soal pembagian $bilangan1 / $bilangan2 = ".$bil;
 }  
} 
  	echo "<hr>";
  $Aritmatika_bil = new Aritmatika();
  echo $Aritmatika_bil->pertambahan(20,10);
  	echo "<hr>";
  echo $Aritmatika_bil->pengurangan(20,10);
  	echo "<hr>";
  echo $Aritmatika_bil->perkalian(20,10);
  	echo "<hr>";
  echo $Aritmatika_bil->pembagian(20,10);
  	echo "<hr>";
?>