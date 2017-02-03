<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
	<style type="text/css">
		.form-group #tempat_hasil span {
			margin-left: 20px;
		    font-size: 14px;
		    color: #fff;
		    cursor: pointer;
		    font-weight: bold;
		    padding: 2px 6px;
		    border-radius: 50%;
		    background: #da0909;
		}
		span.hapussemua {
		    float: right;
		    margin-top: -34px !important;
		    border-radius: 0% !important;
		}
	</style>
	<div class="container" style="width: 500px;">
		<br/>
		<div class="col-md-12">
			<div class="form-group">
		  	  	<div id="tempat_komen"></div>
				<div class="input-group">
				  	<input id="ulangi" type="text" class="form-control" placeholder="Masukan kata apa aja boleh....." aria-describedby="basic-addon2"  onkeypress="tampilkan(event);" onfocus="if(this.value !== '') {this.value=''}" />
				  	<span class="input-group-addon" id="basic-addon2">Yosh!!</span>
				</div>
				<br/>
		  	  	<label class="control-label" for="positionsought">Tampilkan Kata</label>
		  	  	<div id="recorvery">  
			  	  	<div id="tempat_hasil"> 
			  	  		<span class='hapussemua' onClick='hapus_semua(this)'>hapus semua</span>
			  	  	</div>
		  	  	</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="javascript.js"></script>
</body>
</html>