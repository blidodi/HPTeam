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