  <?php
class lingkaran
{
    public $jari,$phi = 3.14;

    public function __construct($jari)
    {
        $this->jari = $jari;

    }
    public function keliling()
    {  
   $keliling = 2*(3.14 * $this->jari);
   return $keliling; 
    }
    public function luas()
    {
   $luas = 3.14*$this->jari * $this->jari;
   return $luas;
    }
}
if (isset($_POST['hitung']))
 {
    $jari = $_POST['jari'];
 }

$lingkaran = new lingkaran($jari);
echo "jari-jari lingkaran :$lingkaran->jari<br>";
echo "luas lingkaran      :".$lingkaran->luas()."<br>";
echo "keliling lingkaran  :".$lingkaran->keliling()."<br>";
echo "<br>";
?>
