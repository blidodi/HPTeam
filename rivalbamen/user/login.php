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
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<form action="config.php" method="post">
		<h1><i class="fa fa-lock"></i> Silahkan Login</h1>
		<div class="form">
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" name="login" value="Login" />
		<br/>
		 
		<?php 
			if(isset($_GET['pesan']) && !empty($_GET['pesan']) && isset($_GET['pass']) && !empty($_GET['pass'])) {
				switch ($_GET['pesan']) {
					case 1:
						$pesan = "Nama tidak boleh kosong";
						break;
					case 2:
						$pesan = "Nama salah";
						break;
					default:
						$pesan = "Anda tidak berhak mengakses pesan ini";
				}
				echo "Pesan : ".$pesan."";
				echo "<br/>";
				switch ($_GET['pass']) {
					case 1:
						$pesan = "Kata Sandi tidak boleh kosong";
						break;
					case 2:
						$pesan = "Kata Sandi salah";
						break;
					default:
						$pesan = "Anda tidak berhak mengakses pesan ini";
				}
				echo "Pesan".$pesan."";
			}
		?>
		</div>	
	</form>
</body>
</html>