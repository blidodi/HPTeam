          <?php while($searchnya = mysqli_fetch_array($kueri)){ ?>
			  			<tr>
	              <td><?= $searchnya['nama_pegawai']; ?></td>
	              <td><?= $searchnya['no_pegawai']; ?></td>
	              <td><?= $searchnya['no_rekening']; ?></td>
	              <td>
	              	<a class="btn btn-success" href="edit/<?= $searchnya['id_pegawai'];?>/">Edit</a>
	              	<a class="btn btn-danger" href="remove/<?= $searchnya['id_pegawai'];?>/" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
	              </td>
	            </tr>
          <?php } ?>
           