<?php

class coba extends data_base
{
	
	function view(){
		$data = mysql_query("SELECT * FROM user");
		if (!$data) {
			printf("Error : ",mysql_error());
			exit();
		}
		return $data;
	}
}
	
?>