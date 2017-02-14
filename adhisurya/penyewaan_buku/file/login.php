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
<style type="text/css">

  *{
    margin: 0px auto;
    padding: 5px;
    font-family: Arial;
   
  }

 body {
 	background-color: #CCCCCC;
 }


  table{
    
    border: 5px;
    border-radius: 5px;
    background-color: #FFFFFF;
    width: 400px;
    height: 50px;
  
  }

  td{
    padding: 10px 10px 10px;
    width: 400px;
    height: 20px;
    color: black;
  }

  a {
  	color: red;
  }

  a:hover {
    color: hotpink;
    text-decoration: underline;
  }

  input[type=submit]{
    padding: 5px;
    border: none;
    background: blue;
    border-radius: 5px;
    color: white;
    font-size: 17px;
    width: 80px;
    height: 40px;
  }

  input[type=text]{

    padding: 5px;
    border: 1px solid #999;
    background: white;
    border-radius: 5px;
    color: black;
    font-size: 15px;
    width: 350px;
    height: 40px;
  }

  input[type=password]{

    padding: 5px;
    border: 1px solid #999;
    background: white;
    border-radius: 5px;
    color: black;
    font-size: 15px;
    width: 350px;
    height: 40px;
  }

  .center {
  	text-align: center;
  }

  .signup {
  	color: red;
  }
</style>
</head>
<body>
	<form action="proses1.php" method="post">
	<table>
		<tr>
			<th><br />LOGIN ADMIN<br /><br /></th>
		<tr>
			<td>
				<input type="text" name="username" placeholder="Username">
			</td>
		</tr>
		<tr>	
			<td>
				<input type="password" name="password" placeholder="Password" />
			</td>
		</tr>
		<tr>	
			<td><input class="button button1" type="submit" name="save" value="Login">
			</td>
		</tr>	
	</table>
	<br />	
	<table>
    <tr>
      <td class="center">New to us? <a>Sign Up</a></td>
    </tr>
  </table>
	</form>
</body>
</html>