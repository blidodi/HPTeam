<?php
function check_post($name) {
		if(isset($name)) {
			$message = $name;
		} else {
			$message = '';
		}

		return $message;
	}

$status = array("Pilih", "Lunas", "Kredit");