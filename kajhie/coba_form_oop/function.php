<?php
function check_post($nama){
	if (isset($nama)) {
		$message = $nama; 
	} else{
		$message = '';
	}
	return $message;
}