<!DOCTYPE html>
 <html>
 <head>
  <title> Form Log In </title>
  <style>
    table {
        border-collapse: collapse;
        width: 50%;
    }

    th, td {
        text-align: center;
        padding: 8px;
        font-style: italic;
    }

    tr:nth-child(even){background-color: #FFDAB9}

    th {
        background-color: #DC143C;
        color: white;
    }

    h2{
      font-family: "Baron Neue Black";
      src:url(Baron Neue Black.otf);
      color: #DC143C;
      text-shadow: 1px 1px 5px #FFFAFA;
    }
    .button1{
      background-color:  #ffcc00; /* Green */
        border: none;
        border-radius: 5px;
        color: white;
        padding: 3px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px 3px;
        cursor: pointer;
    }
    .button2{
      background-color: #f44336;
      border: none;
      border-radius: 5px;
        color: white;
        padding: 3px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px 3px;
        cursor: pointer;
    }
    
  </style>
 </head>
 <body>

 <?php
          if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){ 
            include "connection.php"; 

            $sql_user = "INSERT INTO `user` (`nama_user`,`username`,`password`)
                      VALUES ('".$_POST['nama_user']."',
                          '".$_POST['username']."',
                          '".$_POST['password']."')";
            $hasil = mysql_query($sql_user); 

            $id = mysql_insert_id();

            $sql_role = "INSERT INTO `user_role` (`id`,`status`)
                      VALUES ('".$id."',
                          '".$_POST['status']."')";
            $hasil = mysql_query($sql_role);

            if(isset($hasil)){
              echo "Data Berhasil Disimpan <a href=\"tampildata.php\">Lihat Table</a>";
            } else {
              echo "Data Gagal Disimpan";
            }
          }
        ?>

  <center>
  <h2> Log In </h2>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="field"> 
    <table align="center" class="back">
    <tr>
      <td>Nama Lengkap</td>
      <td><input type="text" name="nama_user"/></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password"/></td>
    </tr>
    </table>
    <center>
        <select name="status">
          <option value="">Pilih</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </center>
    <center>
    <input type="submit" name="tambah" value="Tambah">
    </center>
  </form>
 </body>
 </html>