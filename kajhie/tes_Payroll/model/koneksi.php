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

	function key($query){
		$data = mysql_query($query);
		if (!$data) {
			printf("Error : ",mysql_error());
			exit();
		}
		return $data;
	}

	function login($email, $pass){
		$data = mysql_query("SELECT * FROM user where email='$email' AND password='$pass'");
		if (!$data) {
			printf("Error : ",mysql_error());
			exit();
		}
		return $data;
	}


}
?>