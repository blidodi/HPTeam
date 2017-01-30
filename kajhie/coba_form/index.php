<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<form action="proses_login.php" method="post">
		
			<div class="login-heading"><h2>Form Login</h2></div>
			<div><input type="text" name="username" placeholder="Username" class="input-txt" required /></div>
			<div><input type="password" name="password" placeholder="Password" required="" class="input-txt" /></div>
			<div><input type="submit" name="login" value="LOGIN" class="btn btn--right"></div>
			<div>
				<?php
				if (isset($_GET['pesan']) && !empty($_GET['pesan'])) {
					switch ($_GET['pesan']) {
						case 1:
							$pesan = "User Atau Password Anda Salah !!!";
							break;
						default;
							$pesan = "Anda Tidak Berhak Mengakses Pesan Ini";
					}
					echo "Pesan : ".$pesan;
				}
			?>
			</div>
		</div>
	</form>
</body>
</html>