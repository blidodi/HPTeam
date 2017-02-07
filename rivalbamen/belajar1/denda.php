<?php
$totalBayar = 2000;
$denda = 500;
$tglBayar = '2012-06-21';
$dateBayar = substr($tglBayar, 8,2);
if($dateBayar > 20){
	$totalBayar = $totalBayar + $denda;
}
echo "Total:".$totalBayar;