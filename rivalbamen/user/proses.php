<?php 

function check_post($name) {
	if(isset($name)) {
		$messege = $name;
	} else {
		$messege = '';
	}
	return $messege;
}
$status = array("--Pilih--", "Admin", "User");
$role = array("", "1", "2");
//$sql_role = "SELECT * FROM user_role";
//$result = mysql_query($sql_role);

?>