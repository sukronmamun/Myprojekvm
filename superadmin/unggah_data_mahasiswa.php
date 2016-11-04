<div class="col-md-12">

<h2>Unggah Data Mahasiswa</h2>
<hr>
<div class="col-md-7" style="margin-top:-15px;">
	
<form action="" class="form" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Data</label>
		<input type="file" class="form-control" style="width:200px" name="file">
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary" name="act" value="Simpan">
	</div>
</form>

<?php 

	
if (isset($_POST['act'])) {
	

	set_include_path(get_include_path() . PATH_SEPARATOR . '../control/Classes/');

	include '../control/Classes/PHPExcel/IOFactory.php';

	$inputFileName = $_FILES['file']['tmp_name'];

	try {
		$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
	} catch(Exception $e) {
		die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	}

	$sheetData 				= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	$total_data 			= 0;
	$total_sukses_update 	= 0;
	$total_update 			= 0;
	$total_gagal_update 	= 0;
	$total_sukses_insert 	= 0;
	$total_insert 			= 0;
	$total_gagal_insert 	= 0;
	$sekarang	  = sekarang();

	$total_data = count($sheetData);

	
	for ($i=2; $i <= $total_data; $i++) { 
		
		$nim 			= $sheetData[$i]["A"];
		$shift			= $sheetData[$i]["B"];
		$namalengkap	= $sheetData[$i]["C"];
		$semester		= $sheetData[$i]["D"];
		$jk	 			= $sheetData[$i]["E"];
		$kelas	 		= $sheetData[$i]["F"];
		$kontak	 		= $sheetData[$i]["G"];
		$email	 		= $sheetData[$i]["H"];
		$password 		= md5( $kontak);
		
		$data_query = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$nim'");
		$data_cek 	= mysql_num_rows($data_query);

		if ($data_cek > 0) {
			$ubah_data=mysql_query("UPDATE mahasiswa SET semester = '$semester', kelas = '$kelas', kontak = '$kontak', email = '$email', updated_at = '$sekarang' WHERE id_mahasiswa = '$nim'");
			
			if ($ubah_data) {
				$total_sukses_update++;

			}else{
				$total_gagal_update++;
			
			}

		}else{
			
			if ($shift == 'Shift A / Kelas Pagi') {
					$r_shift = '1';
				}elseif($shift == 'Shift B / Kelas Malam'){
					$r_shift = '2';
				}else{
					$r_shift = '3';
				}

			$tambah_data=mysql_query("INSERT INTO mahasiswa ( 
										id_mahasiswa, 
										id_shift, 
										id_fakultas, 
										namalengkap, 
										semester, 
										jk, 
										kelas, 
										kontak, 
										email, 
										password, 
										created_at, 
										updated_at )
								VALUES(
										'$nim',
										'$r_shift',
										'$idfakultas',
										'$namalengkap',
										'$semester',
										'$jk',
										'$kelas',
										'$kontak',
										'$email',
										'$password',
										'$sekarang',
										'$sekarang')
									");
			if ($tambah_data) {
					$total_sukses_insert++; 
				
				}else{
					$total_gagal_insert++; 
				
				}
			
		}
	}
	
?>

<div class="panel panel-info">
	<div class="panel-heading">
		<p><span class="glyphicon glyphicon-info-sign" arial-hidden="true"></span> Informasi prosess upload data</p>
	</div>

	<div class="panel-body">
		<h3>Informasi</3><br>
				<ol class="list_information">
					<li>Total data   	  	= <?php echo $total_data-1; ?></li>
					<li>Berhasil Di Tambah  = <?php echo $total_sukses_insert; ?></li>
					<li>Berhasil Ubah 		= <?php echo $total_sukses_update; ?></li>
					<li>Gagal Tambah Data 	= <?php echo $total_gagal_insert; ?></li>
					<li>Gagal Ubah data   	= <?php echo $total_gagal_update; ?></li>
					<li>Total Gagal	 	  	= <?php echo $total_gagal_update + $total_gagal_insert; ?></li>
					<li>Total Berhasil	 	= <?php echo $total_sukses_update + $total_sukses_insert; ?></li>
				</ol>
				
	</div>

</div>	


<?php } ?>
</div>

<div class="col-md-5" style="margin-top:-15px;">

<div class="panel panel-info">
	<div class="panel-heading">
		<p><span class="glyphicon glyphicon-info-sign" arial-hidden="true"></span> Informasi </p>
	</div>

	<div class="panel-body">
		<h3>Informasi</3><br>
		<ul>
			<li><small>Jika anda ingin memperbarui,menambah data mahasiswa gunakan form ini</small></li>
			<li><small>Dan Jika telah anda gunakan maka Sistem akan memberikan informasi</small>
				<small>
					<ol>
					<li>Informasi Total data   	  	</li>
					<li>Informasi Berhasil Di Tambah</li>
					<li>Informasi Berhasil Ubah 	</li>
					<li>Informasi Gagal Tambah Data </li>
					<li>Informasi Gagal Ubah data   </li>
					<li>Informasi Total Gagal	 	</li>
					<li>Informasi Total Berhasil	</li>
				</ol>
				</small>
				</li>
		</ul>
	</div>

</div>	

</div>
	
</div>