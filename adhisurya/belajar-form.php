<!DOCTYPE html>
<html>
	<head>
		<title>Test Form</title>
		<style>
			input {
				margin-top: 10px;
				display: block;
			}
		</style>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<input type="text" name="data" />
			<input type="submit" name="save" value="Save" />
		</form>
		<br/>
		<?php
			if(isset($_POST['save']) && $_POST['save'] == "Save") {
				if(empty($_POST['data'])) {
					echo "Tidak ada data yang anda masukan.";
				} else if(preg_match("/^[a-zA-Z ]*$/",$_POST['data'])) {
					echo $_POST['data']; 
				} else {
					echo "Parameter tidak diperbolehkan.";
				}
			}
		?>
	</body>
</html>