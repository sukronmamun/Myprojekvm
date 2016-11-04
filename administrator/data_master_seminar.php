<?php 
$qcs=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' ");
?>
<table class="table table_m" border="1">
 	<tr class="table_h">
 		<td style="width:50px">No</td>
 		<td>Tema</td>
 		<td style="width:155px">Waktu</td>
 		<td style="width:50px">kuota</td>
 		<td style="width:100px">Sisa kuota</td>
 		<td style="width:250px;">Act</td>
 	</tr>
<?php
$no = 1;
function cekkuota($x,$y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    
    $kuota = ($x-($hm1+$hm));

    return $kuota;

  }
while ($hqcs=mysql_fetch_array($qcs)) {?>
 
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $hqcs['tema'] ?></td>
	<td><?php echo $hqcs['tanggal'] ?></td>
	<td><?php echo $hqcs['kuota'] ?></td>
	<td><?php echo cekkuota($hqcs['kuota'],$hqcs['id_seminar']); ?></td>
	<td> 				
						<div class="btn btn-group">
                        <a href="index.php" class="btn btn-default" >Kembali</a> 
                        <a href="" class="btn btn-default" data-toggle="modal" data-target="#pesan">Pesan Sekarang</a>  
                        </div></td>
</tr>
	
    <?php $no++; } ?>

     </table>