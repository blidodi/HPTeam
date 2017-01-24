<?php

function fibonaci($jml){
	$a=0;
	$b=1;
	$pesan="";
		for ($i = 0; $i <= $jml; $i++) { 
			$pesan.=$a;
			$c=$a+$b;
			$a=$c;
			$b=$a;
			}
		return $pesan;
	}

echo fibonaci(4);