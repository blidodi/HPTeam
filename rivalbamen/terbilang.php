<html>
<head>
	<title>Fungsi Terbilang</title>
</head>
<body>

<?php
function terbilang($an){
    $angka = array("", "Satu", "Dua", "Tiga", "Empat", "Lima",
    				"Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $bilang = "";
	    if ($an <12) {
	        $bilang = " ".$angka[$an];
	    } else if ($an <20) {
	        $bilang = terbilang($an - 10)." Belas";
	    } else if ($an <100) {
	        $bilang = terbilang($an/10)." Puluh". terbilang($an % 10);
	    } else if ($an <200) {
	        $bilang = " Seratus".terbilang($an - 100);
	    } else if ($an <1000) {
	        $bilang = terbilang($an/100)." Ratus".terbilang($an % 100);
	    } else if ($an <2000) {
	        $bilang = " Seribu".terbilang($an - 1000);
	    } else if ($an <1000000) {
	        $bilang = terbilang($an/1000)." Ribu".terbilang($an % 1000);
	    } else if ($an <1000000000) {
	        $bilang = terbilang($an/1000000)." Juta".terbilang($an % 1000000);
	    } else if ($an <1000000000000) {
	        $bilang = terbilang($an/1000000000)." Milyar".terbilang(fmod($an,1000000000));
	    } else if ($an <1000000000000000) {
	        $bilang = terbilang($an/1000000000000)." Trilyun".terbilang(fmod($an,1000000000000));
	    }     
	        return $bilang;
	}
echo terbilang(12911);

?>
</body>
</html>