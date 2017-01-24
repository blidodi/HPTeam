<html>
	<head>
		<title>Test Form</title>
		<style>
			input {
				margin-top: 10px;
				display: block;
			}
		</style>
	</head>
	<body>
		<?php 
			if(isset($_POST['save'])) {
				if(empty($_POST['nama'])) {
					$pesan[] = "Nama Kosong.";
				}

				if(empty($_POST['password'])) {
					$pesan[] = "Password Kosong.";
				} 

				if($_POST['nama'] <> "admin") {
					$pesan[] = "Nama Salah.";
				} 

				if(!empty($_POST['password']) && $_POST['password'] <> 123) {
					$pesan[] = "Password Salah.";
				} 

				if(isset($pesan)) {
					$i = 0;
					while ($i < count($pesan)) {
						echo $pesan[$i]."<br/>";
						$i++;
					}
				} else {
					header("location:dashboard.php");
				}
			}

			
		?>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			Masukkan Nama :<br/>
			<input type="text" name="nama" />
			Masukkan Kata Sandi :<br/>
			<input type="password" name="password" />
			<br/>			
			<input type="submit" name="save" value="Save" />
		</form>
	</body>
</html>