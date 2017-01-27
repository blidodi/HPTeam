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

?>