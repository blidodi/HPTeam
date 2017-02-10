<div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Foto</th>
              <th>Nama</th>
              <th>No Karyawan</th>
              <th>Status</th>
              <th width="200px;">Action</th>
          </thead>
          <tbody>
            	<?php
            		$list = new Gaji();
            		$query = $list->showprintgaji();
            		while($result = mysqli_fetch_array($query)){ ?>
			  			<tr>
                    <td><img src="/img/karyawan/<?= $result['foto']; ?>" height="40px" width="40px"/></td>
			              <td><?= $result['nama_pegawai']; ?></td>
			              <td><?= $result['no_pegawai']; ?></td>
                    <td><?php if ($result['status']==1){ echo '<span style="color: #bb0404;font-weight: bold;"><i class="fa fa-minus-square" aria-hidden="true" style="margin-right: 10px;"></i>Belum dibayar</span>'; }else{ echo '<span style="color: #1f790a;font-weight: bold;"><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right: 10px;"></i>Sudah dibayar</span>';}?>
			              <td>
                      <?php if ($result['status']==1){ ?>
			              	<a class="btn btn-success" href="<?= $result['id_gaji'];?>/">Bayar</a>
                      <?php } else { ?>
                      <a class="btn btn-primary" href="/gaji/print/<?= $result['id_gaji'];?>/" target="_BLANK"><i class="fa fa-print" aria-hidden="true" style="margin-right: 10px;"></i>Print</a>
                      <?php } ?>
			              </td>
			            </tr>
			  	<?php }	?>
           </tbody>
        </table>
	</div>