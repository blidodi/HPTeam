<?php

	if (isset($_POST['login']) && $_POST['login'] == 'Login') {

		if (empty($_POST['nama']) && empty($_POST['password'])) {

			header('location:index.php');

		} else if (isset($_POST['nama']) && isset($_POST['password'])) {
			
			include "koneksi.php";
			
			$sql = "SELECT * FROM `user` WHERE `username`='".$_POST['nama']."' AND `pass`='".md5($_POST['password'])."'";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){

				$row = mysql_fetch_array($result);

				session_start();

				$_SESSION['nama'] = $_POST['nama'];
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