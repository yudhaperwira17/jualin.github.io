<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mmebuat Select Option Dinamis Dengan Ajax</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
 
</head>
<body>
	<div class="container">
		<center><h2>Select Option Dinamis Dengan Ajax</h2></center>
		<form action="">
			<div class="form-group">
				<label>FAKULTAS:</label>
				<select class="form-control" name="fakultas" id="fakultas" required>
					<option value="">--Fakultas--</option>
					<?php
					$fakultas = mysqli_query($koneksi,"select * from tbl_fakultas");
					while($f = mysqli_fetch_array($fakultas)){
						?>
						<option value="<?php echo $f['fakultas_id'] ?>"><?php echo $f['fakultas_nama']; ?></option>
						<?php
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>JURUSAN</label>
				<select class="form-control" name="jurusan" id="jurusan" required>					
					
				</select>
			</div>			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	
 
	<script type="text/javascript">
		$('#fakultas').change(function() { 
			var fakultas = $(this).val(); 
			$.ajax({
				type: 'POST', 
				url: 'ajax_jurusan.php', 
				data: 'fakultas_id=' + fakultas, 
				success: function(response) { 
					$('#jurusan').html(response); 
				}
			});
		});
 
	</script>
 
</body>
</html>