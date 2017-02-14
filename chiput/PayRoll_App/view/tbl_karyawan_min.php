<?php

include '../controller/controller.php';
$tbl_kar = new Table();

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:form_login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {

 	$nama = $_SESSION['username'];
 	//echo $_SESSION['id'];
 	
?>

<!doctype html>
<html lang="en">

<head>
	<title>Tables | Karyawan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="../asset/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../asset/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../asset/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/logoPayRoll.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<img src="../img/logo.png" class="img-responsive logo">
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard_admin.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="tbl_karyawan_min.php" class=""><i class="lnr lnr-users"></i> <span>Karyawan</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Department</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="addDepartemen_min.php" class="">Tambah Data</a></li>
									<li><a href="tbl_departemen_min.php" class="">Master Data</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tbl_gaji.php" class=""><i class="lnr lnr-paperclip"></i> <span>Penggajian</span></a></li>
						<li><a href="tbl_akun.php" class=""><i class="lnr lnr-user"></i> <span>Admin</span></a></li>
						<li><a href="" class=""><i class="lnr lnr-book"></i> <span>Laporan</span></a></li>
						
					</ul>
				</nav>
			</div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers HP Team</a></p>
				</div>
			</footer>
		</div>
		<!-- END SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars icon-nav"></i>
						</button>
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<form class="navbar-form navbar-left hidden-xs">
							<div class="input-group">
								<input type="text" value="" class="form-control" placeholder="Search dashboard...">
								<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../asset/img/chiput.jpg" class="img-circle" alt="Avatar"> <span><?php echo $nama ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="../controller/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<form class="form-inline" method="get">
						<div class="form-group">
						<select name="filter" class="form-control" onchange="form.submit()">
							<option value="0">Filter Data Karyawan</option>
							<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
							<option value="Tetap" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Tetap</option>
							<option value="Kontrak" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Kontrak</option>
	                        </select>
					</div>
				</form>
				<br />
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Karyawan</h3>
								</div>
								<div class="table-responsive">
								<table class="table table-striped table-hover">
								<thead>
									<tr>
					                    <th>No</th>
										<th>NIK</th>
										<th>Nama</th>
					                    <th>Tempat Lahir</th>
					                    <th>Tanggal Lahir</th>
					                    <th>Alamat</th>
										<th>No Telepon</th>
										<th>Jabatan</th>
										<th>Status</th>
					                    <th>Tools</th>
									</tr>
								</thead>
								<tbody>
										<?php
											$i = 1;
											foreach ($tbl_kar->tampil_Kar() as $tampil) {
												?>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $tampil['nik'] ?></td>
												<td><?php echo $tampil['nama'] ?></td>
												<td><?php echo $tampil['tempat_lahir'] ?></td>
												<td><?php echo $tampil['tanggal_lahir'] ?></td>
												<td><?php echo $tampil['alamat'] ?></td>
												<td><?php echo $tampil['no_tlpn'] ?></td>
												<td><?php echo $tampil['jabatan'] ?></td>
												<td><?php echo $tampil['status'] ?></td>
												<td>
													<a href="edit.php?nik='.$row['nik'].'" title="Edit Data" class="btn btn-primary btn-sm"> <span class="lnr lnr-pencil" aria-hidden="true"></span></a>
													<a href="password.php?nik='.$row['nik'].'" title="Ganti Password" data-placement="bottom" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="lnr lnr-user" aria-hidden="true"></span></a>
													<a href="index.php?aksi=delete&nik='.$row['nik'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="lnr lnr-trash" aria-hidden="true"></span></a>
												</td>
											</tr>
											<?php
											}
										?>
								</tbody>
								</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../asset/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="../asset/js/bootstrap/bootstrap.min.js"></script>
	<script src="../asset/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../asset/js/klorofil.min.js"></script>
</body>
</html>
<?php } ?>
