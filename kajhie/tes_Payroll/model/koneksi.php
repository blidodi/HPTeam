<?php
class data_base{
	var $host = "localhost";
	var $name = "root";
	var $pass = "";
	var $db ="db_pegawai";

	function __construck(){
		mysql_connect($this->host, $this->name, $this->pass);
		mysql_select_db($this->db);
	}
}
?>