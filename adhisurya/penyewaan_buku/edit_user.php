<?php 
include 'database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="crud.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Edit User</title>
</head>
<body>
    <div id="header">
		<h1>Edit User</h1>
	</div>
		<form action="proses.php?aksi=update" method="post">
			<?php
				foreach($db->edit_user($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode User</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_user" value="<?php echo $d['kode_user'] ?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $d['username'] ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value="<?php echo $d['password'] ?>"></td>
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