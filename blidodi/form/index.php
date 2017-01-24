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
			<br/>
			<?php
				if(isset($_GET['pesan']) && !empty($_GET['pesan'])) {
					switch ($_GET['pesan']) {
						case 1:
							$pesan = "Kata sandi tidak boleh kosong.";
						break;
						case 2:
							$pesan = "Kata sandi tidak tepat.";
						break;
						default:
							$pesan = "Anda tidak berhak mengakses pesan ini.";
					}
					echo "Pesan : ".$pesan;
				}
			?>
			<br/>
			<input type="submit" name="save" value="Save" />
		</form>
	</body>
</html>