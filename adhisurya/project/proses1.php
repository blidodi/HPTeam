<?php
	if(isset($_POST['save']) && $_POST['save'] == "Login") {
		if(empty($_POST['username']) && empty($_POST['password'])) {
			header('location:index.php?pesan=1&nama=1');
		} else if (isset($_POST['username']) && isset($_POST['password'])) {
			include "config.php";

			$sql = "SELECT `username`,`password` 
					FROM `user` 
					WHERE `username`='".$_POST['username']."' AND `password`='".$_POST['password']."'";

			$result = mysql_query($sql);

			if (mysql_num_rows($result) > 0) {
				$row = mysql_fetch_array($result);

				session_start();
				$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];

				header("location:dashboard.php");
			}
		} else {
			header('location:index.php?pesan=2&nama=2');
		}
	}
?>