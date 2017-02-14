<?php 
include '../database.php';
$db = new database();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Bukti Kwitansi</title>
	    <!-- BOOTSTRAP STYLES-->
	    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
	    <!-- FONTAWESOME STYLES-->
	    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
	    <!-- CUSTOM STYLES-->
	    <link href="../assets/css/custom.css" rel="stylesheet" />
	    <!-- GOOGLE FONTS-->
	    <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
	    <!-- TABLE STYLE-->
	    <link href="../assets2/css/bootstrap.css" rel="stylesheet" />
	    <link href="../assets2/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
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
         <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                    </div>
                </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Kwitansi Penyewaan Buku
                </div>
                <div class="panel-body">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Launch Demo Kwitansi
                    </button>
                    <a class="btn btn-primary" href="tampil_kwitansi.php">Back</a>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Bukti Kwitansi</h4>
                                </div>
                                <div >
                                       <form action="../proses.php?aksi=print_kwitansi" method="post">
                                        <?php
                                            foreach($db->print_kwitansi($_GET['id']) as $print){
                                        ?>
                                            <table class="table table-striped" id="dataTables-example">
                                                <tr>
                                                    <td>No.</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['id'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No Penyewaan</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['kode_sewa'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No Buku</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['kode_buku'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['kode_member'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>User</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['kode_user'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Judul Buku</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['judul'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Penyewaan</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['tanggal_pinjam'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Pengembalian</td>
                                                    <td align="center">:</td>
                                                    <td><?php echo $print['tanggal_kembali'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Uang Sejumlah</td>
                                                    <td align="center">:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td align="center"></td>
                                                    <td>
                                                    <div id="right">
                                                    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    	<button type="button" class="btn btn-primary">Print</button>
                                                    </div>	
                                                    </td>
                                                </tr>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets4/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets4/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets4/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets4/js/custom.js"></script>
</body>
</html>

</body>
</html>	