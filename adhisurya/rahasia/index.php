<?php
	session_start();
	if(isset($_SESSION['data']) && $_SESSION['data'] == '123'&& isset($_SESSION['huruf']) && $_SESSION['huruf'] == 'surya') {
		header('location:dashboard.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<style>
		* {
			font-family: arial;
		}
		input {
			margin-top: 10px;
			display: block;
		}

		p {
			text-align: bold;
		}

		input[type=submit]{
				text-decoration: none;
			    padding: 5px;
			    border: none;
			    background: pink;
			    border-radius: 5px;
			    color: black;
			    font-size: 15px;
			    width: 60px;
			    height: 40px;
			    cursor: pointer;
		}

		input[type=text]{
			    padding: 5px;
			    border: 1px solid black;
			    background: white;
			    border-radius: 5px;
			    color: black;
			    font-size: 12px;
			    width: 300px;
			    height: 20px;
		}

		input[type=password]{
			    padding: 5px;
			    border: 1px solid black;
			    background: white;
			    border-radius: 5px;
			    color: black;
			    font-size: 15px;
			    width: 300px;
			    height: 20px;
			}

		a:hover {
			color: black;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<form action="proses.php" method="post">
	<table>
		<tr>
			<th></th>
		</tr>
		<tr>
			<td>Masukan Name :
				<input type="text" name="huruf">
			</td>
		</tr>
		<tr>	
			<td>Masukan Password :
				<input type="password" name="data" />
			</td>
		</tr>
		<tr>	
			<td><input type="submit" name="save" value="Save">
			</td>
		</tr>	
	</table>	
	</form>
</body>
</html>