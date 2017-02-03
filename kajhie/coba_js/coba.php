<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body align="center">  
            <h3>Masukkan huruf / angka di dalam textbox di bawah ini</h3>  
            <hr>  
            <form action="coba.php" method="post">  
                 <input type="text" name="input1" placeholder="Input 1">  
                 <input type="text" name="input2" placeholder="Input 2">  
                 <br><br>  
                 <input type="submit" value="Cek hasil">  
            </form>  
            <hr>  
            <h3>Hasil :</h3>  

            <?php  
      //   	$input1 = $_POST['input1'];  
		    // $input2 = $_POST['input2']; 

            //Validasi apakah data ada atau tidak  
            if(!empty($_POST['input1'])){  
                 //Jika ada maka tampilkan hasil dengan menggunakan $_GET  
                 echo 'Data input 1 adalah : <strong>'.$_POST['input1'].'</strong>';  
            }  
            echo '<br>';  
            if(!empty($_POST['input2'])){  
                 echo 'Data input 2 adalah : <strong>'.$_POST['input2'].'</strong>';  
           }  
            ?>  

</body>
</html>