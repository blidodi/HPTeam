<?php
// buat class Orang
class Orang {
  public $warnaRambut;
  public $tinggi;
 
  public function Berlari($kecepatan)  {
    return $kecepatan;
  }
}

//buat object
$andi = new Orang();
$andi->warnaRambut = "hitam";
$andi->tinggi = "165";

echo $andi->warnaRambut;
// hasil: hitam

echo "<br>";

echo $andi->Berlari("lari sedang");
// hasil: lari sedang
?>