<?php

	if (isset($_POST['login']) && $_POST['login'] == 'LOGIN') {

		if (empty($_POST['username']) && empty($_POST['password'])) {

			header('location:index.php');

		} else if (isset($_POST['username']) && isset($_POST['password'])) {
			
			include "koneksi.php";
			
			$sql = "SELECT `username`,`pass` FROM `user` WHERE `username`='".$_POST['username']."' AND `pass`='".md5($_POST['password'])."'";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){

				$row = mysql_fetch_array($result);

				session_start();
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = $_POST['password'];
				header('location:halaman_utama.php');
			}

		}else{

			header('location:index.php?$pesan=1');
		}
	}else{
			header('location:index.php');
	}
?>