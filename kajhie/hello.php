<?php

	function hello($jml){
		$kata = "hello word"; 
		for ($i=1; $i <= $jml; $i++) { 
			echo $kata." ".$i ;
			echo "</br>";
		}
		return $kata;
	}

	hello(4);