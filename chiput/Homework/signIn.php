<html> 
  <head> 
    <title> Form Sign In </title> 
    <link rel="stylesheet" type="text/css" href="signIn.css" > 
  </head> 

  <body> 
    <div id="utama"> 

      <div class="header"> 

        <div class="header_isi"> 

          <div class="gambar"> 

            <form action="login.php" method="POST"> 
              <center>
              <img src="img/users.png" class="image" width="10%">
              <h2>Sign In Your Account</h2>
              </center>

              <input type="text" name="username" placeholder="Username" class="field">     <br /> 
              <input type="password" name="password" placeholder="Password" class="field"> <br /> 

            <div class="chexbox"> 
              <input type="checkbox" name="chek" > Remember me <br /> 
            </div> 

              <input type="Submit" name="login" value="LOGIN" class="tombol_login"> 
            </form> 

        </div> 

      </div> 

      <div class="copyright"> 
        CopyRight&copy 2017 | Design By: <a href="www.chiput93.tumblr.com"> Chiput </a> | City : Harmoni Permata. 
      </div> 
    </div> 
  </body> 
</html>