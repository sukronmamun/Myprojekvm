<h2 class="sub-header">Data Mahasiswa</h2>
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
                 <th>NIM</th>
                 <th>NAMA</th>
                 <th data-hide="phone">Semester</th>
                 <th data-hide="phone">Kelas</th>
               </tr> 
            </thead>
            <tbody>
             <?php 
             	$id_seminar = $_POST['seminar'];
             	/*SELECT * FROM pendaftaran WHERE id_seminar = '$id_seminar'*/
  				$peserta = mysql_query("SELECT mahasiswa.id_mahasiswa, 
  											   mahasiswa.namalengkap, 
  											   mahasiswa.semester, 
  											   mahasiswa.kelas 
  										FROM   mahasiswa, pendaftaran
  										WHERE  pendaftaran.id_mahasiswa = mahasiswa.id_mahasiswa 
  										   AND pendaftaran.id_seminar = '$id_seminar'
  										");
                  $no = 1;
                  while ($hdbm = mysql_fetch_array($peserta)) {
              
              ?>

  
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $hdbm['id_mahasiswa'] ?></td>
              <td><?php echo $hdbm['namalengkap'] ?></td>
              <td><?php echo $hdbm['semester'] ?></td>
              <td><?php echo $hdbm['kelas'] ?></td>
            </tr>
             <?php 
                $no++;

                  }
              ?>
            </tbody>

            <tfoot>
             <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Semester</th>
                <th>Kelas</th>
            </tr>
            </tfoot>
            </table>
            </div>
            </div>

          </div>

<!--<script type="text/javascript">
  $(document).ready(function(){
    $("table").footable();
  });

</script>
-->