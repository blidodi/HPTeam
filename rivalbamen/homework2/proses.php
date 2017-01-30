<?php 
//checkpost role
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

$bayar = array(
			1 => "Tunai",
			2 => "Kredit" );

?>
