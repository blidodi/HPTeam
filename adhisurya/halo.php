<?php
	/**function penjumlahan($angka1, $angka2) {
		$hasil = $angka1 + $angka2;
		return $hasil;
	}

	echo "12 + 25 = " . penjumlahan(12,25) . "<br>" ;
	*/
	/**function jumlah($a, $b) {
		return $a + $b
	}
	echo jumlah(6, 7);
	*/
	function aritmatika($a, $b, $operator){
		switch ($operator) {
			case 'tambah':
				$c = $a + $b;
			break;
			case 'kali':
				$c = $a * $b;
			break;
			case 'bagi':
				$c = $a / $b;
			break;
			case 'kurang':
				$c = $a - $b;
			break;
			default;
				$c = "tidak ada operator.";
		}
		return $c;
	}
		echo aritmatika(20, 15, "kurang");
?>