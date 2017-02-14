<?php 
	include '../database.php';
	$db = new database();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tampil User</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="../assets2/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
         <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h3><i class="fa fa-user" aria-hidden="true"></i> Data User</h3>   
                        <h5>Sistem Penyewaan Buku</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                            <a class="buttonadd buttonadd" href="input_user.php" title="Add"><i class="fa fa-plus-square" aria-hidden="true"></i> Add</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><center><i class="fa fa-sort" aria-hidden="true"></i> No. </center></th>
                                            <th><i class="fa fa-sort" aria-hidden="true"></i> Kode User</th>
                                            <th><i class="fa fa-sort" aria-hidden="true"></i> Nama
                                            </th>
                                            <th><i class="fa fa-sort" aria-hidden="true"></i> Username
                                            </th>
                                            <th><center><i class="fa fa-sort" aria-hidden="true"></i> Action </center></th>
                                        </tr>
                                    </thead>
                                <tbody>
                    		<?php
                    			$no = 1;
                    			foreach($db->user() as $x){
                    		?>
            		<tr>
            			<td align="center"><?php echo $no++; ?></td>
            			<td><?php echo $x['kode_user']; ?></td>
            			<td><?php echo $x['nama']; ?></td>
            			<td><?php echo $x['username']; ?></td>
            	           <td align="center">
                            <a class="buttoncrud button2crud" href="edit_user.php?id=<?php echo $x['id']; ?>&aksi=edit"><i class="fa fa-edit "></i> </a>
                            <a class="buttoncrud button3crud" href="../proses.php?id=<?php echo $x['id']; ?>&aksi=hapus_user" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-eraser" aria-hidden="true"></i> </a>
                        </td>
            		</tr>
                <?php } ?>
            </tbody>
        </table>
    <hr />
    <div id="right">&copy; 2017 Penyewaan Buku | Design By : <a href="#" target="_blank">Adhi Surya</a></div>   
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets2/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets2/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets2/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets2/js/custom.js"></script>
    <script src="../assets2/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets2/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets2/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="../assets2/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets2/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>  
</body>
</html>