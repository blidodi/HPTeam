<meta http-equiv="refresh" content="1;url=index.php">
<?php
	include "koneksi.php";
	$id = $_GET['remove'];
	if(isset($_GET['remove'])){
        $query = mysqli_query($koneksi, "DELETE FROM tbl_buku WHERE id='".$_GET['remove']."'");
        if($query){
        	echo 'Data Berhasil dihapus';
        }
    }         
?>