<?php
	require '../model/koneksi.php';
		$db = new data_base();

		$bonus = $_POST['bonus'];
		$tanggal = $_POST['tanggal'];
		$jumlah = count($bonus);

		for ($i=0; $i < $jumlah; $i++) { 
			$query = "UPDATE `absensi` SET `bonus = `'".$bonus[$i]."', WHERE = '".$tanggal[$i]."'";
			$result = $db->key($query);
		}
		
		if ($result) {
			echo "Data Berhasil di Simpan";
		}else{
			echo "Data Gagal disimpan!";
		}
?>