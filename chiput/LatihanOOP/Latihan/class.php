<?php

/**
* 
*/
class mobil {

	public $jenis;
	public $merk = "ninja";

	public function set_jenis($jenis1) {
		$this->jenis = $jenis1;
		return $this->jenis;
	}

	public function get_merk() {
		return $this->merk;
	}
}

$kendaraan1 = new mobil;
$kendaraan2 = new mobil;

echo "Mirza punya mobil jenis ".$kendaraan1->set_jenis('Sport');
echo " merk ".$kendaraan1->get_merk();
echo "<br>";
echo "Chiput punya mobil jenis ".$kendaraan2->set_jenis('Sport');
echo " merk ".$kendaraan2->get_merk();


?>