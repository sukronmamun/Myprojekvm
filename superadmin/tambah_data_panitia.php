<?php 

if (isset($_POST["simpan"])) {
$id_jabatan 	= $_POST['id_jabatan'];
$id_fakultas	= $idfakultas;
$nama_dpn 		= $_POST['nama_dpn'];
$nama_blk 		= $_POST['nama_blk'];
$password 		= md5($_POST['password']);
$kontak 		= $_POST['kontak'];
$email 			= $_POST['email'];
$status 		= $_POST['status'];

$psql = mysql_query("INSERT INTO `user`
	(`id_user`, 
		`id_jabatan`, 
		`id_fakultas`, 
		`nama_dpn`, 
		`nama_blk`, 
		`password`, 
		`kontak`, 
		`email`, 
		`status`, 
		`created_at`, 
		`updated_at`)
	 
	 VALUES ('','$id_jabatan','$id_fakultas','$nama_dpn','$nama_blk','$password','$kontak','$email','$status',now(),now() )");
if ($psql) {
	echo "
<div class='alert alert-warning alert-dismissible fade in' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
      <strong>Holy guacamole!</strong> Sukses.
    </div>";
}else{
	echo "
	
<div class='alert alert-warning alert-dismissible fade in' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
      <strong>Holy guacamole!</strong> Gagal.
    </div>

	";
}

}




 ?>

<div class="col-md-6">
	<form action="" class="form-horizontal" method="POST" >
		
		<div class="control-group">
			<label for="id_jabatan">id_jabatan</label>
			<select name="id_jabatan" id="" class="form-control" style="width:150px;">
					<option value="0">-Pilih Jabatan-</option>
				<?php 
					$jb = mysql_query("SELECT * From jabatan");
					while ($hjb = mysql_fetch_array($jb)) {
						?>
						<option value="<?php echo $hjb['id_jabatan'] ?>"> <?php echo $hjb['nm_jabatan']; ?></option>
						<?php
					}
				 ?>
			</select>
		</div>

		
		<div class="control-group">
			<label for="nama_dpn">Nama Lengkap</label>
			<input style="width:200px;" type="text" name="nama_dpn"class="form-control"  placeholder="Nama Depan">
			<input style="width:200px;" type="text" name="nama_blk"class="form-control"  placeholder="Nama Belakang">
		</div>

		<div class="control-group">
			<label for="password">password</label>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-lock" arial-hidden="true"></span> </span>
			  <input type="password" name="password" class="form-control" placeholder="password" aria-describedby="basic-addon1">
			</div>
		</div>
		

		<div class="control-group">
			<label for="kontak">kontak</label>
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-earphone" arial-hidden="true"></span> </span>
			  <input type="text" name="kontak" class="form-control" placeholder="kontak" aria-describedby="basic-addon1">
			</div>
		</div>

		<div class="control-group">
			<label for="email">email</label>

			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">@</span> </span>
			  <input type="email" name="email" class="form-control" placeholder="email" aria-describedby="basic-addon1">
			</div>
			

		</div>

		<div class="control-group">
			<label for="status">status</label>
			<select name="status" id="" class="form-control" style="width:200px;">
				<option value="aktive">Aktive</option>
				<option value="non">Tidak Aktive</option>
			</select>
		</div>
		<div class="control-group">
			<input type="reset" value="Reset" class="btn btn-warning"> &nbsp; <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</div>
	</form>
</div>

