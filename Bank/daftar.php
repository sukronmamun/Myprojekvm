<?php 
if (isset($_POST['daftar'])) {
	$no_identitas	= $_POST['no_identitas'];
	$nama	= $_POST['nama'];
	$jk	= $_POST['jk'];
	$kontak	= $_POST['kontak'];
	$email	= $_POST['email'];
	$password	= md5($_POST['password']);
	
	$rand = rand(00000,$no_identitas);
	$hrand = $no_identitas.$rand;
	$kodetrans = $no_identitas.substr($hrand,0, 4);

	$id_seminar = $_POST['seminar'];

	$daf =mysql_query("INSERT INTO mahasiswa ( id_mahasiswa, id_shift, id_fakultas, namalengkap, semester, jk, kelas, kontak, email, password, created_at, updated_at) 
										VALUES ('$no_identitas','4','0', '$nama','','$jk','','$kontak','$email','$password',now(),now())");
	if ($daf) {
		
		$qq = mysql_query("INSERT INTO pendaftaran(id_pseminar, id_seminar, id_mahasiswa, id_user, kd_trans, status, kelas, semester, tgl_daftar) 
			VALUES ('','$id_seminar','$no_identitas','$idu','$kodetrans','Lunas','','',now())");

	}else{
		echo "GAGAL";
	}
}
 ?>
<div class="container">

 <div class="col-md-5">
 <div class="col-md-12"><h2>Umum</h2></div>
 	<form action="" method="post">
 		<div class= "form-group">
 			<label>Seminar</label>
 			<select name="seminar" class="form-control">
 				<?php 
 				$seminar = mysql_query("SELECT * FROM seminar WHERE id_fakultas = '$fak' ");
 				while ($hseminar=mysql_fetch_array($seminar)) {
 					?>
 						<option value="<?php echo $hseminar['id_seminar'] ?>"><?php echo substr($hseminar['tanggal'], 0,10) ?></option>

 					<?php } ?>
 			</select>
 				
 		</div>
 		<div class= "form-group">
 			<label>No Identitas</label>
 			<input type="text" name="no_identitas" class="form-control"  placeholder="Nomer Identitas"/>	
 		</div>
 		<div class= "form-group">
 			<label>Nama</label>
 			<input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap"/>	
 		</div>
 		<div class= "form-group">
 			<label>Telepon</label>
 			<input type="text" name="kontak" class="form-control"  placeholder="Ho hp"/>	
 		</div>
 		<div class= "form-group">
 			<label>Email</label>
 			<input type="email" name="email" class="form-control"  placeholder="Alamt Email"/>	
 		</div>
 		<div class= "form-group">
 			<label>Jk</label>
 			<select class="form-control" name="jk">
 				<option value="L">Laki-Laki</option>
 				<option value="P">Perempuan</option>
 			</select>

 		</div>
 		<div class= "form-group">
 			<label>Password</label>
 			<input type="password" class="form-control" name="password" placeholder="Password"/>	
 		</div>
 		
 		<div class= "form-group">
 			<input type="reset" class="btn btn-danger" name="reset" value="Reset"/>	
 			<input type="submit" class="btn btn-primary" name="daftar" value="Simpan"/>
 		</div>
 	</form>
 </div>


 </div>