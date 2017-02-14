          <?php while($searchnya = mysqli_fetch_array($kueri)){ ?>
			  	<tr>
	              <td><?= $searchnya['nama_jabatan']; ?></td>
	              <td><?= rp($searchnya['gaji']); ?></td>
	              <td>
	              	<a class="btn btn-success" href="edit/<?= $searchnya['id_jabatan'];?>/">Edit</a>
	              	<a class="btn btn-danger" href="remove/<?= $searchnya['id_jabatan'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
	              </td>
	            </tr>
          <?php } ?>
           