<html>
<head>
	<title>Piramida</title>
</head>
<body>

<?php
function piramida($bintang){
	for ($i = 0; $i < $bintang; $i++) {
		for ($j = $bintang; $j > $i; $j--) {
			echo '&nbsp;';
		}
		for ($k = 0; $k <= $i; $k++) {
			echo '*';
		}
		echo '<br/>';
	}
}
echo piramida(10);
?>

</body>
</html>