<?php 
	include '../../model/kembali-model.php';
	$db = new Kembali();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>
		<script>
			$(function() {
				$( "#datepickersewa" ).datepicker({ dateFormat: 'yy-mm-dd' });
				$( "#datepickerkembali" ).datepicker({ dateFormat: 'yy-mm-dd' });
			});

			var htmlobjek;
			$(document).ready(function(){
			  //apabila terjadi event onchange terhadap object <select id=propinsi>
			  $("#member").change(function(){
			    var member = $("#member").val();
			    $.ajax({
			        url: "../../kembali-model.php",
			        data: "member="+member,
			        cache: false,
			        success: function(msg){
			            //jika data sukses diambil dari server kita tampilkan
			            //di <select id=kota>
			            $("#tanggal").html(msg);
			            $("#kembali").html(msg);
			            $("#buku").html(msg);
			        }
			    });
			  });
});
		</script>

	<title>Tambah Pengembalian</title>
</head>
<body>
<div id="container">
    <div id="header">
		<h1>Sistem Penyewaan Buku</h1>
	</div>
	<ul>
		<li><a href="../../dashboard.php"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="../user/user-view.php"><i class="fa fa-users"></i> Users</a></li>
		<li><a href="../member/member-view.php"><i class="fa fa-id-card"></i> Member</a></li>
		<li><a href="../buku/buku-view.php"><i class="fa fa-book"></i> Buku</a></li>
		<li><a href="../penyewaan/sewa-view.php"><i class="fa fa-shopping-cart"></i> Penyewaan</a></li>
		<li><a class="active" href="#kembali-view"><i class="fa fa-retweet"></i> Pengembalian</a></li>
		<li style="float:right"><a href="../../logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
	</ul>
	<div id="body">
	<div class="form">
	<p><a class="p-color" href="kembali-view.php">Tabel Pengembalian</a> / Tambah Pengembalian</p>
	<form action="../../controller/kembali-controller.php?action=add" method="post">
		<?php 
			$tanggal = date("Y-m-d");
		?>
		<label>Member :</label>
		<select name="member">
			<option value="">-- Pilih --</option>
				<?php 
					foreach($db->tampil_sewa() as $sewa) {
						?>
							<option value="<?php echo $sewa['member']; ?>"><?php echo $sewa['member'] ?>
							</option>	
			<?php }	?>
			</select>
		<label>Tanggal Sewa :</label>
		<input type="text" name="tgl_sewa" id="datepickersewa" id="tanggal" />
		<label>Tanggal Kembali:</label>
		<input type="text" name="tgl_kembali" id="datepickerkembali" id="kembali" />
		<label>Buku :</label>
		<input type="text" name="buku" id="buku" />	
		<label>Denda :</label>
		<input type="text" name="denda" />
		<input type="hidden" name="status" />
		<br/>
		<input type="submit" name="simpan" value="Simpan">

	</form>
	</div>
	</div>
	<div id="footer">
		<center>Copyright &copy; 2017 Designed by Rivalbamen</center>
	</div>
</div>
</body>
</html>