<?php

	function hello($count){
		$pesan = "";
		for($i=1; $i <= $count; $i++) {
			if ($i%2 == 0){
				$pesan .= "$i | Genap<br/>";
			}else{
				$pesan .= "$i | Ganjil<br/>"; 
			}
		}
		return $pesan;
	}	
		echo hello(5);
?>