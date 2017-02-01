<?php

	function cek_tampil($nama_user){
		if (isset($nama_user)) {
			$pesan = $nama_user;
		} else {
			$pesan = ''; 
		}

		return $pesan;
	}

	$status = array(1=>"user",2=>"admin");
	$status1 = array(1=>"lunas",2=>"kredit",3=>"hutang");

?>