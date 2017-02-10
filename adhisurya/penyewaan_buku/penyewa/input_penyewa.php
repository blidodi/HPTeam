<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Penyewa</title>
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
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Penyewaan Buku</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="#">Report Bug</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../assets/img/find_user.png" class="img-responsive" />    
                    </li>
                    <li><a href="../dashboard.php"><i class="fa fa-desktop "></i>Dashboard</a></li>
                    <li><a href="../user/tampil_user.php"><i class="fa fa-table "></i>User</a></li>
                    <li><a href="../buku/tampil_buku.php"><i class="fa fa-edit "></i>Buku</a></li>
                    <li><a href="../member/tampil_member.php"><i class="fa fa-qrcode "></i>Member</a></li>
                    <li><a href="../penyewa/tampil_penyewa.php"><i class="fa fa-bar-chart-o"></i>Penyewaan</a></li>
                    <li><a href="../pengembalian/tampil_pengembalian.php"><i class="fa fa-edit "></i>Pengembalian</a></li>
                    <li><a href="../kwitansi/tampil_kwitansi.php"><i class="fa fa-table "></i>Kwitansi</a></li>
                    <li><a href="../Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah Penyewaan Buku</h3>
                    </div>
                </div>
	<form action="../proses.php?aksi=tambah_penyewa" method="post">
		<table>
			<tr>
				<td>Kode Penyewa</td>
				<td align="center">:</td>
				<td><input type="text" name="kode_sewa"></td>
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
										$bukunama = $r_select_buku['judul'];
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
				<td>Judul</td>
				<td align="center">:</td>
				<td>
					<?php 
						$q_select_member	= "SELECT * FROM buku";
						$p_select_member	= mysql_query($q_select_member) or die(mysql_error());
						$n_select_member	= mysql_num_rows($p_select_member);
						echo '<select name="judul">
								<option value="">-- Pilih --</option>';
								if ($n_select_member!=0)
									{	
										while ($r_select_member = mysql_fetch_array($p_select_member)){
										$memberkode = $r_select_member['judul'];
										$membernama = $r_select_member['penulis'];
										echo '<option value="'.$memberkode.'">['.$memberkode.']&nbsp;'.$membernama. '</option>';
									}
								}
						echo "</select>";
					?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td align="center">:</td>
				<td><input type="text" id="datepickerpinjam" name="tanggal_pinjam"></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td align="center">:</td>
				<td><input type="text" id="datepickerkembali" name="tanggal_kembali"></td>
			</tr>
			<tr>
				<td></td>
				<td align="center"></td>
				<td>
					<input class ="button button1" type="submit" value="Simpan">
					<a class="button button1" href="tampil_penyewa.php">Batal</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>