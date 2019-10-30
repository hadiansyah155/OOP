<?php

class siswa
{
  public function __destruct()
  {
    echo "<br> Ini adalah Destructor";
  }

   public function hallo()
  {
   return"<br>hello php";
  }
public function __construct()
  {
  echo "Ini adalah __construct";
  }
}
 $hello = new siswa();
 echo $hello->hallo();

?>