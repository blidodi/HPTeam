<?php 

	/**function jumlah($a, $b) {
		return $a + $b;
	}

	echo "hasil ".jumlah(3, 2); */

	function aritmatika($a, $b, $operator) {
		
		switch ($operator) {
			case "tambah":
				$c = $a + $b;
			break;
			case "kurang":
				$c = $a - $b;
			break;
			case "kali":
				$c = $a * $b;
			break;
			case "bagi":
				$c = $a / $b;
			break;
			default:
				$c = "tidak ada operator";
		}
		return $c;
	}
	echo aritmatika(20, 10, "tambah"); 

	


