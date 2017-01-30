<?php
//session login
if(isset($_POST['login']) && $_POST['login'] == "Login") {
		if(empty($_POST['password']) && empty($_POST['username'])) {
			header('location:login.php?pesan=1&pass=1');
		} else if (isset($_POST['password'])  && isset($_POST['username'])) {
			include "koneksi.php";

			$sql = "SELECT username, password FROM user 
					WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
					
			$result = mysql_query($sql);

			if (mysql_num_rows($result) > 0) {
				$row = mysql_fetch_array($result);
				session_start();
				$_SESSION['password'] = $_POST['password'];
				$_SESSION['username'] = $_POST['username'];
				header('location:dashboard.php');
			} else {
				header('location:login.php?pesan=2&pass=2');
			}
		} else {
			header('location:login.php?pesan=2&pass=2');
		}
	} else {
		header('location:login.php');
	}
	?>