<?php
function check_post($nama){
	if (isset($nama)) {
		$message = $nama; 
	} else{
		$message = '';
	}
	return $message;
}

$data = array(1=>"User",
			  2=>"Admin");