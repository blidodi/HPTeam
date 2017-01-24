<?php 
	session_start();
	if (isset($_SESSION['data']) && $_SESSION['data'] == '123' && isset($_SESSION['nama']) && $_SESSION['nama'] == 'chiput') {
		//header('location:dasboard.php');
				if (isset($_POST['data']) && $_POST['data'] != '123' && isset($_POST['nama']) && $_POST['nama'] != 'chiput') {
				echo "User dan Password Salah";
				}
	} else if (isset($_SESSION['data']) && $_SESSION['data'] != '123' && isset($_SESSION['nama']) && $_SESSION['nama'] != 'chiput') {
			echo "User dan Password Salah";
		}
?>

<html>
	<head>
		<title>Learn SESSION Part1</title>
		<style>
			input{
				margin-top: 10px;
				display: block;
			}
		</style>
	</head>
<body>
	<form action="proses.php" method="post">
		Masukkan Nama : <input type="text" name="nama"/> </br>
		Masukkan Kata Sandi : <input type="password" name="data"/> </br>
		<input type="submit" name="simpan" value="Simpan"/>
		<?php 

		?>
	</form>
</body>
</html>