<?php
	session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
			header('location:login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

	#header{
		    /*background: none;
	    padding: 3px 3px 3px 8px;
	    margin:0px auto;
	    font-family: Verdana, Geneva, sans-serif;*/
	}

	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #005555;
	    font-family: Verdana, Geneva, sans-serif;	
	}

	li {
	    float: left;
	}

	li a {
	    display: inline-block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover {
	     background-color: #5FD367;
	}

	#h2 {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 20px;	
	}

	#h3 {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 15px;	
	}
	</style>
</head>
<body>
   <div id="header">
		<img src="image/header.jpg">
	</div>
<ul>
  <li><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></li>
  <li><a href="table.php"><i class="fa fa-users" aria-hidden="true"></i>
 User</a></li>
  <li><a href="kwitansi.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
 Kwitansi</a></li>
   <li><a href="buku.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
 Buku</a></li>
  <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a></li>
</ul>
</body>
</html>