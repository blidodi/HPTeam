<?php

	define('db_server', 'localhost'); 
	define('db_user', 'root');     
	define('db_pass', '');         
	define('db_name', 'payroll_db'); 

class Config {
	
	function __construct()
	{
		$connect = mysql_connect(db_server,db_user,db_pass) or die('Ooo...owh...koneksi error ->'.mysql_error());
		mysql_select_db(db_name, $connect) 
		or die('Database Error -> '.mysql_error());

	}
}

?>