<?php
	//connect to database  
	mysql_connect('localhost', 'root', '');  
	mysql_select_db('hp_training');  
	  
	//get the username  
	$username = mysql_real_escape_string($_POST['username']);  
	  
	$result = mysql_query('select username from tbl_user where username = "'. $username .'"');  
	if(mysql_num_rows($result)>0){  
	    echo 0;  
	}else{  
	    echo 1;  
	}
?>