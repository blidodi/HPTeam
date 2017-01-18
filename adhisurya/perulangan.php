<?php

	/*function hello($count){
		$pesan = "";
		for($i=1; $i <= $count; $i++) {
			$pesan .= "hello world $i <br/>";
	}

		return $pesan;
}
	echo hello(5);*/

	function fibonnaci($jumlah);
		$a = 0;
		$b = 1;
		$hasil = "";
			for ($i=0; $i < $jumlah; $i++){
				hasil .= " ".$a;
				$c = $a + $b;
				$a = $c;
				$b = $c;
			}
		return $hasil;	
	}
		echo fibonnaci(5);
?>