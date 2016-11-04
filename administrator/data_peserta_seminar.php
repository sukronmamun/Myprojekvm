

<div class="">
<div class="search">
	
	<?php 

	if (@$_GET['cari'] = "" ) {
		?>
		<div class="title">&nbsp;&nbsp;&nbsp;Cari Berdasarkan Tanggal Acara</div>
		<form action="" method="post">
			<div class="form">
				<select name="cari" class="form-control" style="width:200px;margin-left:5px;">
					<?php 
					$qr1=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak'  ORDER BY id_seminar DESC");
					while ($hqr1 = mysql_fetch_array($qr1)) {			
					echo "<option value='$hqr1[id_seminar]'>".substr($hqr1['tanggal'], 0,10)."</option>";
					}

					 ?>

					
				</select>
				<input style="margin:5px;float:left" class="btn btn-primary" type="submit" name="actcari" value="Selanjutnya">
			</div>
		</form>

		<?php } ?>
</div>

<table class="table table-responsive toggle-circle-filled">
  <thead>
	    <tr>
	      <th data-toggle="true">No</th>
	      <th>ID Mahasiswa</th>
	      <th data-hide="phone">Kode Transaksi</th>
	      <th data-hide="phone">Semester</th>
	      <th data-hide="phone">Kelas</th>
	    </tr>
  </thead>
  <tbody>
    	    <?php 
    	   if (isset($_POST['actcari'])) {
    	   		$cari = $_POST['cari'];

	    	    $qcs3=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' AND id_seminar = '$cari' ");
			    $hqcss = mysql_fetch_array($qcs3);
			    	$id_cari = $hqcss['id_seminar'];
			    $qcs11=mysql_query("SELECT * FROM pendaftaran WHERE id_seminar = '$id_cari' ");
			    
			    $no=1;
			    while ($hqcs=mysql_fetch_array($qcs11)) {
					
			    		?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $hqcs['id_mahasiswa'] ?></td>
					<td><?php echo $hqcs['kd_trans']?></td>
					<td><?php echo $hqcs['semester'] ?></td>
					<td><?php echo $hqcs['kelas'] ?></td>
				</tr>

		        <?php $no++;}

		      }elseif(@$_GET['cari'] == ""){ ?>
					<div class="title">&nbsp;&nbsp;&nbsp;Cari Berdasarkan Tanggal Acara</div>
					<form action="" method="post">
						<div class="form">
							<select name="cari" class="form-control" style="width:200px;margin-left:5px;">
								<?php 
								$qr1=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' ORDER BY id_seminar DESC");
								while ($hqr1 = mysql_fetch_array($qr1)) {			
								echo "<option value='$hqr1[id_seminar]'>".substr($hqr1['tanggal'], 0,10)."</option>";
								}

								 ?>
							</select>
							<input style="margin:5px;float:left" class="btn btn-primary" type="submit" name="actcari" value="Selanjutnya">
						</div>
					</form>


		        	<?php
		        	$cari = @$_GET['cari'];
    	   			$qcs11=mysql_query("SELECT * FROM pendaftaran WHERE id_seminar = '$cari' ");
				    $no=1;
				    while ($hqcs=mysql_fetch_array($qcs11)) { ?>

					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $hqcs['id_mahasiswa'] ?></td>
						<td><?php echo $hqcs['kd_trans']?></td>
						<td><?php echo $hqcs['semester'] ?></td>
						<td><?php echo $hqcs['kelas'] ?></td>
					</tr>
				        <?php $no++;}


				  } ?>
			</tbody>
		</table>
   </div>
   
<script type="text/javascript">
  $(document).ready(function(){
    $("table").footable();
  });
</script>