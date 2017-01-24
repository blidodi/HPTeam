<?php
$email = "doe@.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	$emailErr = "Invalid email format"; 
} else {
	 $emailErr = "Valid email format"; 
}

echo $emailErr;