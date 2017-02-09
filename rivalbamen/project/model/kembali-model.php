<?php
include 'database.php';
class Kembali extends Database {

	/**Kembali**/
	//Menampilkan Data Kembali
	function tampil_kembali()
	{
		$kembali = mysql_query("SELECT * FROM kembali ORDER BY tgl_kembali DESC");
		while($tampil = mysql_fetch_array($kembali)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	//Menambah kembali
	function add_kembali($tgl_kembali, $member, $buku, $denda) 
	{
		mysql_query("INSERT INTO kembali VALUES('','$tgl_kembali','$member','$buku', '$denda')");
	}

	//Menghapus kembali
	function delete_kembali($id){
		mysql_query("DELETE FROM kembali WHERE id='$id'");
	}

	//Mengubah kembali
	function edit_kembali($id, $tgl_kembali, $member, $buku, $denda){
		mysql_query("UPDATE kembali SET tgl_kembali='$tgl_kembali', member='$member', 
					buku='$buku', denda='$denda'
					WHERE id='$id'");
	}

	//Menampilkan data kembali di ubah kembali
	function tampil_edit_kembali($id){
		$kembali = mysql_query("SELECT * FROM kembali WHERE id='$id'");
		while($edit = mysql_fetch_array($kembali)){
			$hasil[] = $edit;
		}
		return $hasil;
	}

	
} 

	?>