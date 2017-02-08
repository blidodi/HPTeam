<?php
include 'database.php';
class Sewa extends Database 
{

	/**Sewa**/
	//Menampilkan Data Sewa
	function tampil_sewa()
	{
		$sewa = mysql_query("SELECT sewa.id as id, sewa.tanggal, sewa.kembali, 
							member.nama, buku.judul, sewa.harga
							FROM sewa, buku, member
							WHERE sewa.buku=buku.isbn AND sewa.member=member.no_member");
		while($tampil = mysql_fetch_array($sewa)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	//Menambah Sewa
	function add_sewa($tanggal, $kembali, $member, $buku, $harga) 
	{
		mysql_query("INSERT INTO sewa VALUES('','$tanggal', '$kembali','$member','$buku', '$harga')");
	}

	//Menghapus Sewa
	function delete_sewa($id)
	{
		mysql_query("DELETE FROM sewa WHERE id='$id'");
	}

	//Mengubah Sewa
	function edit_sewa($id, $tanggal, $kembali, $member, $buku, $harga)
	{
		mysql_query("UPDATE sewa SET tanggal='$tanggal', kembali='$kembali',
					member='$member', buku='$buku', harga='$harga'
					WHERE id='$id'");
	}

	//Menampilkan data sewa di ubah sewa
	function tampil_edit_sewa($id)
	{
		$sewa = mysql_query("SELECT * FROM sewa WHERE id='$id'");
		while($edit = mysql_fetch_array($sewa)){
			$hasil[] = $edit;
		}
		return $hasil;
	}

	//menampilkan member
	function tampil_member(){
		$tampil = mysql_query("SELECT * FROM member");
		while($member = mysql_fetch_array($tampil)){
			$hasil[] = $member;
		}
		return $hasil;
	}

	//menampilkan buku
	function tampil_buku(){
		$tampil = mysql_query("SELECT * FROM buku");
		while($buku = mysql_fetch_array($tampil)){
			$hasil[] = $buku;
		}
		return $hasil;
	}
	
} 

	?>