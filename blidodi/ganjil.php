<?php

/*

	function hello($count) {
		$pesan = "";
		
		for ($i=1; $i <= $count; $i++)  {

			if ($i%2 == 0) { 
				$pesan .= "$i | Genap<br/>";
			} else {
				$pesan .= "$i | Ganjil<br/>";
			}
			
		}

		return $pesan;
	}

	echo hello(5);

	*/

	for ($i=0; $i < 7; $i++) {
		$bintang = "";
		$spasi = "";

		for ($j=0; $j < $i; $j++) {
			$bintang .="* ";
		}
		echo "$spasi $bintang <br/>";
	}
