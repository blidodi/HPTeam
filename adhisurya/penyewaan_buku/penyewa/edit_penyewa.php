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
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="headertop">
		<a class="buttonlogout buttonlogout" href="../Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
	</div>
	</div>
	</div>
		<div id="header">
		<img src="../image/hdr2.jpg">	
	</div>
		<ul>
		  	<li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		  	<li><a href="../user/tampil_user.php"><i class="fa fa-users" aria-hidden="true"></i> User</a></li>
		  	<li><a href="../buku/tampil_buku.php"><i class="fa fa-book" aria-hidden="true"></i> Buku</a></li>
		  	<li><a href="../member/tampil_member.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Member</a></li>
		  	<li><a href="../penyewa/tampil_penyewa.php"><i class="fa fa-users" aria-hidden="true"></i> Penyewaan</a></li>
		  	<li><a href="../pengembalian/tampil_pengembalian.php"><i class="fa fa-retweet" aria-hidden="true"></i> Pengembalian</a></li>
		  	<li><a href="../kwitansi/tampil_kwitansi.php"><i class="fa fa-address-card" aria-hidden="true"></i> Kwitansi</a></li>
		</ul>
    <div id="header">
		<h1><i class="fa fa-pencil" aria-hidden="true"></i> Edit Penyewaan</h1>
	</div>
		<form action="../proses.php?aksi=update_penyewa" method="post">
			<?php
				foreach($db->edit_penyewa($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Penyewa</td>
						<td align="center">:</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_sewa" value="<?php echo $d['kode_sewa'] ?>">
						</td>
					</tr>
					<tr>
						<td>Kode User</td>
						<td align="center">:</td>
						<td><input type="text" name="kode_user" value="<?php echo $d['kode_user'] ?>"></td>
					</tr>
					<tr>
						<td>Kode Buku</td>
						<td align="center">:</td>
						<td><input type="text" name="kode_buku" value="<?php echo $d['kode_buku'] ?>"></td>
					</tr>
					<tr>
						<td>Kode Member</td>
						<td align="center">:</td>
						<td><input type="text" name="kode_member" value="<?php echo $d['kode_member'] ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Pinjam</td>
						<td align="center">:</td>
						<td><input type="text" id="datepickerpinjam" name="tanggal_pinjam" value="<?php echo $d['tanggal_pinjam'] ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Kembali</td>
						<td align="center">:</td>
						<td><input type="text" id="datepickerkembali" name="tanggal_kembali" value="<?php echo $d['tanggal_kembali'] ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td align="center"></td>
						<td>
							<input class="button button2" type="submit" value="Simpan">
							<a class="button button2" href="tampil_penyewa.php">Batal</a>
						</td>
					</tr>
				</table>
			<?php } ?>
			<table>
			<tr bgcolor="#4b4c4c" style="font-family: font-family: Verdana, Geneva, sans-serif; color: #FFFFFF" align="right">
				<br/>
				<br/>	
				<td colspan="7">Copyright @ 2017 Penyewaan Buku By <b>Adhi Surya</b></td>
			</tr>
			</table>
		</form>
</body>
</html>	