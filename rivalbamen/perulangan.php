<?php

/***function hello($count) {
	$pesan = "";
	for ($i=1; $i<$count; $i++) {
		$pesan.="Hello Rival $i<br/>";  
	}	
	return $pesan;
}
echo hello(6); */



function fibo($count) {
	$a = 0;
	$b = 1;
	$hasil = "";
		for ($i=0; $i<$count; $i++) {
			$hasil .= " ".$a;
			$c=$a + $b;
			$a=$c;
			$b=$c;
		}
		return $hasil;
	}
	echo fibo(5);