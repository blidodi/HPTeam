<?php
	session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
			header('location:login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<table>
	<tr>
		<td>HEADER</td>
	</tr>
	<tr>
		<td>
			<a href="index.php" title="halaman beranda">Beranda</a>
   			<a href="user.php" title="halaman biodata">Biodata</a>
 			<a href="table.php" title="halaman siswa">Siswa</a>
 			<a href="buku.php" title="halaman siswa">Siswa</a>
		</td>
	</tr>
	<tr>
		<td>ISI</td>
	</tr>
	<tr>
		<td>FOOTER</td>
	</tr>
</table>	
</body>
</html>