<?php 
	include 'database.php';
	$db = new Database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Ubah Buku</title>
</head>
<body>
	<div id="container">
	    <div id="header">
			<h1>Tabel Buku</h1>
		</div>
		<div class="form">
		<p><a class="p-color" href="index.php">Tabel Buku</a> / Ubah Buku</p>
		<form action="proses.php?action=ubah" method="post"action>
		<?php
			foreach($db->tampil_edit($_GET['id']) as $edit){
		?>
		<input type="hidden" name="id" value="<?php echo $edit['id'] ?>" />
		<label>ISBN :</label>
		<input type="text" name="isbn" value="<?php echo $edit['isbn'] ?>" />
		<label>Judul :</label>
		<input type="text" name="judul" value="<?php echo $edit['judul'] ?>" />
		<label>Pengarang :</label>
		<input type="text" name="pengarang" value="<?php echo $edit['pengarang'] ?>" />
		<label>Penerbit :</label>
		<input type="text" name="penerbit" value="<?php echo $edit['penerbit'] ?>" />
		<br/>
		<input type="submit" name="ubah" value="Ubah">
		<?php } ?>
	</form>
		</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>