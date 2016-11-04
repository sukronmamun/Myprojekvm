<form action="">
	<?php
	$id  = $_GET['q'];
	$qs  = mysql_query("SELECT * FROM seminar WHERE id_fakultas = '$idfakultas' AND id_seminar = '$id' ");
	$hqs = mysql_fetch_array($qs);
	$hqs['tanggal'];
	$thn = substr($hqs['tanggal'],0,4);
	$bln = substr($hqs['tanggal'],5,2);
	$tgl = substr($hqs['tanggal'],8,2);
	$jm = substr($hqs['tanggal'],11,2);
	$mn = substr($hqs['tanggal'],14,2);
	$sc = substr($hqs['tanggal'],17,2);
	$rtanggal = $tgl."/".$bln."/".$thn." ".$jm.".".$mn;
	?>
	<div class="col-md-12">
		<div class="form-group" >
			<a href="?model=seminar" class="btn btn-sm btn-default">Kembali</a>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-sm btn-primary">
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Biaya</label>
				<input type="text" name="biaya" value="<?php echo $hqs['biaya']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Kuota</label>
				<input type="text" name="kuota" value="<?php echo $hqs['kuota']; ?>" class="form-control">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Modul</label>
				<input type="file" name="modul" value="<?php echo $hqs['modul']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Tanggal Pelaksanaan</label>
				<input type="text" id="default_datetimepicker" value="<?php echo $hqs['tanggal']; ?>" class="form-control" style="width: 200px;">
			</div>
			<div class="form-group">
				<label for="">Gambar</label>
				<input type="file" name="img" value="<?php echo $hqs['img']; ?>" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Tema</label>
			<textarea name="tema" id="" cols="30"  class="form-control" rows="10"><?php echo $hqs['tema']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Pembahasan</label>
			<textarea name="pembahasan" id="" cols="30" rows="10"><?php echo $hqs['pembahasan']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Pembicara</label>
			<textarea name="pembahasan" id="" cols="30" rows="10"><?php echo $hqs['pembicara']; ?></textarea>
		</div>
		
	</div>
</form>