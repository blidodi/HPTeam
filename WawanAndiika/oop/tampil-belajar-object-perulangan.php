<?php include "belajar-object-perulangan.php";
	  include "belajar-aritmatika.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tampil OOP</title>
	</head>
	<body>

	<?php 
		//** Tampil OOP Dari Object Perulangan
		$object = new Object();
		echo $object->header(); 
		$data = array('binatang' => array('ayam','kucing','sapi','kambing','sapi','ayam hutan'));
		echo $object->body($data); 
		echo $object->footer(); 
	?>
	<br/>
	<?php
		//** Tampil OOP Dari Object Aritmatik
		$aritmatik = new Aritmatika();
		$aritmatik->kali(10,2);
		echo $aritmatik->aritmatika_hasil();
	?>

	</body>
</html>