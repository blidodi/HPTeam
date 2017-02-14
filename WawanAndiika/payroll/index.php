<?php session_start();
	include"controllers/controller.php";
	if(isset($_SESSION['userStatus'])){
		if($_SESSION['userStatus']=='userLogin'){
			if(isset($_GET['page'])){
				switch ($_GET['page']) {
					case 'pegawai':
						include "templates/pegawai.php";
						break;
					case 'jabatan':
						include "templates/jabatan.php";
						break;
					case 'user':
						if($_SESSION['role']==1){
							include "templates/user.php";
						} else {
							include "404.php";
						}
						break;
					case 'gaji':
						include "templates/gaji.php";
						break;
					default:
						include "404.php";
				}
			} else {
				include "templates/dashboard.php";
			}
		} else {
			header("location:/login.php");
		}
	}  else {
		header("location:/login.php");
	}
?>