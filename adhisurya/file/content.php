<?php include "header.php"; ?>

<h1>This is a Form</h1>
	<form action="passingvar.php" method="post">
		No : <input type="text" name="no" />
		<br/>
		<br/>
		Telah diterima : <input type="text" name="nama" />
		<br/>
		<br/>
		Uang sejumlah :<input type="text" name="bilangan" value="<?php echo @$_POST['bilangan'] ?>" />
		<br/>
		<br/>
		Untuk pembayaran : <input type="text" name="pembayaran" />
		<br/>
		<br/>
		<input type="submit" name="terbilang" value="Terbilang"/>
	</form>

<?php include "footer.php"; ?>