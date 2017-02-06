<?php 

class database{

	var $host	= "localhost";
	var $usname	= "root";
	var $pass	= "";
	var $db 	= "penyewaan_buku";

	function __construct(){
		mysql_connect($this->host, $this->usname, $this->pass);
		mysql_select_db($this->db);
	}

	//select user
	function user(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah user
	function input_user($kode_user,$nama,$username,$password){
	mysql_query("insert into user values('','$kode_user','$nama','$username','$password')");
	}

	//hapus user
	function hapus_user($id){
		mysql_query("delete from user where ID='$id'");
	}

	//edit user
	function edit_user($id){
		$data = mysql_query("select * from user where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
 	//update user
	function update($id,$kode_user,$nama,$username,$password){
		mysql_query("update user set kode_user='$kode_user', nama='$nama', username='$username', password='$password' where id='$id'");
	}

	//select buku
	function buku(){
		$data = mysql_query("select * from buku");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	//tambah buku
	function input_buku($kode_buku,$isbn,$judul,$penulis,$penerbit){
	mysql_query("insert into buku values('','$kode_buku','$isbn','$judul','$penulis','$penerbit')");
	}
 	
 	//edit buku
	function edit_buku($id){
		$data = mysql_query("select * from buku where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

} 

?>