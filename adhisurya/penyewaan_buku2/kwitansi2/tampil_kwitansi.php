<?php 
	include '../database.php';
	$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Data Kwitansi</title>
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
		<h3><i class="fa fa-address-card" aria-hidden="true"></i>  Data Kwitansi</h3>	
	</div>		
	<a class="buttonadd button1" href="input_kwitansi.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Add</a>
	<table border="1">
		<tr>
			<th><i class="fa fa-sort" aria-hidden="true"></i> ID</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> No.</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Nama</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Uang Sejumlah</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Untuk Pembayaran</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Status</th>
			<th><i class="fa fa-sort" aria-hidden="true"></i> Opsi</th>
		</tr>
		<?php
			$no = 1;
			foreach($db->kwitansi() as $x){
		?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $x['no']; ?></td>
			<td><?php echo $x['nama']; ?></td>
			<td><?php echo $x['uang_sejumlah']; ?></td>
			<td><?php echo $x['untuk_pembayaran']; ?></td>
			<td ><?php echo $x['status']; ?></td>
			<td align="center">
				<a class="button button1" href="print_penyewa.php?id=<?php echo $x['id']; ?>&aksi=print" title="View"><i class="fa fa-eye" aria-hidden="true"></i> </a>
				<a class="button button2" href="edit_kwitansi.php?id=<?php echo $x['id']; ?>&aksi=edit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
				<a class="button button3" href="../proses.php?id=<?php echo $x['id']; ?>&aksi=hapus_kwitansi"><i class="fa fa-eraser" aria-hidden="true"></i> </a>			
			</td>
		</tr>
		<?php } ?>
		<table>
			<tr bgcolor="#4b4c4c" style="font-family: font-family: Verdana, Geneva, sans-serif; color: #FFFFFF" align="right">
				<br/>
				<br/>	
				<td colspan="7">Copyright @ 2017 Penyewaan Buku By <b>Adhi Surya</b></td>
			</tr>
		</table>
	</table>
</body>
</html>