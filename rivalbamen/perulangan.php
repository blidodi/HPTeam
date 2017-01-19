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
			$a=$b;
			$b=$c;
			
		}
		return $hasil."<br/><br/>";
	}
	echo fibo(10);

function ganjil($count) {
	$pesan = "";
	
		for ($i=1; $i<$count; $i++) {
			if ($i%2 == 0){ 
			$pesan.="$i | Genap<br/>"; 
		}else {
			$pesan.="$i | Ganjil<br/>"; 
		}		 		
	}	
	return $pesan;
}
echo ganjil(6);