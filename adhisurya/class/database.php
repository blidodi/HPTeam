<?php 

class database{

	var $host	= "localhost";
	var $usname	= "root";
	var $pass	= "";
	var $db 	= "kwitansi";

	function __construct(){
		mysql_connect($this->host, $this->usname, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data(){
		$data = mysql_query("select * from buku");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function input($isbn,$nama,$penulis,$penerbit){
	mysql_query("insert into buku values('','$isbn','$nama','$penulis','$penerbit')");
	}

	function hapus($id){
		mysql_query("delete from buku where ID='$id'");
	}
}

?>