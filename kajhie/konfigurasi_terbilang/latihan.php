<?php

/**function tambah($a,$b){
return $a + $b;

function kurang($a,$b){
return $a - $b;
}
function kali($a,$b){
return $a * $b;
}
function bagi($a,$b){
return $a / $b;
}*/


function aritmatika($a,$b,$operator){
	$hasil;
	if($operator == "tambah"){
		$hasil = $a + $b;
	}else if ($operator == "kurang") {
		$hasil = $a - $b;
	}else if ($operator == "kali") {
		$hasil = $a * $b;
	}else if ($operator == "bagi") {
		$hasil = $a / $b;
	}
	return $hasil;
}

$a = 10;
$b = 5;
$operator = "kali";

echo aritmatika($a,$b,$operator);

// switch (aritmatika($operator)) {
// 	case 'tambah':
// 		echo aritmatika($a,$b,$operator);
// 		break;
// 	case 'kurang':
// 		echo aritmatika($a,$b,$operator);
// 		break;
// 	case 'kali':
// 		echo aritmatika($a,$b,$operator);
// 		break;
// 	case 'bagi':
// 		echo aritmatika($a,$b,$operator);
// 		break;
// }