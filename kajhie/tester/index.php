<?php
	session_start();
	if(isset($_SESSION['pass']) && $_SESSION['pass'] == '123' && isset($_SESSION['nama']) && $_SESSION['nama'] == 'abc'){
		header('location:dashboard.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coba Session</title>
</head>
<body>
<form action="proses.php" method="post">
	masukan nama : <input type="text" name="nama"/><br/>
	masukan kata sandi : <input type="password" name="pass"/><br/>
	<?php
		if (isset($_GET['pesan']) && isset($_GET['pesan1']) && !empty($_GET['pesan']) && !empty($_GET['pesan1'])) {
			// if ($_GET['pesan'] && $_GET['pesan1'] == 1) {
			// 	$a = "masukan password dan user name anda !";
			// } else if ($_GET['pesan'] && $_GET['pesan1'] == 2) {
			// 	$a = "user name atau password anda salah !";
			// } else{
			// 	$a = "anda tidak dapat mengakses halaman ini";
			// }
			// switch ($a = $_GET['pesan'] && $_GET['pesan1']) {
			// 	case 1:
			// 		$a = "masukan password dan user name anda !";
			// 		break;
				
			// 	case 2:
			// 		$a = "user name atau password anda salah !";
			// 		break;
				
			// 	default:
			// 		$a = "anda tidak dapat mengakses halaman ini";
			// }
			echo $a;
		}
	?>
	<br/>
	<input type="submit" name="masuk" value="Masuk"/>
</form>
</body>
</html>