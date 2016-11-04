<?php 
$qcs=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$idfakultas' ORDER BY id_seminar DESC ");
?>

<a href="index.php?model=tambahseminar" class="btn btn-primary" style="margin:5px auto;float:right">Tambah Seminar</a>
<h2 class="sub-header">Data Seminar</h2>
          <div class="module">
            <div class="module-head">
              <h3>DataTables</h3>
            </div>
            <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
            width="100%">
            <thead>
                <tr>
                    <th data-toggle="true">No</th>
                    <th data-hide="phone">Tema</th>
                    <th data-hide="phone">Waktu</th>
                    <th data-hide="phone">kuota</th>
                    <th data-hide="phone">Sisa kuota</th>
                    <th >Act</th> 
                </tr>
            </thead>
            <tbody>

<?php
$no = 1;

while ($hqcs=mysql_fetch_array($qcs)) {?>
 
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $hqcs['tema'] ?></td>
	<td><?php echo $hqcs['tanggal'] ?></td>
	<td><?php echo $hqcs['kuota'] ?></td>
	<td><?php echo cekkuota($hqcs['kuota'],$hqcs['id_seminar']); ?></td>
	<td> 				
						<div class="btn btn-group">
                        <a href="index.php?model=data_seminar&q=<?php echo $hqcs['id_seminar'] ?>" class="btn btn-primary" >Cek</a>   
                        </div></td>
</tr>
	
    <?php $no++; } ?>

</tbody>

            <tfoot>
             
        <tr>
            <th style="width:50px">No</th>
        <th >Tema</th>
        <th >Waktu</th>
        <th >kuota</th>
        <th >Sisa kuota</th>
        <th >Act</th> 
        </tr>
            </tfoot>
            </table>
            </div>
            </div>