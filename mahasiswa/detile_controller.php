<?php
if (isset($_POST['regis'])) {
$tema_seminar= $_POST['tema'];
$ex = explode(" ", $tema_seminar);
$link = implode("-", $ex);
if ($_POST['nilaiCaptcha'] === $_SESSION['Captcha']) {
$id_seminar = $_POST['id_seminar'];
$id_mahasiswa = $_POST['id_mahasiswa'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$kontak = $_POST['kontak'];
$kelas = $_POST['kelas'];
$date = besok();
$rand = rand(00000,$id_mahasiswa);
$hrand = $id_mahasiswa.$rand;
$m = substr($hrand, 6,8);

$update_data = mysql_query("UPDATE mahasiswa SET semester='$semester', kelas= '$kelas',kontak= '$kontak' , updated_at='$date' WHERE id_mahasiswa = '$id_mahasiswa' ");

$cek =  mysql_query("SELECT count(*) AS total FROM boking WHERE id_seminar = '$id_seminar' AND id_mahasiswa = '$id_mahasiswa' ");
$r = count($cek);

$cek1 = mysql_query("SELECT kode_boking FROM boking WHERE kode_boking = '$hrand' ");
$hcek1 = mysql_num_rows($cek1);
if ($hcek1 > 0) {
$rand = rand(00000,$id_mahasiswa);
$hrand = $id_mahasiswa .= $rand;
$m = substr($hrand, 6,8);
}else{

$mm = mysql_query("INSERT INTO boking (id_boking,id_seminar, kode_boking, id_mahasiswa, tgl_boking) VALUES ('','$id_seminar','$m','$id_mahasiswa','$date')");
if ($mm) {
$pesan = "<div class='alert alert-success alert-dismissible col-md-12' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <p>Sukses..</p><p>Segera lakukan pembayaran Waktu anda 1x24 jam untuk prosess pembayaran jika lebih boking seminar anda akan kami hapus secara otomatis</p> </div>";
  }else{
  $pesan = "<div class='alert alert-danger alert-dismissible col-md-12' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <p>Oops..</p><p>Sepertinya terjadi kesalahan..</p> </div>";
    }
    }
    }else{?>
    <div class="alert alert-warning alert-dismissible col-md-12" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Pringatan!</strong> Captcha tidak sesuai.
    </div><br>
    <?php
    }
    }
    ?>
    <?php
    if (isset($_GET['res'])) {
      $tema = explode("-", $_GET['res']);
    $tems = implode(" ", $tema);
    function cekkuota($x,$y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    
    $kuota = ($x-($hm1+$hm));
    return $kuota;
    }
    $qcs=mysql_query("SELECT * FROM seminar,rekening WHERE tema LIKE '%$tems%'  ");
    while ($hqcs=mysql_fetch_array($qcs)) {
    $ex = explode(" ", $hqcs['tema']);
    $link = implode("-", $ex);
    ?>
    <?php
    if (@$pesan) {
    echo $pesan;
    }
    ?>
    <div class="col-sm-6 col-md-10 col-md-offset-1">
      <div class="thumbnail">
        <h3 align="center"><?php echo $hqcs['tema'] ?></h3>
        <img src="../control/assets/img/banner-bg.jpg" alt="...">
        <div class="caption">
          <h4>Pembicara</h4>
          <div class="pembicara">
            <?php
            $qpem=explode("#", $hqcs['pembicara']);
            if (count($qpem) != 0) {
            echo "<ol>";
              foreach ($qpem as $key ) {
              echo "<li>$key</li>";
              }
            echo "</ol>";
            }
            ?>
          </div>

          <h4>Pembahasan</h4>
          <p><?php echo $hqcs['pembahasan'] ?></p>
       
       
          <div class="col-md-12">
            <div class="col-md-4 con-detile">
              <div class="biaya">
                <h4><span class="glyphicon glyphicon-tags">&nbsp;</span>Biaya</h4>
                <p>Rp.<?php echo number_format($hqcs['biaya'],2) ?></p>
              </div>
            </div>
            <div class="col-md-4 con-detile">
              <div class="con-group">
                <h4><span class="glyphicon glyphicon-user">&nbsp;</span>Kuota</h4>
                <p><?php echo cekkuota($hqcs['kuota'],$hqcs['id_seminar']) ?> Peserta</p>
              </div>
            </div>
            
            <div class="col-md-4 con-detile">
              <div class="pelaksanaan">
                <h4><span class="glyphicon glyphicon-time">&nbsp;</span>Pelaksanaan</h4>
                <p><?php echo "Tanggal : ".substr($hqcs['tanggal'], 0,10)."<br>";echo "Jam : ".substr($hqcs['tanggal'], 10);?></p>
              </div>
            </div>

          </div>
              <h4>Kirim Ke</h4>
              <p><?php echo $hqcs['no_rek'] ?></p>
              <p><?php echo $hqcs['nama'] ?></p>
          
          <?php
          $cek_dafatar = mysql_query("SELECT * FROM  boking WHERE   boking.id_seminar = '$hqcs[id_seminar]' AND boking.id_mahasiswa = '$idm'");
          $cek_hasil_pendaftaqran = mysql_num_rows($cek_dafatar);
          $cek_dafatar1 = mysql_query("SELECT * FROM  pendaftaran WHERE   pendaftaran.id_seminar = '$hqcs[id_seminar]' AND pendaftaran.id_mahasiswa = '$idm'");
          $cek_hasil_pendaftaqran1 = mysql_num_rows($cek_dafatar1);
          if ( substr($hqcs['tanggal'], 0,10) > date("Y-m-d")) {
          if (cekkuota($hqcs['kuota'],$hqcs['id_seminar']) != 0) {
          if ($cek_hasil_pendaftaqran == 0 AND $cek_hasil_pendaftaqran1 == 0) {
          ?>
          
          <div class="btn btn-group">
            <a href="index.php" class="btn btn-default" >Kembali</a>
            <a href="" class="btn btn-default" data-toggle="modal" data-target="#pesan">Pesan Sekarang</a>
          </div>
          <?php
          }else{
          ?>
          <div class="btn btn-group">
            <a href="index.php" class="btn btn-default" >Kembali</a>
          </div>
          <?php
          }
          }else{
          ?>
          <div class="btn btn-group">
            <a href="index.php" class="btn btn-default" >Kembali</a>
          </div>
          <?php
          }
          }else{
          ?>
          <div class="btn btn-group">
            <a href="index.php" class="btn btn-default" >Kembali</a>
          </div>
          <?php
          }
          
          ?>
          
        </div>
      </div>
    </div>
    <div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog" style="min-width:250px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo $hqcs['tema'] ?></h4>
          </div>
          
          <div class="modal-body">
            <div id="container">
              
              
              <div class="col-sm-5">
                
                
                <form action="" method="POST">
                  
                  <div class="form-group">
                    <input type="hidden" name="id_seminar" value="<?php echo $hqcs['id_seminar'] ?>">
                    <input type="hidden" name="tema" value="<?php echo $hqcs['tema'] ?>">
                    <input type="hidden" name="id_mahasiswa" value="<?php echo $idm ?>">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" readonly name="nama" value="<?php echo $naml; ?>" style="max-width:300px" title="Minimum 6 karakter" />
                  </div>
                  <?php if($fak != 0 ){ ?>
                  <div class="form-group">
                    <label for="">Semester</label>
                    <input type="number" min="1" max="12" class="form-control" name="semester" value="<?php echo $smstr; ?>" style="max-width:300px" title="Minimum 6 karakter" />
                  </div>
                  <?php } ?>
                  <div class="form-group">
                    <label for="">Kontak</label>
                    <input type="number" class="form-control" name="kontak" value="<?php echo $kontak; ?>" style="max-width:300px" title="Minimum 6 karakter" />
                  </div>
                  <?php if($fak != 0 ){ ?>
                  <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control"  name="kelas" value="<?php echo $kls; ?>" style="max-width:300px" title="Minimum 6 karakter" />
                  </div>
                  <?php } ?>
                  
                  
                </div>
                <div class="col-sm-7">
                  <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><span class="glyphicon glyphicon-bullhorn"></span> Info</div>
                    <div class="panel-body">
                      <p>Tema : <?php echo $hqcs['tema'] ?> </p>
                      <p>Waktu : <?php echo $hqcs['tanggal'] ?></p>
                      <hr>
                      <p>Periksa kembali data</p>
                      
                      <p>bila data sudah kami konfirmasi dan masih terjadi kesalahan kami tidak bertanggung jawab.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <img src="../gambar.php" alt="gambar"  style="margin-bottom:10px;">
                    <input name="nilaiCaptcha" class="form-control" maxlength="6"/>
                  </div>
                  <div class="btn-group text-right">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <input type="submit" name="regis" class="btn btn-primary" value="Pesan">
                  </div>
                </div>
              </form>
              <p class="return-home"><a href="index.php"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>
              <div class="modal-footer">
                
              </div></div>
            </div>
          </div>
        </div>
        <?php } } ?>