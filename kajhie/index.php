<?php include "latihanhtml/header.php";?>

<form action="latihanhtml/eksekusi.php" method="post">
	No. : <input type="text" name="no" value="<?php echo @$_POST['nama']?>" /></br></br>
	Diterima Dari : <input type="text" name="diterima" value="<?php echo @$_POST['bilangan']?>" /></br></br>
	Nominal Uang : <input type="text" name="nominal" value="<?php echo @$_POST['bilangan']?>" /></br></br>
	Untuk Pembayaran : <input type="text" name="untuk" value="<?php echo @$_POST['bilangan']?>" /></br></br>
	<input type="submit" name="terbilang" value="Input" />
</form>


<?php include "latihanhtml/footer.php";?>
