<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
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
                        <h3><i class="fa fa-pencil" aria-hidden="true"></i> Edit Buku</h3>
                    </div>
                </div>
		<form action="../proses.php?aksi=update_buku" method="post">
			<?php
				foreach($db->edit_buku($_GET['id']) as $d){
			?>
				<table>
					<tr>
						<td>Kode Buku</td>
						<td align="center">:</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
							<input type="text" name="kode_buku" value="<?php echo $d['kode_buku'] ?>">
						</td>
					</tr>
					<tr>
						<td>ISBN</td>
						<td align="center">:</td>
						<td><input type="text" name="isbn" value="<?php echo $d['isbn'] ?>"></td>
					</tr>
					<tr>
						<td>Judul</td>
						<td align="center">:</td>
						<td><input type="text" name="judul" value="<?php echo $d['judul'] ?>"></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td align="center">:</td>
						<td><input type="text" name="penulis" value="<?php echo $d['penulis'] ?>"></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td align="center">:</td>
						<td><input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>"></td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td align="center">:</td>
						<td><input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit'] ?>"></td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td align="center">:</td>
						<td><input type="text" name="jenis" value="<?php echo $d['jenis'] ?>"></td>
					</tr>
                    <tr>
                        <td>Foto</td>
                        <td align="center">:</td>
                        <td><input type="file" name="foto" value="<?php echo $d['foto'] ?>"></td>
                    </tr>
					<tr>
						<td></td>
						<td align="center"></td>
						<td><input class="button button2" type="submit" value="Simpan"><a href="tampil_buku.php" class="button button2">Batal</a></td>

					</tr>
				</table>
			<?php } ?>
		</form>
</body>
</html>	