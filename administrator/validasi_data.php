<?php 
if (isset($_POST['sim_validasi'])) {

  $sekarang = sekarang();
  $id_seminar = $_POST['id_seminar'];
  $id_mahasiswa = $_POST['id_mahasiswa'];
  $kode = $_POST['kode_boking'];
  $kode_boking  = $id_mahasiswa.substr($_POST['kode_boking'], 4);
  $kelas = $_POST['kelas'];
  $semester = $_POST['semester'];

  $simpan_v = mysql_query("INSERT INTO pendaftaran (id_pseminar, id_seminar, id_mahasiswa, id_user, kd_trans, status, kelas, semester, tgl_daftar) VALUES 
                                                    ('','$id_seminar','$id_mahasiswa','$idu','$kode_boking','Lunas','$kelas','$semester',now()) ");
  $hapus_v = mysql_query("DELETE FROM boking WHERE kode_boking = '$kode' ");
}

if (isset($_POST['hapus_validasi'])) {
  $kode_boking=$_POST['kode_boking'];
  $simpan_v = mysql_query("DELETE FROM boking WHERE kode_boking = '$kode_boking' ");
}

 ?>

        <!-- Modal -->
        <div class="modal fade" id="mm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Bukti Transfer</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  <input type="submit" name="hapus_validasi" value="Hapus" class="btn btn-primary"> <input type="submit" name="sim_validasi" value="Simpan" class="btn btn-primary">
                    </div>
                    </form>
                </div>
            </div>
        </div>


<?php 
$mode = @$_GET['mode'];
$id = @$_GET['id']; 
 ?>

<div class="col-md-12">

<h2 class="sub-header">Data Mahasiswa</h2>
          <div class="module">
            <div class="module-head">
              
            </div>
            <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
            width="100%">
            <thead>
                <tr>
                  <th data-toggle="true">No</th>
                  <th>Nama Lengkap</th>
                  <th data-hide="phone">Kelas</th>
                  <th data-hide="phone">Semester</th>
                  <th data-hide="phone">Kode Boking</th>
                  <th data-hide="phone">Tema</th>
                  <th>Act</th>
                  </tr>

              
            </thead>
            <tbody>

            <?php 

            $dbp = mysql_query("SELECT 
                                      boking.id_boking AS id,
                                      mahasiswa.id_mahasiswa AS id_mahasiswa,
                                      mahasiswa.namalengkap AS namalengkap,
                                      mahasiswa.kelas AS kelas,
                                      mahasiswa.semester AS semester,
                                      boking.kode_boking AS kode_boking,
                                      seminar.tema AS tema
                                      FROM mahasiswa,seminar,boking WHERE

                                      mahasiswa.id_mahasiswa = boking.id_mahasiswa AND 
                                      seminar.id_seminar = boking.id_seminar AND 
                                      boking.img != '' "); 
            $no = 1;
            while ($hdbp = mysql_fetch_array($dbp)) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $hdbp['namalengkap']?></td>
                  <td><?php echo $hdbp['kelas']?></td>
                  <td><?php echo $hdbp['semester']?></td>
                  <td><?php echo $hdbp['kode_boking'] ?></td>
                  <td><?php echo $hdbp['tema'] ?></td>
                  <td><a href="#" class="edit-record btn btn-primary" data-id="<?php echo $hdbp['id'] ?>">Tampilkan</a></td>
                </tr>
             
              <?php $no++; } ?>

              
            </tbody>
            <tfoot>
                  <tr>
                          <th data-toggle="true">No</th>
                          <th>Nama Lengkap</th>
                          <th data-hide="phone">Kelas</th>
                          <th data-hide="phone">Semester</th>
                          <th data-hide="phone">Kode Boking</th>
                          <th data-hide="phone">Tema</th>
                          <th>Act</th>
                  </tr>
            </tfoot>
            </table>
            </div>
            </div>
          </div>

           
        <script>
        
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#mm").modal('show');
                $.post('cek_validasi.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
<!--harviacode.com-->


