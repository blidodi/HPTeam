<!DOCTYPE html>
<html>
	<head>
		<title>Test Form</title>
		<style>
			* {
				padding: 15px;
				font-family: Arial;
			}

			input {
				margin-top: 10px;
				display: block;
			}

			input[type=submit]{
			    padding: 5px;
			    border: none;
			    background: pink;
			    border-radius: 5px;
			    color: white;
			    font-size: 13px;
			    width: 50px;
			    height: 25px;
			}

			table {
				border: 2px solid #CCCCCC;
				border-radius: 5px;
				background-color: #FFFFFF;
				width: 800px;
				height: 100px;
			}

			input[type=text]{
			    padding: 5px;
			    border: 1px solid black;
			    background: white;
			    border-radius: 5px;
			    color: black;
			    font-size: 15px;
			    width: 300px;
			    height: 20px;
			}
		</style>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<table align="center">
				<tr>
					<td>Huruf : <input type="text" name="data" /></td>
					<td>
						<?php
							if(isset($_POST['save']) && $_POST['save'] == "Save") {
								if(empty($_POST['data'])) {
									echo "Tidak ada data huruf yang anda masukan.";
								} else if(preg_match("/^[a-zA-Z ]*$/",$_POST['data'])) {
									echo $_POST['data']; 
								} else {
									echo "Parameter tidak diperbolehkan.";
								} 
									echo "<br/>";
									echo "<br/>";
								if(empty($_POST['angka'])) {
									echo "Tidak ada data angka yang anda masukan.";
								} else if(preg_match("/^[0-9]*$/",$_POST['angka'])) {
									echo $_POST['angka']; 
								} else {
									echo "Parameter tidak diperbolehkan.";
								}
							}
						?>	
					</td>
				</tr>
				<tr>
					<td>Angka : <input type="text" name="angka" /></td>
				</tr>
				<tr>
					<td><input type="submit" name="save" value="Save" /></td>
				</tr>
			</table>
		</form>				
	</body>
</html>