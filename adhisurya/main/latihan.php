<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Latihan HTML</title>
<style type="text/css">

	*{
		margin: 0px auto;
		padding: 0px auto;
		font-family: Arial;
	}

	th{
		color: #000000;
		font-weight: bold;
		font-size: 25px;
		padding: 20px;
	}

	table{
		border: 1px #CCCCCC;
		margin-top: 50px;
	}

	td{
		padding: 5px 10px 3px 7px;
	}

	.abu{
		background: #CCCCCC;
	}

	input[type=submit]{
		padding: 5px;
		border: none;
		background: blue;
		border-radius: 5px;
		color: white;
		font-size: 15px;
	}
	input[type=submit]: active{
		padding: 5px;
		border: none;
		background: green;
		border-radius: 5px;
		color: white;
		font-size: 18px;
	}

</style>
</head>

<body>
	<form action="main/passingvar.php" method="post">
		<table  width="400" height="200">
			<th colspan="3">Bukti Pembayaran</th>
			<tr class="abu">
				<td>No.</td>
				<td align="center">:</td>
				<td><input type="text" name="no" /></td>		
			</tr>
			<tr>
				<td>Telah diterima</td>
				<td align="center">:</td>
				<td><input type="text" name="nama" /></td>		
			</tr>
			<tr class="abu">
				<td>Uang sejumlah</td>
				<td align="center">:</td>
				<td><input type="text" name="bilangan" value="<?php echo @$_POST['bilangan'] ?>" /></td>
			</tr>
			<tr>
				<td>Untuk pembayaran</td>
				<td align="center">:</td>
				<td><input type="text" name="pembayaran" /></td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<input type="submit" name="terbilang" value="Terbilang"/>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>