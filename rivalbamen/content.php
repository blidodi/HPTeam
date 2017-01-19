<?php require "header.php"; ?>

<h1>Form Terbilang</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<input type="text" name="bilangan" /><input type="submit" name="terbilang" value="Terbilang"/>
</form>

<?php 
	require "terbilang.php";
	if(isset($_POST['terbilang'])) {
		echo "<p>".terbilang($_POST['bilangan'])."</p>";
	}
?>

<?php require "footer.php"; ?>