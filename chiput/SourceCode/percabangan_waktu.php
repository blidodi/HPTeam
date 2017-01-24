<?php

function waktu($time1){

	$time = array("pagi","siang","sore","malam");

	
	if ($time1 >= 1 && $time1 <= 12) {
		$pesan = "selamat $time[0]";
	} else if ($time1> 12 && $time1<= 15) {
		$pesan = "selamat $time[1]";
	} else if ($time1 > 15 && $time1 <= 18) {
		$pesan = "selamat $time[2]";
	} else {
		$pesan = "selamat $time[3]";
	}

return $pesan;

}

echo "waktu menunjukan ".waktu(12);
