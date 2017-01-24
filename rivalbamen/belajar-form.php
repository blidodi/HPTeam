<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<style>
		input {
			margin-top: 10px;
			display: block;
		}
		.box {
			float: left;
			width: 500px;
		}
	</style>
</head>
<body>
	<div class="box">
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>	
		<legend>Personal</legend>
		Nama : <input type="text" name="data" /> <br/>
		Telpon : <input type="text" name="angka" />
		<input type="submit" name="save" value="Save" />
	</fieldset>
	</form>
	</div>
	<div class="box"> 
		<form>
			<fieldset>
				<legend>Information</legend>
		<?php 
		if(isset($_POST['save']) && $_POST['save'] == "Save") {
			if (empty($_POST['data'])){
				echo "Tidak ada masukan data.";
			} else if(preg_match("/^[a-zA-Z ]*$/", $_POST['data'])) {
				echo "Nama : ".$_POST['data'];		 
			} else {
				echo "Parameter tidak diperbolehkan."; 
			} 
		echo "<br/><br/>";
		if (empty($_POST['angka'])){
				echo "Tidak ada masukan angka.";
			} else if(preg_match("/^[0-9 ]*$/", $_POST['angka'])) {
				echo "Telpon : ".$_POST['angka'];		 
			} else {
				echo "Parameter tidak diperbolehkan.";
			} 
		} 
	 ?>
	</fieldset>
	 </form>
	</div>
</body>
</html>