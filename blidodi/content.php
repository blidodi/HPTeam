<?php include "main/header.php"; ?>

<h1>This is a Form</h1>
<form action="passingvar.php" method="post">
	Nama : <input type="text" name="nama" value="<?php echo @$_GET['nama'] ?>"  />
	<br/>
	Jumlah : <input type="text" name="bilangan" value="<?php echo @$_GET['bilangan'] ?>"  />
	<br/>
	<input type="submit" name="submit" value="Terbilang"/>
</form>

<?php include "main/footer.php"; ?>