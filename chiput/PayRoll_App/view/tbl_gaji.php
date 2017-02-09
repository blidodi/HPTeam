<!doctype html>
<html lang="en">

<head>
	<title>Tables | Daftar Gaji</title>
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
	<link rel="icon" type="image/png" sizes="96x96" href="../asset/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<a class=""><span>PayRoll</span> Applications</a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="home.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="tbl_karyawan.php" class=""><i class="lnr lnr-users"></i> <span>Karyawan</span></a></li>
						<li><a href="" class=""><i class="lnr lnr-layers"></i> <span>Departmen</span></a></li>
						<li><a href="" class=""><i class="lnr lnr-paperclip"></i> <span>Penggajian</span></a></li>
						<li><a href="" class=""><i class="lnr lnr-user"></i> <span>Admin</span></a></li>
						<li><a href="" class=""><i class="lnr lnr-book"></i> <span>Laporan</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../asset/img/chiput.jpg" class="img-circle" alt="Avatar"> <span>Chiput</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<div class="row">
				  <div class="col-lg-6">
				    <div class="input-group">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Go!</button>
				      </span>
				      <input type="text" class="form-control" placeholder="Search for...">
				    </div><!-- /input-group -->
				  </div>
				  </div><!-- /.col-lg-6 -->
				  <!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Data Gaji</h3>
								</div>
								<div class="table-responsive">
								<table class="table table-striped table-hover">
								<thead>
									<tr>
					                    <th>No</th>
										<th>Kode</th>
										<th>Bulan</th>
					                    <th>Tahun</th>
					                    <th>Tanggal Transfer</th>
										<th>Total Gaji</th>
										<th>Tools</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>
								
								<a href="edit.php?nik='.$row['nik'].'" title="Edit Data" class="btn btn-primary btn-sm"> <span class="lnr lnr-pencil" aria-hidden="true"></span></a>
								<a href="password.php?nik='.$row['nik'].'" title="Ganti Password" data-placement="bottom" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="lnr lnr-user" aria-hidden="true"></span></a>
								<a href="index.php?aksi=delete&nik='.$row['nik'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="lnr lnr-trash" aria-hidden="true"></span></a>
							</td>
									</tr>
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
