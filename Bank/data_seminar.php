<?php 


  
 ?>
<div class="">
<table class="table table-responsive toggle-circle-filled">
  <thead>

    <tr>
      <th data-toggle="true">No</th>
      <th>Tema</th>
      <th data-hide="tablet,phone">Kuota Awal</th>
      <th data-hide="phone">Sisa Kuota</th>
      <th data-hide="phone">Waktu Pelaksanaan</th>
      <th >Act</th>
    </tr>

  </thead>

  <tbody>
    	    <?php 
		    $qcs=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' ");
		    $no=1;
		    while ($hqcs=mysql_fetch_array($qcs)) {
        $ex = explode(" ", $hqcs['tema']);
        $link = implode("-", $ex);
				$id_seminar = $hqcs['id_seminar'];
        $tanggal = $hqcs['tanggal'];
				$kuota = $hqcs['kuota'];
        $tgl = substr($tanggal, 0,10);
        $sekarang = substr(sekarang(), 0,10);
            ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $hqcs['tema'] ?></td>
        <td><?php echo  $hqcs['kuota']?></td>
        <td><?php echo cekkuota($kuota,$id_seminar) ?></td>
        <td><?php echo $tgl ?></td>
        <td> 
        <a href="index.php?model=detile&res=<?php echo $link ?>" role="button"  class="btn btn-primary"><span>Selengkapnya</span></a>
        <?php if ($tgl == $sekarang ) { ?>
          <a href="index.php?model=undian&res=<?php echo $id_seminar ?>" class="btn btn-primary"><span>Undian</span></a>
          <?php } ?>
        </td>
			</tr>
		        <?php $no++;}  ?>
		</tbody>
		</table>
   </div>
   
<script type="text/javascript">
  $(document).ready(function(){
    $("table").footable();
  });
</script>


