<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tambah Member</title>
</head>
<body>
    <div id="header">
		<h1>Tambah Member</h1>
	</div>
	<form action="../proses.php?aksi=tambah_member" method="post">
		<table>
			<tr>
				<td>Kode Member</td>
				<td><input type="text" name="kode_member"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class ="button button1" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>