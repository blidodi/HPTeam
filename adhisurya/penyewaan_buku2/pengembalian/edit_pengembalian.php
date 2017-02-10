<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pengembalian</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			  <script>
				  $( function() {
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
		<h1><i class="fa fa-pencil" aria-hidden="true"></i> Edit Pengembalian</h1>
	</div>
		<form action="../proses.php?aksi=update_pengembalian" method="post">
			<?php
				foreach($db->edit_pengembalian($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Pengembalian</td>
						<td align="center">:</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_kembali" value="<?php echo $d['kode_kembali'] ?>">
						</td>
					</tr>
					<tr>
						<td>Kode User</td>
						<td align="center">:</td>
						<td>
							<?php 
								$q_select_user	= "SELECT * FROM user";
								$p_select_user	= mysql_query($q_select_user) or die(mysql_error());
								$n_select_user	= mysql_num_rows($p_select_user);
								echo '<select name="kode_user">
										<option value="">-- Pilih --</option>';
										if ($n_select_user!=0)
											{	
												while ($r_select_user = mysql_fetch_array($p_select_user)){
												$userkode = $r_select_user['kode_user'];
												$usernama = $r_select_user['nama'];
												echo '<option value="'.$userkode.'">['.$userkode.']&nbsp;'.$usernama.'</option>';
											}
										}
								echo "</select>";
							?>
						</td>
					</tr>
					<tr>
						<td>Kode Buku</td>
						<td align="center">:</td>
						<td>
							<?php 
								$q_select_buku	= "SELECT * FROM buku";
								$p_select_buku	= mysql_query($q_select_buku) or die(mysql_error());
								$n_select_buku	= mysql_num_rows($p_select_buku);
								echo '<select name="kode_buku">
										<option value="">-- Pilih --</option>';
										if ($n_select_buku!=0)
											{	
												while ($r_select_buku = mysql_fetch_array($p_select_buku)){
												$bukukode = $r_select_buku['kode_buku'];
												$bukunama = $r_select_buku['isbn'];
												echo '<option value="'.$bukukode.'">['.$bukukode.']&nbsp;'.$bukunama.'</option>';
											}
										}
								echo "</select>";
							?>
						</td>
					</tr>
					<tr>
						<td>Kode Member</td>
						<td align="center">:</td>
						<td>
							<?php 
								$q_select_member	= "SELECT * FROM member";
								$p_select_member	= mysql_query($q_select_member) or die(mysql_error());
								$n_select_member	= mysql_num_rows($p_select_member);
								echo '<select name="kode_member">
										<option value="">-- Pilih --</option>';
										if ($n_select_member!=0)
											{	
												while ($r_select_member = mysql_fetch_array($p_select_member)){
												$memberkode = $r_select_member['kode_member'];
												$membernama = $r_select_member['nama'];
												echo '<option value="'.$memberkode.'">['.$memberkode.']&nbsp;'.$membernama. '</option>';
											}
										}
								echo "</select>";
							?>
						</td>
					</tr>
					<tr>
						<td>Tanggal Kembali</td>
						<td align="center">:</td>
						<td><input type="text" id="datepickerkembali" name="tanggal_kembali" value="<?php echo $d['tanggal_kembali'] ?>"></td>
					</tr>
					<tr>
						<td>Total Denda</td>
						<td align="center">:</td>
						<td><input type="text" name="total_denda" value="<?php echo $d['total_denda'] ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td align="center"></td>
						<td>
							<input class="button button2" type="submit" value="Simpan">
							<a class="button button2" href="tampil_pengembalian.php">Batal</a>
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