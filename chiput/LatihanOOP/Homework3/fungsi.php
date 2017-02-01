<?php

	function tampil($nama){
		if (isset($nama)) {
			$pesan = $nama_user;
		} else {
			$pesan = ''; 
		}

		return $pesan;
	}
?>