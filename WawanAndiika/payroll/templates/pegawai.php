<?php
	include "header.php";
	if(isset($_GET['act'])){
		switch ($_GET['act']) {
			case 'add':
				include "model/karyawan/add.php";
				break;
			case 'edit':
				include "model/karyawan/edit.php";
				break;
			case 'remove':
				$pegawai = new Pegawai();
				$id = $_GET['id'];
				$query = $pegawai->editpegawai($id);
				$result = mysqli_fetch_array($query);
				unlink("img/karyawan/".$result['foto']);
				$pegawai->removepegawai($id);
				header("location:/page/pegawai/");
				break;
			default:
				include "templates/404.php";
		}
	} if(!isset($_GET['act'])){?> 
	<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nama Pegawai</th>
              <th>Nomer Pegawai</th>
              <th>Nomer Rekening</th>
              <th width="200px;">Action</th>
          </thead>
          <tbody>
            	<?php
            		$pegawai = new Pegawai();
            		$query = $pegawai->showpegawai();
            		while($result = mysqli_fetch_array($query)){ ?>
			  			<tr>
			              <td><?= $result['nama_pegawai']; ?></td>
			              <td><?= $result['no_pegawai']; ?></td>
			              <td><?= $result['no_rekening']; ?></td>
			              <td>
			              	<a class="btn btn-success" href="edit/<?= $result['id_pegawai'];?>/">Edit</a>
			              	<a class="btn btn-danger" href="remove/<?= $result['id_pegawai'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
			              </td>
			            </tr>
			  	<?php }	?>
           </tbody>
        </table>
	</div>
	<?php } 
	
	include "footer.php";