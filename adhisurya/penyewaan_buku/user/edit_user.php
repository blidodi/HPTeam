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

                    </div>
                </div>
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-edit "></i> FORM EDIT <b>USER</b>
                    </div>
                <div class="panel-body">
            <form action="../proses.php?aksi=update_user" method="post">
    			<?php
    				foreach($db->edit_user($_GET['id']) as $d){
    			?>
				    <div class="form-group">
                        <label>Kode User</label>
						<input class="form-control" type="hidden" name="id" value="<?php echo $d['id'] ?>">
						<input class="form-control" type="text" name="kode_user" value="<?php echo $d['kode_user'] ?>">
                        <p class="help-block">Help text here.</p>
                    </div>
				    <div class="form-group">
                        <label>Nama</label>
					    <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>">
					    <p class="help-block">Help text here.</p>
                    </div>
				    <div class="form-group">
                        <label>Username</label>
					    <input class="form-control" type="text" name="username" value="<?php echo $d['username'] ?>">
					    <p class="help-block">Help text here.</p>
                    </div>
				    <div class="form-group">
                        <label>Password</label>
						<input class="form-control" type="text" name="password" value="<?php echo $d['password'] ?>">
				        <p class="help-block">Help text here.</p>
                    <button type="submit" value="Simpan" class="btn btn-info-edit">Simpan </button>
                    <a class="btn btn-info-edit" href="tampil_user.php">Batal</a>
			    <?php } ?>
            </form>
            <hr />
                <div id="right">&copy; 2014 Penyewaan Buku | Design By : <a href="#" target="_blank">Adhi Surya</a></div>
            </div>
        </div>
    </div>
</body>
</html>	