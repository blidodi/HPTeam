<?php

function waktu($jam){
	$time = array("pagi","siang","sore","malam");
	
		if ($jam >= 1 && $jam <= 12) {
			$kata =  "selamat $time[0]";
		} else if ($jam > 12 && $jam <= 15) {
			$kata =  "selamat $time[1]";
		} else if ($jam > 15 && $jam <= 18) {
			$kata =  "selamat $time[2]";
		} else {
			$kata =  "selamat $time[3]";
		}
		return $kata;
	}

echo waktu(19);
