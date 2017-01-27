<?php
	if (isset($_POST['login']) && $_POST['login'] == 'Login') {
		if (empty($_POST['user']) && empty($_POST['password'])) {
			header('location:index.php?pesan=1');
		} else if (isset($_POST['user']) && isset($_POST['password'])) {
			
			include "koneksi.php";
			
			$sql = "SELECT `username`,`pass` FROM `user` WHERE `username`='".$_POST['user']."' AND `pass`='".$_POST['password']."'";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){
				$row = mysql_fetch_array($result);
				session_start();
				$_SESSION['user'] = $_POST['user'];
				$_SESSION['password'] = $_POST['password'];
				header('location:tabel_user.php');
			}
		}else{
			header('location:index.php?pesan=2');
		}
	}else{
		header('location:index.php');
	}
?>