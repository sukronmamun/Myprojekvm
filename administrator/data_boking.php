<?php 
if (isset($_POST['simpan_regis'])) {
	$kod = $_POST['id'];
	$reg = mysql_query("SELECT boking.id_seminar , boking.id_mahasiswa ,boking.kode_boking , mahasiswa.kelas , mahasiswa.semester FROM boking, mahasiswa WHERE boking.id_mahasiswa = mahasiswa.id_mahasiswa AND boking.kode_boking = '$kod' ");
	$hreg = mysql_fetch_array($reg);

	$id_seminar 		  = $hreg['id_seminar'];
	$id_mahasiswa 		= $hreg['id_mahasiswa'];
	$kode_boking 		  = $hreg['kode_boking'];	
	$kelas 				    = $hreg['kelas'];	
	$semester			    = $hreg['semester'];
	$sekarang			    = sekarang();	

	$inreg = mysql_query("INSERT INTO pendaftaran (id_pseminar, id_seminar, id_mahasiswa, id_user, kd_trans, status, kelas, semester, tgl_daftar) VALUES('', '$id_seminar', '$id_mahasiswa', '$idu', '$kode_boking' , 'Lunas', '$kelas', '$semester',now())");
	if ($inreg) {
		mysql_query("DELETE FROM boking WHERE kode_boking = '$kode_boking'");
	}else{
		echo "string";
	}
}


 ?>

<table class="table table-responsive toggle-circle-filled">
  <thead>

    <tr>
      <th data-toggle="true">No</th>
      <th>NIM</th>
      <th data-hide="tablet,phone">Kode Boking</th>
      <th data-hide="phone">waktu</th>
      <th >Act</th>
    </tr>

  </thead>

  <tbody>
<?php 
$q=mysql_query("SELECT * FROM boking WHERE img != '' ");
$no=1;
while ($hq = mysql_fetch_array($q)) {
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $hq['id_mahasiswa']; ?></td>
		<td><?php echo $hq['kode_boking']; ?></td>
		<td><?php echo $hq['tgl_boking']; ?></td>
		<td> <a data-toggle='modal' data-target='#myModal<?php echo $hq['id_mahasiswa']; ?>'  class='btn btn-default' style='width:100px;'><span class='glyphicon glyphicon-qrcode' aria-hidden='true'></span>&nbsp;Tiket</a> </td>
  		<div class="modal fade" id="myModal<?php echo $hq['id_mahasiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
          <div class="modal-dialog" style="min-width:250px;">
              <div class="modal-content">
                  <form action="" method="post">
                     	<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tiket Masuk Anda</h4>
                      </div>
                      
                      <div class="modal-body">
                        <div id="container">
                        <center>  
                         <img src="../<?php echo $hq['img']; ?>">
                        </center>
                        </div>
                      </div>

                      <div class="modal-footer">
                      	<input type="hidden" name="id" value="<?php echo $hq['kode_boking']; ?>">
                        <input type="submit" class="btn btn-default" data-dismiss="modal" value="Kembali">
                        <input type="submit" name="simpan_regis" class="btn btn-default" value="Simpan">
                      </div>
                  </form>
              </div>
        </div>
     </div>
	</tr>		
	<?php $no++; } ?>
 </tbody>
 </table>
 <script type="text/javascript">
  $(document).ready(function(){
    $("table").footable();
  });
</script>