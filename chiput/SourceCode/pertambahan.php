<?php

function aritmatika ($nilaia, $nilaib, $operasi){


switch ($operasi) {
	case "penjumlahan":
		$hasil = $nilaia+$nilaib;
		break;
		case 'pengurangan':
			$hasil = $nilaia-$nilaib;
			break;
			case 'perkalian':
				$hasil = $nilaia*$nilaib;
				break;
				case 'pembagian':
					$hasil = $nilaia/$nilaib;
					break;
}

return $hasil;

}

echo aritmatika(10,5,"penjumlahan");


?>