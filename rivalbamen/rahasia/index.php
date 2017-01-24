<?php
	session_start();
	if(isset($_SESSION['data']) && $_SESSION['data'] == '123' && isset($_SESSION['nama']) && $_SESSION['nama'] == 'Rival') {
		header('location:dashboard.php');
	}
?>
<html>
<head>
	<title>Session Test</title>
	<style>
		input {
			margin-top: 10px;
			display: block;
			height: 35px;
			width: 300px;
			margin-top: 2px;
		    margin-bottom: 5px;
		    margin-right: 10px;
		    margin-left: 0px;
		    padding: 5px;
		    border-radius: 5px;
		}

		input[type=submit] {
			margin-top: 10px;
			border: none;
			background: rgb(0, 196, 146);
			border-radius: 5px;
			color: white;
		}
	</style>
</head>
<body>
	<h2>Isi Form Berikut :</h2>
	<form action="proses.php" method="post">
		Nama : <br/>
		<input type="text" name="nama" /> <br/>
		Kata Sandi : <br/>
		<input type="password" name="data" />
		<input type="submit" name="save" value="Save" />
	</form>
</body>
</html>