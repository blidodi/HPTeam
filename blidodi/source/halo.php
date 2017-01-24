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
				$c = $a + $b;
			break;
			case "kali":
				$c = $a * $b;
			break;
			case "bagi":
				$c = $a / $b;
			break;
			case "kurang":
				$c =  $a - $b;
			break;
			default:
				$c = "tidak ada operator.";
		}

		return $c;
	}

	echo aritmatika(20, 15, "kurang");


	

	//DONE is Better Than PERFECT.