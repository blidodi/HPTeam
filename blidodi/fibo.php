<?php 

function fibo($baris) {

	$a = 0;
	$b = 1;

	$pesan = "";
	for ($i=0; $i < $baris; $i++) {
	 	$pesan .= " ".$a;
	 	$c = $a + $b;
	 	$a = $b;
	 	$b = $c;
	}

	return $pesan;
}

echo fibo(10);