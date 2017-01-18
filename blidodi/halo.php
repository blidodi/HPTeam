<?php


	function halo($name) {
		return "Apa kabar ".$name;
	}

	
	// 1. ada 2 nilai a dan b
	// 2. munculkan hasil dari penjumlahan a dan b tadi

	/** 1. deklarasi a
	2. deklarasi b
	3. buat fungsi penjumlahan
	4. jumlahkan a dan b
	5. munculkan hasil penjumlahan a dan b

	*/

	function jumlah($a, $b) {
		return $a + $b;
	}

	// echo jumlah(6, 7);


	// fungsi operator aritmatika 
	function aritmatika($a, $b, $operator) {
		switch($operator) {
			case "tambah":
				return $a + $b;
			break;
			case "kali":
				return $a * $b;
			break;
			case "bagi":
				return $a / $b;
			break;
			case "kurang":
				return $a - $b;
			break;
			default:
				return "tidak ada operator.";
		}
	}

	echo aritmatika(5, 5, "kurang");


	

	//DONE is Better Than PERFECT.