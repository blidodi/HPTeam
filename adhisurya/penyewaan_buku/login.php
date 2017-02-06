<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
			header('location:dashboard.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<style>
		input[type=text] {
			    width: 250px;
			    padding: 12px 20px;
			    margin: 8px 0;
			    display: block;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			}

			input[type=password] {
			    width: 250px;
			    padding: 12px 20px;
			    margin: 8px 0;
			    display: block;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			}

			select {
			    width: 250px;
			    padding: 12px 0px;
			    margin: 6px 0;
			    display: block;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			}

			input[type=submit]:hover {
			    background-color: #45a049;
			}

			a:hover {
			    background-color: #45a049;
			}

			div {
			    border-radius: 5px;
			    background-color: #f2f2f2;
			    padding: 20px;
			}

			* {
				font: normal 13px/1.3 Calibri;
			}
			h1 {
				font-size: 24px;
				color: blue;
			}
			
			.button {
			    
			    border: none;
			    color: white;
			    padding: 10px 20px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			}
			.button1 {background-color: blue;} /*Blue */
			.button2 {background-color: orange;} /* Orange */
			.button3 {background-color: red;} /* Red */ 
			.button4 {background-color: red;} /* Red */ 

		* {
			font-family: arial;
		}
	</style>
</head>
<body>
	<form action="proses1.php" method="post">
	<table>
		<tr>
			<th>FORM LOGIN<br/><br/></th>
		</tr>
		<tr>
			<td>Masukan Username :
				<input type="text" name="username" placeholder="Username">
			</td>
		</tr>
		<tr>	
			<td>Masukan Password :
				<input type="password" name="password" placeholder="Password" />
			</td>
		</tr>
		<br/>
		<tr>
			<td>
				<?php
					if(isset($_GET['pesan']) && !empty($_GET['pesan']) && isset($_GET['nama']) && !empty($_GET['nama'])) {
						switch ($_GET['nama']) {
							case '1':
									$nama = "Nama tidak boleh kosong.";
								break;
							case '2':
									$nama = "Nama tidak tepat.";
								break;	
							default:
									$nama = "Anda tidak berhak mengakses pesan ini.";
								break;
						}
							echo "Pesan : ".$nama;
							echo "<br/>";	
						switch ($_GET['pesan']) {
							case '1':
									$pesan = "Kata Sandi tidak boleh kosong.";
								break;
							case '2':
									$pesan = "Kata Sandi tidak tepat.";
								break;	
							default:
									$pesan = "Anda tidak berhak mengakses pesan ini.";
								break;
						}
							echo "Pesan : ".$pesan;				
					}
				?>
			</td>
		</tr>		
		<tr>	
			<td><input class="button button1" type="submit" name="save" value="Login">
			</td>
		</tr>	
	</table>	
	</form>
</body>
</html>