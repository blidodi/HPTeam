<?php 


	$row = array(
				'ID' => array(1, 2, 4, 5),
				'nama' => array('Andi', 'Dewi', 'Putu', 'Laras'),
				'nominal' => array(1300000, 500000, 600000, 700000),
				'kebutuhan' => array('Beli OPPO', 'Kalkun', 'Babi', 'Kambing')
		   );

	$i = 0;

	foreach ($row as $key => $value) {
		echo $value[3]."<br/>";
	}