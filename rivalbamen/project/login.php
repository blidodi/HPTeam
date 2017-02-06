<?php
	session_start();
	
	if(isset($_SESSION['password']) && isset($_SESSION['username'])) {
		header('location:dashboard.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<form action="login-proses.php" method="post">
		<h1><i class="fa fa-lock"></i> Silahkan Login</h1>
		<div class="form">
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" name="login" value="Login" />
		<br/>
		</div>	
	</form>
</body>
</html>