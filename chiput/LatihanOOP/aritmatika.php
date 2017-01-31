<?php
class Aritmatika 
{
	var $bil1;
	var $bil2;
	var $hasil;

	function set_tambah($angka1,$angka2) 
	{
	 $this->bil1 = $angka1;
	 $this->bil2 = $angka2;
	 $this->hasil = ($angka1+$angka2);
	}

	function get_tambah() {
		$operasi1 = $this->bil1." + ". $this->bil2 ." hasilnya ".$this->hasil;
		return $operasi1;
	}

	function set_kurang($angka1, $angka2) 
	{
	 $this->bil1 = $angka1;
	 $this->bil2 = $angka2;
	 $this->hasil = ($angka1-$angka2);
	}

	function get_kurang() {
		$operasi2 = $this->bil1." - ". $this->bil2 ." hasilnya ".$this->hasil;
		return $operasi2;
	}

	function set_kali($angka1, $angka2) 
	{
	 $this->bil1 = $angka1;
	 $this->bil2 = $angka2;
	 $this->hasil = ($angka1*$angka2);
	}

	function get_kali() {
		$operasi3 = $this->bil1." x ". $this->bil2 ." hasilnya ".$this->hasil;
		return $operasi3;
	}

	function set_bagi($angka1, $angka2) 
	{
	 $this->bil1 = $angka1;
	 $this->bil2 = $angka2;
	 $this->hasil = ($angka1/$angka2);
	}

	function get_bagi() {
		$operasi4 = $this->bil1." : ". $this->bil2 ." hasilnya ".$this->hasil;
		return $operasi4;
	}

}

// echo "OPERASI ARITMATIKA" . "<br>" ."<br>";

// $operasi1 = new Aritmatika();
// $operasi2 = new Aritmatika();
// $operasi3 = new Aritmatika();
// $operasi4 = new Aritmatika();

// $operasi1->set_tambah(2,2);
// $operasi2->set_kurang(4,2);
// $operasi3->set_kali(3,2);
// $operasi4->set_bagi(6,2);


// echo $operasi1->get_tambah() ."<br>";
// echo $operasi2->get_kurang()."<br>";
// echo $operasi3->get_kali()."<br>";
// echo $operasi4->get_bagi();

?>