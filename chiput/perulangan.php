<?php

/* function ulang($count){
	$perulangan="";

for ($i=0; $i < $count; $i++) { 
	$perulangan .= "Hallo World</br>";
}

return $perulangan;

}

echo ulang(3);
*/

/*function ulang($count){

$perulangan="";

for ($i=1; $i <= $count; $i++) { 
	$perulangan .= "<h2> Hallo World ".$i."</br></h2> ";
} 

return $perulangan;
}

echo ulang(4);
*/

/* function fibonaci($count){

$angka1 = 0;
$angka2 = 1;

$perulangan = "";
for ($i=0; $i <= $count; $i++) { 
	$perulangan .= " " .$angka1; 
	$total = $angka1+$angka2;
	$angka1 = $angka2;
	$angka2 = $total;
} 

return $perulangan;
}

echo fibonaci(10);
*/

/* function ganjilgenap($count){

$perulangan="";

for ($i=1; $i <= $count; $i++) { 

	if ($i%2 == 0) {
		$perulangan .= "$i | Genap</br> ";
	}else{
		$perulangan .= "$i | Ganjil</br> ";
	}
}


	return $perulangan;
}

echo ganjilgenap(4);
*/

function terbilang($i){
	angkakata = array("satu", "dua", "tiga");

	if ($i < 12) {
		return " " . $huruf[$i];
	} elseif ($i < 20) {
		return terbilang($i - 10) . " belas";
	} elseif ($i < 100) {
		return terbilang($i / 10) . " puluh" . terbilang($i % 10);
	} elseif ($i < 200) {
		return " seratus" . terbilang($i - 100);
	} elseif ($i < 1000) {
		return terbilang($i / 100) . " ratus" . terbilang($i % 100);
	} elseif ($i < 2000) {
		return " seribu" . terbilang($i - 1000);
	} elseif ($i < 1000000) {
		return terbilang($i / 1000) . " ribu" . terbilang($i % 1000);
	} else ($i < 1000000000) {
		return terbilang($i / 1000000) . " juta" . terbilang($i % 1000000);  
	}   
}
}