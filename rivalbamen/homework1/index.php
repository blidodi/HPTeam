<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="mstyle.css">
	<title>Form Login</title>
</head>

<body >
	<form action="proses.php" method="post">
	<table align="center">
		<th><h1>Login</h1></th>
		<tr>
			<td><input class="kolom"type="text" name="email" placeholder="Email"/>
				<?php
					if (isset($_GET["empty_all"]) || isset($_GET["empty_email"]))
					//echo "Email wajib Isi";		
				 ?>
			</td>
		</tr>
		<tr>
			<td><input class="kolom" type="password" name="password" placeholder="Password"/>
				<?php
					if (isset($_GET["empty_all"]) || isset($_GET["empty_password"]))
					//echo "Password wajib Isi";		
				 ?>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="Login" name="login" />
				<?php
					if (isset($_GET["failed"])) //echo "Incorect Account";		
				 ?>
			</td>
		</tr>
		
	</table>
	<table align="center">
		<div>
		<th class="sign">New to us? <a href="#">Sign up</a></th>
		</div>
	</table>
	</form>

</body>
</html>