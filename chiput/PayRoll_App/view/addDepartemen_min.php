<?php
include '../controller/controller.php';
$input = new Form();

if(isset($_POST['tambah']) && $_POST['tambah'] == 'Simpan'){
			
				 $input->input_depart($_POST['kode_depart'],$_POST['jabatan'], $_POST['gaji'], $_POST['tunjangan']);		
		}
?>

<!doctype html>
<html lang="en">
<head>
	<title>Form Input Data Karyawan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="../asset/css/main.min.css">
	<link rel="stylesheet" href="../asset/css/bootstrap-datepicker.css" >
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
						<?php
						session_start();
						if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
						 header("location:form_login.php"); // jika belum login, maka dikembalikan ke file form_login.php
						 }
						 else {

						 	$nama = $_SESSION['username'];
						 	
						?>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../asset/img/chiput.jpg" class="img-circle" alt="Avatar"> <span><?php echo $nama ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="?quit=logout" name="logout" value="Logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			<div class="container">
		<div class="content">
			<h2>Data Departemen &raquo; Tambah Data</h2>
			<hr />
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Kode Departemen</label>
					<div class="col-sm-2">
						<input type="text" name="kode_depart" class="form-control" placeholder="Kode departemen" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jabatan</label>
					<div class="col-sm-2">
						<select name="jabatan" class="form-control" required>
							<option value=""> ----- </option>
							<option value="Operator">Staf Administrasi</option>
							<option value="Leader">Leader</option>
                            <option value="Supervisor">Supervisor</option>
							<option value="Manager">Manager</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gaji Pokok</label>
					<div class="col-sm-4">
						<input type="text" name="gaji" class="form-control" placeholder="Gaji" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tunjangan</label>
					<div class="col-sm-4">
						<input type="text" name="tunjangan" class="form-control" placeholder="Tunjangan" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="tambah" class="btn btn-sm btn-primary" value="Simpan">
						<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
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
<!-- 	<script src="../asset/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="../asset/js/plugins/chartist/chartist.min.js"></script> -->
	<script src="../asset/js/klorofil.min.js"></script>
	<script src="../asset/js/bootstrap/bootstrap-datepicker.js"></script>
</body>
</html>
<?php
}
?>
