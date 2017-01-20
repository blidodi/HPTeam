<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		*{
			width: 90%;
			padding: 10px 20px;
			border-radius: 5px;
			color: gray;
			background-color: #f1f1f1;
		}
		.table{
			width: 70%;
			background-color: #D3D3D3;
			margin-top: :30%;
			margin-bottom: 30%;
			margin-left: 30%;
			margin-right: 30%;
		}
		.table1{
			width: 70%;
			padding: 10px;
			background-color: #D3D3D3;
		}
		.td{
			background-color: #D3D3D3;
		}
		input[type=submit]{
			width: 98%;
			border-radius: 5px;
			border-collapse: 5px;
			padding: 10px 20px;
			background-color: #20B2AA;
		    color: white;
		    cursor: pointer;
		}
	</style>
</head>
<body>
<center>
<form action="tampil.php" method="get">
<h1 style="text-align: center;">Log-In to Your Account</h1>
<table class="table">
	<tr class="table">
		<td class="td"><input class="text" type="text" name="nomor" value="Email Address" /></td>
	</tr>
	<tr class="table">
		<td class="td"><input class="text" type="password" name="nama" value="Password" /></td>
	</tr>
	<tr class="table">
		<td class="td"><input type="submit" name="login" value="Login"/></td>
	</tr>
</table>
<table class="table1">
	<tr class="table1">
	</tr>
</table>
</form>
</center>
</body>
</html>