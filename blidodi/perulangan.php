<?php

	function hello($count) {
		$pesan = "";
		for ($i=1; $i <= $count; $i++)  {
			$pesan .= "Hello World $i<br/>";
		}

		return $pesan;
	}

	echo hello(5);