<?php
function title ()
{

	if(isset($_GET['act'])){ 
		echo ucfirst($_GET['act'])." "; 

	} 

	if(isset($_GET['page'])){
		echo ucfirst($_GET['page']);
	} else {
		echo "Dashboard";
	}
}

function rp($angka)
{
 	$message = "Rp " . number_format($angka,2,',','.');
	return $message;
}

function indo($date) { 
	$BulanIndo = array("Januari", "Februari", "Maret",
	   "April", "Mei", "Juni",
	   "Juli", "Agustus", "September",
	   "Oktober", "November", "Desember");
	$tahun = substr($date, 0, 4); 
	$bulan = substr($date, 5, 2); 
	$tgl   = substr($date, 8, 2);
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
	return($result);
}