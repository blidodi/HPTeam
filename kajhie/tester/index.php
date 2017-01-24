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
	<input type="submit" name="masuk" value="Masuk"/>
</form>
</body>
</html>