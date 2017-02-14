<!DOCTYPE html>
<html>
<head>
	<title><?= title();?> - Harmoni Permata</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/dashboard.css">
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">

  <link rel="icon" href="/assets/img/trans-logo.png" type="image/x-icon" />

  <!-- javascript list -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/jquery.maskMoney.js" type="text/javascript"></script>

</head>
<body>
	<!-- Navigation Bar
	================================================= -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">HARMONY PERMATA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Dashboard</a></li>
            <?php if($_SESSION['role']==1){ ?><li><a href="/user/edit/<?= $_SESSION['id_user']; ?>/">Profile</a></li><?php } ?>
            <li><a href="/logout.php">Logout</a></li>
          </ul>
          <form action="" method="POST" class="navbar-form navbar-right">
            <input type="text" name="search" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <!-- Containers
	================================================= -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar" style="background: #333;margin-top: -1px;">
				  <ul class="nav nav-sidebar">
            <li><a href="/"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
             <li><a href="#" onclick="$('#gaji').toggle();"><i class="fa fa-handshake-o" aria-hidden="true"></i>Gaji Karyawan</a>
                <ul id="gaji" class="nav nav-sidebar-child">
                    <li><a href="/gaji/">Proses Gaji</a></li>
                    <li><a href="/gaji/list/">Print & Final Gaji</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="$('#pegawaii').toggle();"><i class="fa fa-users" aria-hidden="true"></i>Karyawan</a>
                <ul id="pegawaii" class="nav nav-sidebar-child">
                    <li><a href="/pegawai/add/">Tambah</a></li>
                    <li><a href="/pegawai/">Lihat Semua</a></li>
                </ul>
            </li>
            <li><a href="#" onclick="$('#jabatan').toggle();"><i class="fa fa-university" aria-hidden="true"></i>Jabatan</a>
                <ul id="jabatan" class="nav nav-sidebar-child">
                    <li><a href="/jabatan/add/">Tambah</a></li>
                    <li><a href="/jabatan/">Lihat Semua</a></li>
                </ul>
            </li>
            <?php if($_SESSION['role']==1){ ?>
            <li><a href="#" onclick="$('#accounting').toggle();"><i class="fa fa-user-circle-o" aria-hidden="true"></i>User</a>
                <ul id="accounting" class="nav nav-sidebar-child">
                    <li><a href="/user/add/">Tambah</a></li>
                    <li><a href="/user/">Lihat Semua</a></li>
                </ul>
            </li>
            <?php } ?>
        	</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h2 class="sub-header"><?= title(); ?></h2>
        <br/>