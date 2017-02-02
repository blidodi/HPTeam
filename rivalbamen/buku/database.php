<?php 

class Database
{
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "kwitasi";

	function __construct()
	{
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_buku()
	{
		$buku = mysql_query("SELECT * FROM buku");
		while($tampil = mysql_fetch_array($buku)){
			$hasil[] = $tampil;
		}
		return $hasil;
	}

	function tambah_buku($isbn, $judul, $pengarang, $penerbit) 
	{
		mysql_query("INSERT INTO buku VALUES('','$isbn','$judul','$pengarang','$penerbit')");
	}

	function hapus_buku($id){
		mysql_query("DELETE FROM buku WHERE id='$id'");
	}

	function ubah_buku($id, $isbn, $judul, $pengarang, $penerbit){
		mysql_query("UPDATE buku SET isbn='$isbn', judul='$judul', 
					pengarang='$pengarang', penerbit='$penerbit'
					WHERE id='$id'");
	}

	function tampil_edit($id){
		$buku = mysql_query("SELECT * FROM buku WHERE id='$id'");
		while($edit = mysql_fetch_array($buku)){
			$hasil[] = $edit;
		}
		return $hasil;
	}
} 
?>