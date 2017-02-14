<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tambah User</title>
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
                    <i class="fa fa-plus" aria-hidden="true"></i> FORM TAMBAH <b>MEMBER</b>
                </div>
            <div class="panel-body">
	            <form action="../proses.php?aksi=tambah_member" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kode Member</label>
                        <input class="form-control" type="text" name="kode_member">
                        <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nama">
                        <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" type="text" name="alamat">
                        <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto">
                        <p class="help-block">Help file here.</p>
                    <button type="submit" value="Simpan" class="btn btn-info-add">Simpan </button>
                    <a class="btn btn-info-add" href="tampil_member.php">Batal</a>
                </form>
            </div>
        <hr />
            <!-- /. NAV FOOTER  -->
            <div id="right">&copy; 2017 Penyewaan Buku | Design By : <a href="#" target="_blank">Adhi Surya</a></div>
                </div>
            </div>
        </div>
    </body>
</html>