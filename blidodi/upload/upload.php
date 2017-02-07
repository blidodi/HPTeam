<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
	if(isset($_POST['submit'])) {
		include 'config.php';
		$filename = date("His").".jpg";
		//var_dump($_FILES);
		//die();
		if($_FILES['file']['type'] == 'image/jpeg') {
			$hasil = move_uploaded_file($_FILES['file']['tmp_name'], $folder.$filename);
			if($hasil) {
				?>
			<img src="content/<?php echo $filename ?>"/>
			<?php
			} else {
				echo "file tidak terunggah.";
			}
		} else {
			echo "File tidak mendukung.";
		}
		
		
	}
?>
</body>
</html>