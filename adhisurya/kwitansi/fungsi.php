<?php
		function check_post($name) {
			if(isset($name)){
				$message = $name;
			} else {
				$message = '';
			}
			  return $message;
		}

$role = array (
			1 => "Admin",
			2 => "User");

$status = array("Pilih", "Lunas", "Kredit");	
?>