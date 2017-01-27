<?php 
	session_start();
	if (isset($_SESSION['username']) && $_SESSION['password']) {
		header('location:dashboard.php');
		}
?>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="styleLogin.css">
	</head>
<body>
<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Silahkan<span>LogIn</span></div>
		</div>
	<form action="proses.php" method="post">
	<div class="login">
		 <input type="text" placeholder="username" name="username" class="fieldinput2" /></br>
		<input type="password" placeholder="password" name="password" class="fieldinput3" /></br>
		<input type="submit" name="login" value="Login" class="button" /></br>
		</div>
		<?php
			if (isset($_GET['pesan']) && !empty($_GET['pesan'])) {
				# code...
				switch ($_GET['pesan']) {
					case 1:
						$pesan = "Masukkan User dan Password Anda";
						break;
					case 2:
						$pesan = "User dan Password Anda Salah";
						break;
					default;
						$pesan = "Anda Tidak Berhak Mengakses Pesan Ini";
				}
				echo "Pesan : ".$pesan;
			}
		?>
		
	</form>
</body>
</html>