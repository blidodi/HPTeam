<?php
	session_start();
	if(isset($_SESSION['data']) && $_SESSION['data'] == '123') {
		header('location:dashboard.php');
	}
?>
<html>
	<head>
		<title>Test Form</title>
		<style>
			input {
				margin-top: 10px;
				display: block;
			}
		</style>
	</head>
	<body>
		<form action="proses.php" method="post">
			Masukkan Kata Sandi :<br/>
			<input type="password" name="data" />
			<input type="submit" name="save" value="Save" />
		</form>
	</body>
</html>