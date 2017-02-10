          <?php while($searchnya = mysqli_fetch_array($kueri)){ ?>
			  	<tr>
	              <td><?= $searchnya['username']; ?></td>
	              <td><?php if($searchnya['role']==0){echo "Accounting";} else { echo "Administrator"; }?></td>
	              <td>
	              	<a class="btn btn-success" href="edit/<?= $searchnya['id_user'];?>/">Edit</a>
	              	<a class="btn btn-danger" href="remove/<?= $searchnya['id_user'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
	              </td>
	            </tr>
          <?php } ?>
           