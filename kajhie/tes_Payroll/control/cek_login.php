<?php

	if (isset($_POST['login']) && $_POST['login'] == 'Login') {

		if (empty($_POST['email']) && empty($_POST['password'])) {

			header('location:../view/login.php');

		} else if (isset($_POST['email']) && isset($_POST['password'])) {
			
			// include "koneksi.php";
			require '../model/koneksi.php';
			$db = new data_base();

			$result = $db->login($_POST['email'],$_POST['password']);

			if(mysql_num_rows($result)>0){

				$row = mysql_fetch_array($result);

				session_start();

				$_SESSION['email'] = $_POST['email'];
				$_SESSION['password'] = $_POST['password'];
				$_SESSION['nama'] = $row['user_name'];
				$_SESSION['id'] = $row['id_pegawai'];
				if ($row['level']==3) {
					header('location:../view/user_halaman_utama.php');
				}else if ($row['level']==2) {
					header('location:../view/admin_halaman_utama.php');
				}
			}else{
			header('location:../view/login.php?page=1');
		}
		}else{
			header('location:../view/login.php');
		}
	}else{
			header('location:../view/login.php');
	}
?>