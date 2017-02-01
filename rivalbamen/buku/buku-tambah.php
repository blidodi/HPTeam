<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Buku</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Tabel Buku</h1>
	</div>
	<div class="form">
	<p><a class="p-color" href="index.php">Tabel Buku</a> / Tambah Buku</p>
	<form action="proses.php?action=tambah" method="post">
		<label>ISBN :</label>
		<input type="text" name="isbn" />
		<label>Judul :</label>
		<input type="text" name="judul" />
		<label>Pengarang :</label>
		<input type="text" name="pengarang" />
		<label>Penerbit :</label>
		<input type="text" name="penerbit" />
		<br/>
		<input type="submit" name="simpan" value="Simpan">
	</form>
	</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>