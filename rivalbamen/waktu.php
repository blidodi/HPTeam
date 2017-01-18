<html>
<head><title>Waktu Dalam Hari</title></head>
<body>
<?php

function waktu($jam) {
	$time =  array("pagi", "siang", "sore", "malam");
	if ($jam>= 1 && $jam <= 12) {
		return "selamat $time[0]";
	} else if ($jam > 12 && $jam <= 15) {
		return "selamat $time[1]";
	} else if ($jam > 15 && $jam <= 18) {
		return "selamat $time[2]";
	} else {
		return "selamat $time[3]";
	}	
}
echo waktu(15);
?>
</body>
</html>