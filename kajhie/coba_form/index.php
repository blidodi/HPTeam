<?php
	session_start();
	if(isset($_SESSION['pass']) && ($_SESSION['nama'])){
		header('location:tabel_user.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form action="proses_login.php" method="post">
		<h2>Form Login</h2>
		<br/>
		<label>USER</label>
		<input type="text" name="user"/>

		<label>PASSWORD</label>
		<input type="password" name="password"/>

		<?php
			// if (isset($_GET['user']) && isset($_GET['password']) && !empty($_GET['user']) && !empty($_GET['password'])){

			// }
		?>

		<input type="submit" name="login" value="LOGIN">
	</form>
</body>
</html>