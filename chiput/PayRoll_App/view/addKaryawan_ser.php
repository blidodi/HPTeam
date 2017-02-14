<?php

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
 header("location:form_login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {

$nama = $_SESSION['username'];

include '../controller/controller.php';

$input = new Form();
$tampil = new Table();

if(isset($_POST['tambah']) && $_POST['tambah'] == 'Simpan'){
				 
				 

			// if($input->input_kar($_FILES['foto'])){
			// 	$ekstensi_diperbolehkan	= array('png','jpg');
			// 	$nama = $_FILES['file']['name'];
			// 	$x = explode('.', $nama);
			// 	$ekstensi = strtolower(end($x));
			// 	$ukuran	= $_FILES['file']['size'];
			// 	$file_tmp = $_FILES['file']['tmp_name'];


				$simpan = $input->input_kar($id,$_POST['nik'],$_POST['nama'], $_POST['tmpt_lahir'], $_POST['tgl_lahir'], $_POST['almt'], $_POST['agama'], $_POST['status'], $_POST['tlpn']);
					// , $_FILES['foto']['name']);

			// 		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			// 		if($ukuran < 1044070){			
			// 			move_uploaded_file($file_tmp, '../img/'.$nama);
						
			// 			if($simpan){
			// 				echo 'FILE BERHASIL DI UPLOAD';
			// 			}else{
			// 				echo 'GAGAL MENGUPLOAD GAMBAR';
			// 			}
			// 		}else{
			// 			echo 'UKURAN FILE TERLALU BESAR';
			// 		}
			// 	}else{
			// 		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			// 	}
			// }

				 header("location:dashboard_user.php");	 
			}

			// if (isset($_POST['logout']) && $_POST['logout'] == Logout) {
				
			// }			
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
						<li><a href="dashboard_user.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Data Karyawan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="addKaryawan_ser.php" class="">Tambah Data</a></li>
									<li><a href="tbl_karyawan_ser.php" class="">Master Data</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tbl_gaji_user.php" class=""><i class="lnr lnr-paperclip"></i> <span>Penggajian</span></a></li>
						
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
									<li><a href="logout.php" name="logout" value="Logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
			<h2>Data Karyawan &raquo; Tambah Data</h2>
			<hr />
			
				<form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
				<?php 
				// foreach ($tampil->tampil_namaAkun($_GET['nama']) as $nama)  {
				//  	# code...
				//  } 					
				
				?>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIK</label>
					<div class="col-sm-2">
						<input type="text" name="nik" class="form-control" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php //echo $nama['nama']?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tempat Lahir</label>
					<div class="col-sm-4">
						<input type="text" name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Lahir</label>
					<div class="col-sm-4">
						<input type="text" name="tgl_lahir" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="0000-00-00" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-3">
						<textarea name="almt" class="form-control" placeholder="Alamat"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Agama</label>
					<div class="col-sm-2">
					<input type="text" name="agama" class="form-control" placeholder="Agama">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Status Perkawinan</label>
					<div class="col-sm-2">
					<input type="text" name="status" class="form-control" placeholder="Status Perkawinan">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">No Telepon</label>
					<div class="col-sm-3">
						<input type="text" name="tlpn" class="form-control" placeholder="No Telepon" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Foto Profil</label>
					<input type="file" name="foto">
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="tambah" class="btn btn-sm btn-primary" value="Simpan">
						<a href="addKaryawan_ser.php" class="btn btn-sm btn-danger">Batal</a>
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
<?php
}
?>

