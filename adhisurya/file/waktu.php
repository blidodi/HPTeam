<?php
	function waktu($jam){
	$time = array("pagi", "siang", "sore", "malam");
	if ($jam >= 1 && $jam <= 12) {
		echo "selamat $time[0]";
	} else if ($jam > 12 && $jam <= 15) {
		echo "selamat $time[1]";
	} else if ($jam > 15 && $jam <= 18) {
		echo "selamat $time[2]";
	} else {
		echo "selamat $time[3]";
	}
} 
	waktu(10);
?>