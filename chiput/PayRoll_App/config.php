<?php

define('db_server', 'localhost');
define('db_user', 'root');
define('db_pass', '');
define('db_database', 'payroll_db');
/**
* 
*/
class koneksi_DB
{
	function __construct()
	{
		$connection = mysql_connect(db_server, db_user, db_pass, db_database) or die("Oo...owh...koneksi error" . mysql_error());
		mysql_select_db(db_database, $connection) or die("Database error ... ".mysql_error());
	}
}

?>