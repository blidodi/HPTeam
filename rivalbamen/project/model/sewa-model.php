<?php
include 'database.php';
class Sewa extends Database {

	/**Sewa**/
	//Menampilkan Data Sewa
	function tampil_sewa()
	{
		$sewa = mysql_query("SELECT * FROM sewa");
		while($tampil = mysql_fetch_array($sewa)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	//Menambah Sewa
	function add_sewa($tanggal, $member, $buku, $harga) 
	{
		mysql_query("INSERT INTO sewa VALUES('','$tanggal','$member','$buku', '$harga')");
	}

	//Menghapus Sewa
	function delete_sewa($id){
		mysql_query("DELETE FROM sewa WHERE id='$id'");
	}

	//Mengubah Sewa
	function edit_sewa($id, $tanggal, $member, $buku, $harga){
		mysql_query("UPDATE sewa SET tanggal='$tanggal', member='$member', 
					buku='$buku', harga='$harga'
					WHERE id='$id'");
	}

	//Menampilkan data sewa di ubah sewa
	function tampil_edit_sewa($id){
		$sewa = mysql_query("SELECT * FROM sewa WHERE id='$id'");
		while($edit = mysql_fetch_array($sewa)){
			$hasil[] = $edit;
		}
		return $hasil;
	}

	
} 

	?>