<?php
class data_base{
	var $host = "localhost";
	var $name = "root";
	var $pass = "";
	var $db ="db_pegawai";

	function __construct(){
		mysql_connect($this->host, $this->name, $this->pass);
		mysql_select_db($this->db);
	}

	function login(){
		$data = mysql_query("SELECT * FROM user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
}
?>