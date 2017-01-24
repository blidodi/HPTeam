<?php 
	session_start();
	if (isset($_SESSION['data']) && $_SESSION['data'] == '123' && isset($_SESSION['nama']) && $_SESSION['nama'] == 'chiput') {
		header('location:dasboard.php');
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
		Masukkan Nama : <input type="text" name="nama"/></br>
		Masukkan Kata Sandi : <input type="password" name="data"/></br>
		<input type="submit" name="simpan" value="Simpan"/></br>
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