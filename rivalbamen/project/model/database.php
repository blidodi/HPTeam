<?php 

class Database
{
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "sewa_buku";

	function __construct()
	{
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->db);
	}
}

?>