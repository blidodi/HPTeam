<html>
<head>
	<title>Fungsi Terbilang</title>
</head>
<body>

<?php
function terbilang($x){
    $angka = array("", "Satu", "Dua", "Tiga", "Empat", "Lima",
    				"Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $bilang = "";
	    if ($x <12) {
	        $bilang = " ".$angka[$x];
	    } else if ($x <20) {
	        $bilang = terbilang($x - 10)." Belas";
	    } else if ($x <100) {
	        $bilang = terbilang($x/10)." Puluh". terbilang($x % 10);
	    } else if ($x <200) {
	        $bilang = " Seratus".terbilang($x - 100);
	    } else if ($x <1000) {
	        $bilang = terbilang($x/100)." Ratus".terbilang($x % 100);
	    } else if ($x <2000) {
	        $bilang = " Seribu".terbilang($x - 1000);
	    } else if ($x <1000000) {
	        $bilang = terbilang($x/1000)." Ribu".terbilang($x % 1000);
	    } else if ($x <1000000000) {
	        $bilang = terbilang($x/1000000)." Juta".terbilang($x % 1000000);
	    } else if ($x <1000000000000) {
	        $bilang = terbilang($x/1000000000)." Milyar".terbilang(fmod($x,1000000000));
	    } else if ($x <1000000000000000) {
	        $bilang = terbilang($x/1000000000000)." Trilyun".terbilang(fmod($x,1000000000000));
	    }     
	        return $bilang;
	}
echo terbilang(12911);

?>
</body>
</html>