<html>
<head>
	<title>LearnHtml_2 Form</title>
	<style>
	input{
		margin-top: 0px;
		display: block;
	}
	table, th, td {
    border: 1px solid black;
    border-color: white;
    background-color: blue;
	}
	th, td {
		text-align: center;
	}
	
	</style>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		<center>
		<table style "width:50%">
			<tr>
				<th style="color:white">input text</th>
			</tr>
			<tr>
				<td><input type="text" name="isi"/></td>
			</tr>
			<tr>
				<td>
					<?php 
						if (isset($_POST['simpan']) && $_POST['simpan'] == "Simpan") {
							if (empty($_POST['isi'])) {
								echo "Tidak ada data yang anda masukan";
							} elseif (preg_match("/^[a-zA-Z ]*$/", $_POST['isi'])) {
								echo $_POST['isi'];
							} else {
								echo "Parameter tidak diperbolehkan";
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<th style="color:white">input angka</th>
			</tr>
			<tr>
				<td><input type="text" name="angka"/></td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['simpan']) && $_POST['simpan'] == "Simpan") {
							if (empty($_POST['angka'])) {
								echo "Tidak ada data yang anda masukan";
							} elseif (preg_match("/^[0-9 ]*$/", $_POST['angka'])) {
								echo $_POST['angka'];
							} else {
								echo "Parameter tidak diperbolehkan";
							}
						}
					?>
				</td>
			</tr>
		</table>
		</br>
		<input type="submit" name="simpan" value="Simpan"/>
		</center>
	</form>
</body>
</html>