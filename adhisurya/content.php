<?php include "header.php"; ?>

<h1>This is a Form</h1>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="bilangan" /><input type="submit" name="terbilang" value="Terbilang"/>
	</form>

<?php
	require "konfigurasi.php";
	if (isset($_POST['terbilang'])) {
		echo "<p>".bilangan($_POST['bilangan'])."</p>";
	}
?>	

<?php include "footer.php"; ?>