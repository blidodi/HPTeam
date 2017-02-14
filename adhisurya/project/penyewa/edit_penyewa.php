<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Penyewa</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			  <script>
				  $( function() {
				    $( "#datepickerpinjam" ).datepicker({ dateFormat: 'yy-mm-dd' });
				    $( "#datepickerkembali" ).datepicker({ dateFormat: 'yy-mm-dd' });
				  } );
			  </script>
	<link rel="stylesheet" type="text/css" href="../css/crud.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
		<h1>Edit Penyewa</h1>
	</div>
		<form action="../proses.php?aksi=update_penyewa" method="post">
			<?php
				foreach($db->edit_penyewa($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Penyewa</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_sewa" value="<?php echo $d['kode_sewa'] ?>">
						</td>
					</tr>
					<tr>
						<td>Kode User</td>
						<td><input type="text" name="kode_user" value="<?php echo $d['kode_user'] ?>"></td>
					</tr>
					<tr>
						<td>Kode Buku</td>
						<td><input type="text" name="kode_buku" value="<?php echo $d['kode_buku'] ?>"></td>
					</tr>
					<tr>
						<td>Kode Member</td>
						<td><input type="text" name="kode_member" value="<?php echo $d['kode_member'] ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Pinjam</td>
						<td><input type="text" id="datepickerpinjam" name="tanggal_pinjam" value="<?php echo $d['tanggal_pinjam'] ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Kembali</td>
						<td><input type="text" id="datepickerkembali" name="tanggal_kembali" value="<?php echo $d['tanggal_kembali'] ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button button2" type="submit" value="Simpan"></td>
					</tr>
				</table>
			<?php } ?>
		</form>
</body>
</html>	