
<?php
if (isset($_POST['uploadRegis'])) {
      $gambar     = $_FILES["file"]["name"];
      $kode       = $_POST['kode'];
      $seminar_id = $_POST['id_s'];
      $type       = $_FILES["file"]["type"];
      $file_tmp   = $_FILES['file']['tmp_name'];
      $moveto     = "../control/assets/img/";

      $msg = "";
      if ($type == "image/jpeg") {$ex =".jpeg";}
      else{  $msg = "Format Fail Tidak diterima";}

      if ($ex == '.jpeg') {
          $nama_file  = $seminar_id."_".$idm.$ex;
          $folder1    = "../control/assets/img/".$seminar_id."_".$idm.$ex;
          
          $d1 = mysql_query("UPDATE boking SET img = '$nama_file' WHERE kode_boking ='$kode' ");
          if ($d1) {
            move_uploaded_file($file_tmp, $folder1);
            }
      }else{
        echo $msg;
      }

  }

  function cekkuota($x,$y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    
    $kuota = ($x-($hm1+$hm));

    return $kuota;

  }
  ?>

  <div class="from-area">

    <div class="col-md-12 ">
    <h4><em class="glyphicon glyphicon-log-in"></em>  Data Seminar</h4>
      <table class="table table-responsive toggle-circle-filled" >
   <tr >
     <th data-toggle="true" style="width: 10px;text-align:center">No</th>
     <th >Tema</th>
     <th data-hide="tablet,phone" style="width: 150px">Kode Transaksi</th>
     <th data-hide="tablet,phone" style="width: 150px">Tanggal</th>
     <th data-hide="phone" style="width: 50px;text-align:center">Kuota</th>
     <th data-hide="tablet,phone" style="width: 200px;text-align:center">Act</th>
   </tr>

    <?php 
     $no=1;
      $b1 = mysql_query("SELECT seminar.tema AS tema,boking.kode_boking AS kode, seminar.tanggal AS tanggal, seminar.kuota AS kuota, boking.id_seminar AS id_seminar FROM boking,seminar WHERE boking.id_seminar = seminar.id_seminar AND  boking.id_mahasiswa = '$idm' ");     
      while ($xb = mysql_fetch_array($b1)) {
        echo "<tr>
        <td>$no</td>
        <td>$xb[tema]</td>
        <td>$xb[kode]</td>
        <td>$xb[tanggal]</td>
        <td>".cekkuota($xb['kuota'],$xb['id_seminar'])."</td>
        <td> <div class='btn-group' role='group' aria-label='...'> <button type='button' data-toggle='modal' data-target='#regis$xb[id_seminar]'  class='btn btn-info'>&nbsp;Kirim Bukti Pembayaran</button> </div> ";
        ?>
          
          <div class="modal fade" id="regis<?php echo $xb['id_seminar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog" style="min-width:250px;">
                                  <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Tiket Masuk Anda</h4>
                                    </div>
                                  <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body" >
                                      <div id="container">
                                         
                                            <div class="form-group">
                                              <label for="nama">Nim</label>
                                            <input type="hidden" class="form-control" name="id_s" style="width:150px; " readonly value="<?php echo $xb['id_seminar']; ?>">
                                            <input type="text" class="form-control" name="nim" style="width:150px; " readonly value="<?php echo $_SESSION['id']; ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="nama">Nama</label>
                                              <input type="text" class="form-control" name="nama" style="width:200px; " readonly value="<?php echo $_SESSION['name']; ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="nama">Kode Boking</label>
                                              <input type="text" class="form-control" name="kode" style="width:200px; " readonly value="<?php echo $xb['kode']; ?>">
                                            </div>
                                            <div class="form-group">
                                              <label for="nama">Tema</label>
                                              <textarea name="tema"  class="form-control" readonly style="max-height:150px; min-height:150px; max-width:90%; width:90%;" ><?php echo $xb['tema']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                              <label for="nama">File Gambar</label>
                                               <input type="file" class="form-control"  name="file">
                                            </div>
                                          
                                      </div>
                                    </div>

                                    <div class="modal-footer">
                                      <div class="form-group">
                                               <input type="submit" class="form-control" style="width:80px;float:right"  name="uploadRegis" value="kirim">
                                      </div>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>
       <?php
        echo "</td> </tr>";
      $no++;
      }

      $b2 = mysql_query("SELECT seminar.tema AS tema, seminar.tanggal AS tanggal,seminar.kuota AS kuota,pendaftaran.kd_trans AS Kode,pendaftaran.id_seminar AS id_seminar FROM pendaftaran,seminar WHERE pendaftaran.id_seminar = seminar.id_seminar AND  pendaftaran.id_mahasiswa = '$idm' ");
      while ($bx1 = mysql_fetch_array($b2)) {
        echo "<tr>
        <td>$no</td>
        <td>$bx1[tema]</td>
        <td>$bx1[Kode]</td>
        <td>$bx1[tanggal]</td>
        <td>".cekkuota($bx1['kuota'],$bx1['id_seminar'])."</td>
        <td> 
          <div class='btn-group' role='group' aria-label='...'>
              <a data-toggle='modal' data-target='#myModal$bx1[id_seminar]'  class='btn btn-default' style='width:100px;'><span class='glyphicon glyphicon-qrcode' aria-hidden='true'></span>&nbsp;Tiket</a>
          </div>";
              ?>
              <div class="modal fade" id="myModal<?php echo $bx1['id_seminar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog" style="min-width:250px;">
                                  <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Tiket Masuk Anda</h4>
                                    </div>
                                    
                                    <div class="modal-body">
                                      <div id="container">
                                      <center> 
                                       <img src="http://chart.apis.google.com/chart?cht=qr&amp;chs=280x280&amp;chl=<?php echo $bx1['Kode'] ?>" alt="" style="width:280px;">
                                       </center>
                                       <div class="col-md-12">
                                         <div class="col-md-6">
                                            <h3>Identitas</h3>
                                            <p><?php echo $_SESSION['id']; ?></p>
                                            <p><?php echo $_SESSION['name']; ?></p>
                                          </div>
                                          <div class="col-md-6">
                                             <h3>Tema Seminar</h3>
                                           <p><?php echo $bx1['tema']; ?></p>
                                          </div>
                                      
                                       </div>
                                      </div>
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

              <?php
        echo "</td>
       </tr>";
      $no++;
      
      }



      ?>
      </table>

    </div>     
    </div>
    </div>
 
<script type="text/javascript">
  $(document).ready(function(){
    $("table").footable();
  });
</script>