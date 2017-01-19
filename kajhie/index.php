<?php include "latihanhtml/header.php";?>

<form action = "<?php $_SERVER['PHP_SELF']?>" method="post">
	<input type="text" name="bilangan"/><input type="submit" name="terbilang" value="Terbilang" />
</form>


<?php
require "latihanhtml/fungsi.php";
if (isset($_POST['terbilang'])) {
 	echo "<p>".fungsi($_POST['bilangan'])."</p>";
 } 
 include "latihanhtml/footer.php";?>
