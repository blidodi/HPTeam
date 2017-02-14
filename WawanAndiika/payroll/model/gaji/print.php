<html>
<head>
	<title>Print Gaji</title>
</head>
<body>
<style type="text/css">
.rapiin {
  border-top: 3px solid #444;
  margin-top: 10px;
}
.rapiin table {
      border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}
 .rapiin th {
  font-weight: bold;
  border: 1px solid #444;
  text-align: left;
  padding: 5px; 
 }
  .rapiin td {
    border: 1px solid #444;
    padding: 5px;
  }
  .rapiin h1{
    font-family: arial;
    font-size: 20px;
  }
  table.detail-transaksi td{
    border-left: none;
    border-right: none;
    border-top: none;
    border-bottom: 1px solid #f5f5f5;
  }
  table.detail-transaksi tr:nth-of-type(odd){
    border-left: none;
    border-right: none;
    border-top: none;
    border-bottom: 1px solid #f5f5f5;
    background-color: #f5f5f5;
  }
  	  table.pelanggan tr {
	border: none;
  }
  table.pelanggan tr:nth-of-type(odd) {
	background: #fff;
  }
  table.pelanggan td{
	border: none;
  }
  table.pelanggan th{
	border: none;
	width: 150px;
  }
  table.pelanggan {
	margin-top: 0px;
	margin-bottom: 20px;
  }
  .kanan {
    text-align: right;
  }
</style>

<table align="center" border="0" width="800px" cellpadding="0" cellspacing="0" style="margin-top:7px; ">
	<tr>
		<td rowspan="5" width="200px" align="right"><img src="/assets/img/logo.png" height="150px" width="170" style="border-radius:50%;"></td>
		<td height="30px" align="center" style="font-size:20pt;font-family:arial;">PAYROLL <strong>CLOUD</strong>RENT</td>
	</tr>
	<tr>
		
		<td height="10px" align="center" style="font-size:12pt;">Alamat : Jln. Kedonganan No.1 Telepon : (0361) 555566 Fax : (0361) 999009</td>
	</tr>
	<tr>
		
		<td height="10px" align="center" style="font-size:12pt;">Website : <u>http:// www.cloudrent.co.id</u></td>
	</tr>
	<tr>
		
		<td height="10px" align="center" style="font-size:12pt;">Email : <u>support@cloudrent.co.id</u></td>
	</tr>
</table>
<?php 
  $id = $_GET['id'];
  $jabatan = new Gaji();
  $query = $jabatan->printgaji($id);
  $result = mysqli_fetch_array($query);
?>
  <div class="rapiin">
    <div class="row">
	   <div class="kiri col-md-6" style="width: 50%;float:left;"><br/><br/>
        <span><b>Kode: </b>#<?= $result['id_gaji'];?></span><br/><br/>
        <span><b>Nama: </b> <?= $result['nama_pegawai'];?></span><br/><br/>
        <span><b>Jabatan: </b> <?= $jabatan->jabatannya($result['id_jabatan']);?></span>
     </div>
     <div class="kanan col-md-6" style="width: 40%;float:right;"><br/><br/>
        <span><b>Periode: </b><?= indo($result['tanggal_dibayar']);?></span><br/><br/>
        <span><b>No Karyawan: </b> <?= $result['no_pegawai'];?></span><br/><br/>
        <span><b>Nomer Rekening: </b> <?= $result['no_rekening'];?></span>
     </div>
     </div>
     <hr>
     <div class="row">
        <div class="kiri col-md-6" style="width: 50%;float:left;"><br/>
        <span><b>Sistem Pembayaran - Transfer </b></span>
     </div>
     <div class="col-md-6" style="width: 50%;float:right;"><br/>
        <div class="row">
         <div class="kiri col-md-6" style="width: 50%;float:left;">
            <span><b>Gaji Jabatan: </b><br/><br/>
            <span><b>Bonus: </b></span><br/><br/>
            <span><b>Absen: </b></span><br/><br/>

            <span><b>Gaji: </b></span><br/><br/>

            <span><b>Pph: </b></span>

         </div>
         <div class="kanan col-md-6" style="width: 40%;float:right;">
            <span><?= rp($jabatan->gajinya($result['id_jabatan']))?></span><br/><br/>
            <span><?= rp($result['bonus']); ?></span><br/><br/>
            <span><?= $result['absen']; ?> hari</span><br/><br/>
            <span><?= rp($result['total_gaji']); ?></span><br/><br/>
            <span><?= rp($result['pph']); ?></span>
         </div>
         </div>
         <hr>
         <div class="row">
         <div class="kiri col-md-6" style="width: 50%;float:left;">
            <span><b>Home take pay: </b></span>
          </div>
          <div class="kanan col-md-6" style="width: 40%;float:right;">
            <span><?= rp($result['final_gaji']); ?></span>
          </div>
         </div>
     </div>

     </div>
     <hr>
    <div class="ttd" style="text-align: right;">
        <p style="margin-top: 20px;" >Denpasar, <?php echo indo(date('Y/m/d')); ?></p>

        <p style="margin-top: 80px;" ><b>CLOUD</b>RENT</p>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">window.print();</script>