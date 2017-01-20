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
