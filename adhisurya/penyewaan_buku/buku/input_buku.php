<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Buku</title>
</head>
<body>
    <div id="header">
		<h1>Tambah Buku</h1>
	</div>
	<form action="../proses.php?aksi=tambah_buku" method="post">
		<table>
			<tr>
				<td>Kode Buku</td>
				<td><input type="text" name="kode_buku"></td>
			</tr>
			<tr>
				<td>ISBN</td>
				<td><input type="text" name="isbn"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Penlis</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class ="button button1" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>