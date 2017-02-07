<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Penyewa</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			  <script>
				  $( function() {
				    $( "#datepickerpinjam" ).datepicker();
				    $( "#datepickerkembali" ).datepicker();
				  } );
			  </script>
		<link rel="stylesheet" type="text/css" href="../css/crud.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
		<h1>Tambah Penyewa</h1>
	</div>
	<form action="../proses.php?aksi=tambah_penyewa" method="post">
		<table>
			<tr>
				<td>Kode Penyewa</td>
				<td><input type="text" name="kode_sewa"></td>
			</tr>
			<tr>
				<td>Kode User</td>
				<td><input type="text" name="kode_user"></td>
			</tr>
			<tr>
				<td>Kode Buku</td>
				<td><input type="text" name="kode_buku"></td>
			</tr>
			<tr>
				<td>Kode Member</td>
				<td><input type="text" name="kode_member"></td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="text" id="datepickerpinjam" name="tanggal_pinjam"></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="text" id="datepickerkembali" name="tanggal_kembali"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class ="button button1" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>