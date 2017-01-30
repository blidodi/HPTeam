
	<!-- <?php
	//require "header.php";
	//require "footer.php";
	?> -->

	
	<!-- <?php 
	//include "main/header.php";
	//include "main/footer.php";
	?>
	 -->


	<!-- <?php //include"main/header.php"; ?>

	 <center><h1>Coba Inputkan Angka</h1>
	 <form action="<?php //$_SERVER['PHP_SELF']?>" method="get">
	 	<input type="text" name="bilangan" value="<?php //echo @$_GET['bilangan']?>" />
	 	<input type="submit" name="terbilang" value="Terbilang"/>
	 </form>
	 </center>

	 <?php
	 	// require "Tugas1_bilangan.php";
	 	// if (isset($_GET['terbilang'])) {
	 	// 	echo "<p>".Bilangan($_GET['bilangan'])."</p>";
	 	//}
	 ?>

	 <?php //include"main/footer.php";?>  -->



	 <!-- <?php //include"main/header.php"; ?>

	 <center><h1>Coba Inputkan Angka</h1>
	 <form action="main.php" method="get">
	 	<center>
	 	<input type="text" name="nomor" value="isikan nomor" />
	 	</br>
	 	<input type="text" name="nama" value="isikan nama" />
	 	</br>
	 	<input type="text" name="bilangan" value="<?php //echo @$_GET['bilangan']?>" />
	 	</br>
	 	<input type="submit" name="terbilang" value="Terbilang"/>
	 	</center>
	 </form>
	 </center>
	 

	<?php //include"main/footer.php";?>
	 	-->

	 <center><h1>KWITANSI</h1></center>
	 <form action="main.php" method="get">
		<h4>Nomor : <input type="text" name="nomor" value="isikan nomor" /></h4> 
	 	<h4>Diterima Dari : <input type="text" name="nama" value="isikan nama" /></h4>
	 	<h4>Nominal Uang : <input type="text" name="bilangan" value="isikan nominal uang"."<?php echo @$_GET['bilangan']?>" /></h4>
	 	<h4>Untuk Pembayaran : <input type="text" name="namalg" value="untuk pembayaran" /></h4>
	 	<input type="submit" name="terbilang" value="Terbilang"/>
	 </form>

	 <?php include"footer.php";?>
