<?php

if (isset($_POST['login']) && $_POST['login'] == "Login") {
	# code...
	if (empty($_POST['username']) && empty('password')) {
		# code...
		header('location:index.php?$pesan=1');
	
	} elseif (isset($_POST['username']) && isset($_POST['password'])) {
		# code...
		include "connection.php";

		$sql = "SELECT `username`,`password` FROM `user` WHERE `username`='".$_POST['username']."' AND `password`='".$_POST['password']."'";

		$result = mysql_query($sql);

		if (mysql_num_rows($result) > 0) {
			# code...
			$row = mysql_fetch_array($result);

			session_start();

			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];

			header('location:tampildata.php');
		}

	} else {
		header('location:index.php?pesan=2');
	}
}
?>