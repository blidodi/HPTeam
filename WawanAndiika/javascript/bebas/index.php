<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>
	<style type="text/css">input {padding: 6px;}button {padding: 6px;margin-left: 2px;}</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<!-- 
	//** Pengecekan ganjil genap
	======================================= -->
	<input type="number" name="angka" id="angka" placeholder="Masukan nomor.." /><button onclick="myFunction()">Check</button>
	<script type="text/javascript">
		function myFunction()
		{
			var hasil,komen;
			var angka = document.getElementById('angka').value;
	 
			if (angka%2==0) 
			{
			   hasil = "Angka = "+angka;
			   komen = "Angka adalah bilangan GENAP";
			}           
			else
			{
			   hasil = "Angka = "+angka;
			   komen = "Angka adalah bilangan GANJIL";
			}
			document.getElementById("tempat_hasil").innerHTML=hasil;
			document.getElementById("tempat_komen").innerHTML=komen;
		}
	</script>
	<div id="tempat_hasil"></div>
	<div id="tempat_komen"></div>
	<br/><br/>

	<!-- 
	//** Pengecekan ketersediaan username
	======================================= -->
	<input type="text" name="username" id="username" placeholder="Masukan username.." /><button onclick="check_username()">Check</button>
	<script type="text/javascript">
		function check_username(){  
  
        var username = document.getElementById('username').value;  

        $.post("check.php", { username: username },  
            function(result){  
                if(result == 1){  
                    $('#tempat_username').html('username: ' + username + ' tersedia');  
                }else{  
                    $('#tempat_username').html('username: ' + username + ' tidak tersedia');  
                }  
        });  
  
		}  
	</script>
	<div id="tempat_username"></div>
</body>
</html>