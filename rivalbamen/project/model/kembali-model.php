<?php
include 'database.php';
class Kembali extends Database {

	/**Kembali**/
	//Menampilkan Data Kembali
	function tampil_kembali()
	{
		$kembali = mysql_query("SELECT kembali.*, member.nama, buku.judul
								FROM kembali, member, buku  
								WHERE kembali.buku=buku.isbn AND kembali.member=member.no_member ORDER BY tgl_kembali DESC");
		while($tampil = mysql_fetch_array($kembali)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	//Menambah kembali
	function add_kembali($member, $tgl_sewa, $tgl_kembali, $buku, $denda) 
	{
		mysql_query("INSERT INTO kembali VALUES('','$member','$tgl_sewa','$tgl_kembali','$buku', '$denda')");
		mysql_query("UPDATE sewa SET status='Kembali' WHERE member='$member'");
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

	function tampil_sewa(){
		$tampil = mysql_query("SELECT member.nama as member, buku.judul as buku, sewa.tanggal as tanggal, sewa.kembali as kembali FROM member, sewa, buku WHERE sewa.member=member.no_member AND sewa.buku=buku.isbn AND sewa.status LIKE 'Sewa'");
		while($member = mysql_fetch_array($tampil)){
			$hasil[] = $member;
		}
		return $hasil;
	}
	
} 

	?>