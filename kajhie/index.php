<?php include "latihanhtml/header.php";?>

<form action="latihanhtml/eksekusi.php" method="post">
<table>
		<tr>
			<td>No.</td>
			<td> : </td>
			<td><input type="text" name="no" value="<?php echo @$_POST['nama']?>" /></td>
		</tr>

		<tr>
			<td>Diterima dari</td>
			<td> : </td>
			<td><input type="text" name="diterima" value="<?php echo @$_POST['bilangan']?>" /></td>
		</tr>

		<tr>
			<td>Nominal</td>
			<td> : </td>
			<td><input type="text" name="nominal" value="<?php echo @$_POST['bilangan']?>" /></td>
		</tr>

		<tr>
			<td>Untuk Pembayaran</td>
			<td> : </td>
			<td><input type="text" name="untuk" value="<?php echo @$_POST['bilangan']?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="terbilang" value="Input" /></td>
		</tr>
	</table>
	
</form>


<?php include "latihanhtml/footer.php";?>
