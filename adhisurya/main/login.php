<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">

  body{
    background-color: #CCCCCC;
  }

  *{
    margin: 0px auto;
    padding: 5px;
    font-family: Arial;
  }


  table{
    text-align: center;
    border: 5px solid #CCCCCC;
    border-radius: 5px;
    background-color: #FFFFFF;
    width: 600px;
    height: 50px;
  }

  td{
    padding: 10px;
    width: 300px;
    height: 20px;
    color: black;

  }

  a {

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
    font-size: 20px;
    width: 510px;
    height: 50px;
  }

  input[type=text]{

    padding: 5px;
    border: 1px solid black;
    background: white;
    border-radius: 5px;
    color: black;
    font-size: 15px;
    width: 500px;
    height: 50px;
  }

</style>
</head>
<body>
  <form action="main/proseslogin.php" method="post" name="form1">
  <table width="400" height="200">
    <tr>
      <th><img src="../main/logo_djingga.png" style="width:100px; height:100px;"></th>
    </tr>
    <tr>
      <td><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="admin" required></td>
    </tr>
    <tr>
      <td><input class="w3-input w3-border" type="text" placeholder="Enter Password" name="admin" required></td>
    </tr>
    <tr>
      <td><input type="submit" name="terbilang" value="Login"/></td>
    </tr>
    </table>
    <table>
    <tr>
      <td>New to us? <a>Sign Up</a></td>
    </tr>
  </table>
</body>
</html>