<?php 
if (isset($_POST['simpan'])) {

$id_shift 		= $_POST['id_shift'];
$tema 			= $_POST['tema'];
$pembahasan 	= $_POST['pembahasan'];
$pembicara 		= $_POST['pembicara'];
$biaya 			= $_POST['biaya'];
$kuota 			= $_POST['kuota'];
$tanggal 		= $_POST['tanggal'];
$batasan 		= $_POST['batasan'];
$created_at		= sekarang();
$update_at 		= sekarang();


$modul_size		= $_FILES['modul']['size']; 
$modul_name		= $_FILES['modul']['name'];
$modul_location = $_FILES['modul']['tmp_name'];
$modul_type 	= $_FILES['modul']['type'];

$img_size		= $_FILES['img']['size'];
$img_name		= $_FILES['img']['name'];
$img_location 	= $_FILES['img']['tmp_name'];
$img_type 		= $_FILES['img']['type'];

$move_to_images	= "../control/assets/img/".$img_name;
$move_to_moduls	= "../control/assets/modul/".$modul_name;
if (empty($pembicara)) {
	echo "kosong";
}else{
	echo "ada";
}
}

 ?>

<div class="col-md-12">
	<form action="" method="POST" enctype="multipart/form-data">

		<div class="col-md-12">
		<div class="form-group">
			<label for="biaya">Biaya</label>	
			<input type="text" class="form-control" style="width:500px;" name="biaya" >
		</div>

		<div class="form-group">
			<label for="kuota">Kuota</label>	
			<input type="text" class="form-control"  style="width:500px;" name="kuota" >
		</div>

		<div class="form-group">
			<label for="tanggal">Tanggal</label>	
			<input type="text" id="default_datetimepicker" class="form-control" style="width:500px;" name="tanggal" >
		</div>

		<div class="form-group">
			<label for="batasan">Batasan</label>	
			<input type="text" id="default_datetimepicker2" class="form-control" style="width:500px;" name="batasan" >
		</div>

		<div class="form-group">
			<label for="shift">Shift</label>	
			<select name="id_shift" class="form-control" style="width:200px;">
				<?php 
				$cek_shift = mysql_query("SELECT * FROM shift");
				while ($h_cek_shift = mysql_fetch_array($cek_shift)) {
					?>
					<option value="<?php echo $h_cek_shift['id_shift'] ?>"><?php echo $h_cek_shift['nm_shift']; ?></option>

					<?php }  ?>


			</select>

		</div>

		<div class="form-group">
			<label for="modul">Modul</label>	
			<input type="file" class="form-control" style="width:500px;"  name="modul" >
		</div>
		<div class="form-group">
			<label for="img">Gambar</label>	
			<input type="file" class="form-control" style="width:500px;"  name="img" >
		</div>


			
		<div class="form-group">
			<label for="tema">Tema</label>	
				<textarea name="tema" class="form-control" id="" cols="10" rows="10"></textarea>
		</div>

		<div class="form-group">
			<label for="pembahasan">Pembahasan</label>
			<textarea name="pembahasan" class="form-control" id="" cols="10" rows="10"></textarea>
		</div>

		<div class="form-group">
			<label for="pembicara">Pembicara</label>	
				<textarea name="pembicara" id="" cols="10" rows="10"></textarea>
		</div>
		</div>

		
		<input type="reset" value="Hapus Form" class="btn btn-info" name="hapus">
		<input type="submit" value="Simpan" class="btn btn-primary" name="simpan">
	</form>
</div>

<script>
	$('#Alert').on('closed.bs.alert', function () {
  // do something…
})

</script>
