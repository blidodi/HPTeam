<?php
	include "header.php"; 
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'add':
				include "model/user/add.php";
				break;
			case 'edit':
				include "model/user/edit.php";
				break;
			case 'remove':
				$user = new User();
				$id = $_GET['id'];
				$query = $user->removeuser($id);
				header("location:/user/");
				break;
			default:
				include "templates/404.php";
		}
	} if(!isset($_GET['act'])){?> 
	<?php
      if(isset($_POST['search'])) {
        $search = $_POST['search'];
        $search = preg_replace("#[^0-9a-z]i#","", $search); 
        $cari = new Search();
        $kueri = $cari->searchuser($search);?>
        <div class="table-responsive">
	        <table class="table table-striped">
	          <thead>
	            <tr>
	              <th>Nama</th>
	              <th>Gaji</th>
	              <th width="200px;">Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          <?php include "templates/search/user.php" ?>
	          </tbody>
	        </table>
	    </div>
      <?php } else { ?>
	<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Username</th>
              <th>Status</th>
              <th width="200px;">Action</th>
          </thead>
          <tbody>
            	<?php
            		$user = new User();
            		$query = $user->showuser();
            		while($result = mysqli_fetch_array($query)){ ?>
			  			<tr>
			              <td><?= $result['username']; ?></td>
			              <td><?php if($result['role']==0){echo "Accounting";} else { echo "Administrator"; }?></td>
			              <td>
			              	<a class="btn btn-success" href="edit/<?= $result['id_user'];?>/">Edit</a>
			              	<a class="btn btn-danger" href="remove/<?= $result['id_user'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
			              </td>
			            </tr>
			  	<?php }	?>
           </tbody>
        </table>
	</div>
	<?php } } ?>
<?php include "footer.php"; ?> 