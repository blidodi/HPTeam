
<html>
<head><title>Waktu Dalam Hari</title></head>
<body>
	<!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="jam">
		<input type="submit" name="submit" value="Enter">
	</form> -->
<?php

/** if (isset($_POST['submit'])) {

$time = array("pagi","siang","sore","malam");
	
	if ($_POST['jam'] >= 1 && $_POST['jam'] <= 12) {
		echo "selamat $time[0]";
	} else if ($_POST['jam'] > 12 && $_POST['jam'] <= 15) {
		echo "selamat $time[1]";
	} else if ($_POST['jam'] > 15 && $_POST['jam'] <= 18) {
		echo "selamat $time[2]";
	} else {
		echo "selamat $time[3]";
	}
}

switch ($time) {
	case 1:
		echo "selamat siang";
	break;
	case 2:
		echo "selamat pagi";
	break;
	
}

*/

$angka = array("satu", "dua", "tiga");

for($i=0; $i < count($angka); $i++) {
	echo $angka[$i];
	echo "<br/>";
}

$i = 0;
while ($i < count($angka)) {
	echo $angka[$i];
	echo "<br/>";
	$i++;
}


?>
</body>
</html>
