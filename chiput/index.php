
	<!-- <?php
	require "header.php";
	require "footer.php";
	?> -->

	
	<!-- <?php 
	include "main/header.php";
	include "main/footer.php";
	?>
	 -->

	 <?php include"main/header.php"; ?>

	 <center><h1>Coba Inputkan Angka</h1>
	 <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	 	<input type="text" name="bilangan"/>
	 	<input type="submit" name="terbilang" value="Terbilang"/>
	 </form>
	 </center>

	 <?php
	 	require "Tugas1_bilangan.php";
	 	if (isset($_POST['terbilang'])) {
	 		echo "<p>".Bilangan($_POST['bilangan'])."</p>";
	 	}
	 ?>

	 <?php include"main/footer.php";?>	 
	 	
