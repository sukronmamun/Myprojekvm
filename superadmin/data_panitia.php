<?php 
$mode = @$_GET['mode'];
$id = @$_GET['id']; 

if ($mode == 'aktive') {

  $sql = mysql_query("UPDATE user SET  status = 'aktive' WHERE id_user =  '$id' ");  
}elseif($mode == 'non'){

  $sql = mysql_query("UPDATE user SET  status = 'non' WHERE id_user =  '$id' ");
}

 ?>


<h2 class="sub-header">Data Panitia</h2>

       
          <div class="module">
            <div class="module-head">
              <a href="index.php?model=tambah_panitia" class="btn btn-primary">Tambah Panitia</a>

            </div>
            <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
            width="100%">
            <thead>
                <tr>
                  <th data-toggle="true">No</th>
                  <th>Nama</th>
                  <th data-hide="phone">Kontak</th>
                  <th data-hide="phone">Email</th>
                  <th data-hide="phone">Status</th>
                  <th>Act</th>
                  </tr>

              
            </thead>
            <tbody>

            <?php 

            $dbp = mysql_query("SELECT * FROM user WHERE id_fakultas = '$idfakultas' AND status != 'ketua' "); 
            $no = 1;
            while ($hdbp = mysql_fetch_array($dbp)) {
              $status = $hdbp['status'];
              if ($status == "non") {
                $status = "Non-aktive";
              }
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $hdbp['nama_dpn']." ".$hdbp['nama_blk'] ?></td>
                  <td><?php echo $hdbp['kontak'] ?></td>
                  <td><?php echo $hdbp['email'] ?></td>
                  <td><?php echo $status ?></td>
                  <?php 
                    if ($hdbp['status'] == 'aktive') {
                      ?>
                        <td><a href="index.php?model=panitia&mode=non&id=<?php echo $hdbp['id_user']; ?>" class="btn btn-info">Non Aktifkan</a></td>
                      <?php
                    }else{
                      ?>
                        <td><a href="index.php?model=panitia&mode=aktive&id=<?php echo $hdbp['id_user']; ?>" class="btn btn-danger">Aktifkan</a></td>
                    <?php } ?>
                  
                </tr>
             
              <?php $no++; } ?>

              
            </tbody>
            <tfoot>
                  <tr>
                          <th data-toggle="true">No</th>
                          <th>Nama</th>
                          <th data-hide="phone">Kontak</th>
                          <th data-hide="phone">Email</th>
                          <th data-hide="phone">Status</th>
                          <th>Act</th>
                  </tr>
            </tfoot>
            </table>
            </div>
            </div>