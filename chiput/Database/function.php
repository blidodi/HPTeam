<?php

	function cek_post($name){
		if (isset($name)) {
			$pesan = $name;
		} else {
			$pesan = '';
		}

		return $pesan;
	}

	$status = array("Pilih","lunas","kredit","hutang" );

?>