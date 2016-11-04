<?php 
if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$publis = $_POST['publis'];
	$visi = $_POST['visi'];
	$misi = $_POST['misi'];

	$sim = mysql_query("UPDATE identitas SET publis = '$publis', visi = '$visi', misi = '$misi' WHERE id_fakultas = '$id' ");
}


$sql=mysql_query("SELECT * FROM identitas WHERE id_fakultas = '$idfakultas'");

if ($sql) {
	$hsql = mysql_fetch_array($sql);

 ?>

<div class="con-md-12" style="">
	
<div class="panel panel-default" style="border:0px">
	<div class="panel head_content"><h3>Identitas</h3></div>
	<div class="panel-body">

	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden"  value="<?php echo $hsql['id_fakultas']; ?>" name="id">

		<div class="form-group">
			<label for="publis">Tentang Fakultas</label>
			<textarea name="publis" class="form-control" id="" cols="30" rows="6"><?php echo $hsql['publis']; ?></textarea>
		</div>
		
		<div class="form-group">
			<label for="visi">VISI</label>
			<textarea name="visi" class="form-control" id="" cols="30" rows="6"><?php echo $hsql['visi']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="misi">MISI</label>
			<textarea name="misi" class="form-control" id="" cols="30" rows="6"><?php echo $hsql['misi']; ?></textarea>	
		</div>

		<div class="form-group">
			<input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
		</div>
	
	</form>	
	</div>
</div>	

</div>

<?php 

}else{

	echo "string";

} ?>