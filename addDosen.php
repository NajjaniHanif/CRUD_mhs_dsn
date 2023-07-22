<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Tambah Data Dosen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
	<?php
	require "head.html";
	?>
	<div class="utama">		
		<br><br><br>		
		<h3>TAMBAH DATA DOSEN</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_addDosen.php" enctype="multipart/form-data">
			<div class="form-row">
					<div class="col-md-5 mt-auto">
					<label for="npp">NPP:</label>
						<select name="tahun" class="form-control" type="text" id="tahun" required>
							<?php
							$x = 2000; 
							while ($x <= 2023){
									echo"<option value=''disabled selected hidden>Silahkan Pilih Tahun</option>";
									echo"<option value='$x'>$x</option>";
									$x++;
								}
							?>
						</select>
					</div>
					<div class="col-md-7 mt-auto">
						<input class="form-control" type="text" name="digit" id="digit" placeholder="Masukkan 3 Digit NPP Terakhir">
					</div>	
			</div>
			<div class="form-group">
				<label for="namadosen">Nama:</label>
				<input class="form-control" type="text" name="namadosen" id="namadosen">
			</div>
			<div class="form-group">
				<label for="homebase">Homebase:</label>
				<select name="homebase" class="form-control" type="text" id="homebase">
					<option value=""disabled selected hidden>Silahkan Pilih Homebase</option>
					<option value="A11">A11</option>
					<option value="A12">A12</option>
					<option value="A13">A13</option>
					<option value="A14">A14</option>
				</select>
			</div>
			<div>		
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>
	<!--
	<script>
		$(document).ready(function(){
			$('#butsave').on('click',function(){			
				$('#butsave').attr('disabled', 'disabled');
				var npp 	= $('#npp').val();
				var namadosen	= $('#namadosen').val();
				var homebase 	= $('#homebase').val();
				
				$.ajax({
					type	: "POST",
					url		: "sv_addDosen.php",
					data	: {
								npp:npp,
								namadosen:namadosen,
								homebase:homebase
							  },
					contentType	:"undefined",					
					success : function(dataResult){						
						alert('success');
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html(dataResult);	
					}	   
				});
			});
		});
	</script>
	-->	
</body>
</html>