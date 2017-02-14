<?php
$totalBayar = 2000;
$denda = 500;
$tglBayar = '2012-06-21';
$dateBayar = substr($tglBayar, 8,2);
if($dateBayar > 20){
	$totalBayar = $totalBayar + $denda;

}
echo "Total:".$totalBayar."<br/>";

$start_date = new DateTime("2015-02-03");
$end_date = new DateTime("2015-02-08");
$interval = $start_date->diff($end_date);
echo "$interval->days hari "; // hasil : 217 hari

?>