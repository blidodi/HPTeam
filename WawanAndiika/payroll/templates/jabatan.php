<?php 
	include "header.php"; 
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'add':
				include "model/jabatan/add.php";
				break;
			case 'edit':
				include "model/jabatan/edit.php";
				break;
			case 'remove':
				$jabatan = new Jabatan();
				$id = $_GET['id'];
				$query = $jabatan->removejabatan($id);
				header("location:/jabatan/");
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
        $kueri = $cari->searchjabatan($search);?>
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
	          <?php include "templates/search/jabatan.php" ?>
	          </tbody>
	        </table>
	    </div>
      <?php } else { ?>
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
            	<?php
            		$jabatan = new Jabatan();
            		$query = $jabatan->showjabatan();
            		while($result = mysqli_fetch_array($query)){ ?>
			  			<tr>
			              <td><?= $result['nama_jabatan']; ?></td>
			              <td><?= rp($result['gaji']); ?></td>
			              <td>
			              	<a class="btn btn-success" href="edit/<?= $result['id_jabatan'];?>/">Edit</a>
			              	<a class="btn btn-danger" href="remove/<?= $result['id_jabatan'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
			              </td>
			            </tr>
			  	<?php }	?>
           </tbody>
        </table>
	</div>
	<?php } } ?>
<?php include "footer.php"; ?> 



	