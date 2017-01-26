<?php
		function check_post($name) {
			if(isset($name)){
				$message = $name;
			} else {
				$message = '';
			}
			  return $message;
		}

$role = array("Pilih", "Admin", "User");	