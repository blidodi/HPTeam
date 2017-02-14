<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Modals
                </div>
                <div class="panel-body">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Launch Demo Modal
                    </button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="../proses.php?aksi=print_kwitansi" method="post">
                                        <?php
                                            foreach($db->print_kwitansi($_GET['id']) as $print){
                                        ?>
                                            <table class="table table-striped  table-hover">
                                                
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
                                        <?php } ?>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
