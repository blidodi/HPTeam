<?php 

function check_post($name) {
	if(isset($name)) {
		$messege = $name;
	} else {
		$messege = '';
	}
	return $messege;
}
$role = array(
			1 => "Admin",
			2 => "User" );

?>