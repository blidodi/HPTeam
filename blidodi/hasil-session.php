<?php

session_start();

if(isset($_SESSION['data'])) {
	echo "gulai ". $_SESSION['data'];
	echo "<br/";
}