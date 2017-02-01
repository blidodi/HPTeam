<?php require 'controller.php'; ?>

<?php 
	if(isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'view':
				include "view.php";
				break;
			case 'add':
				include "add.php";
				break;
		}
	} else { 
		include "add.php";
	} 
	?>