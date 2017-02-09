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
	<link rel="icon" type="image/png" sizes="96x96" href="../asset/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar">
			<div class="brand">
				<!-- <a href="index.html"><img src="../asset/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a> -->
				<a class=""><span>PayRoll</span> Applications</a>
			</div>
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard_user.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="tbl_karyawan_useer.php" class=""><i class="lnr lnr-users"></i> <span>Karyawan</span></a></li>
						<li><a href="tbl_gaji_user.php" class=""><i class="lnr lnr-paperclip"></i> <span>Penggajian</span></a></li>
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
			<h2>Data Penggajian &raquo; Input Gaji</h2>
			<hr />
			
			<!-- <?php
			if(isset($_POST['add'])){
				$nik		     = $_POST['nik'];
				$nama		     = $_POST['nama'];
				$tempat_lahir	 = $_POST['tempat_lahir'];
				$tanggal_lahir	 = $_POST['tanggal_lahir'];
				$alamat		     = $_POST['alamat'];
				$no_telepon		 = $_POST['no_telepon'];
				$jabatan		 = $_POST['jabatan'];
				$status			 = $_POST['status'];
				$username		 = $_POST['username'];
				$pass1	         = $_POST['pass1'];
				$pass2           = $_POST['pass2'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
				if(mysqli_num_rows($cek) == 0){
					if($pass1 == $pass2){
						$pass = md5($pass1);
						$insert = mysqli_query($koneksi, "INSERT INTO karyawan(nik, nama, tempat_lahir, tanggal_lahir, alamat, no_telepon, jabatan, status, username, password)
															VALUES('$nik','$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_telepon', '$jabatan', '$status', '$username', '$pass')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Karyawan Berhasil Di Simpan.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Karyawan Gagal Di simpan !</div>';
						}
					} else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password Tidak sama !</div>';
					}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>NIK Sudah Ada..!</div>';
				}
			}
			?>
			 -->
			 
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Karyawan ID</label>
					<div class="col-sm-2">
						<input type="text" name="kary_id" class="form-control" placeholder="Karyawan ID" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Kode Karyawan</label>
					<div class="col-sm-4">
						<input type="text" name="kode_kar" class="form-control" placeholder="Kode Karyawan" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Karyawan</label>
					<div class="col-sm-4">
						<input type="text" name="nama_kar" class="form-control" placeholder="Nama Karyawan" required>
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
					<label class="col-sm-3 control-label">Gaji Bulan</label>
					<div class="col-sm-3">
						<input type="text" name="bulan" class="form-control" placeholder="Bulan" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Transfer</label>
					<div class="col-sm-4">
						<input type="text" name="tgl_trans" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Absensi</label>
					<div class="col-sm-3">
						<input type="text" name="absen" class="form-control" placeholder="Absensi" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">No Rekening</label>
					<div class="col-sm-3">
						<input type="text" name="no_rek" class="form-control" placeholder="No Rekening" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gaji Utama</label>
					<div class="col-sm-3">
						<input type="text" name="no_rek" class="form-control" placeholder="No Rekening" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
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
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>

</html>
