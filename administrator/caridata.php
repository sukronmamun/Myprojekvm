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

$qcs=mysql_query("SELECT * FROM seminar WHERE tema LIKE '$tems'   ");

while ($hqcs=mysql_fetch_array($qcs)) { 
  $ex = explode(" ", $hqcs['tema']);
  $link = implode("-", $ex);
  $id_sif = $hqcs['id_shift'];
  ?>
  
    <div class="container">
      
      <div role="tabpanel">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Seminar</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Batasan</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">File</a></li>
        <li></li>
      </ul>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="btn-group" role="group" aria-label="..." style="float:right;margin-top:-1px; color:">
      <a href="index.php?model=seminar" class="btn btn-default btn-sm" style="height:30px" >Kembali</a>
      <input type="submit" value="simpan" class="btn btn-default btn-sm" name="simpan">
      </div>

      <!-- Tab panes -->
      <div class="tab-content">
      <br><br>
        <div role="tabpanel" class="tab-pane active" id="home">
                <div class="form-group" >
                        <label for="tema">Tema</label>
                        <input type="text" name="tema" value="<?php echo $hqcs['tema'] ?>" class="form-control">
                        <input type="hidden" name="id" value="<?php echo $hqcs['id_seminar'] ?>" class="form-control">
                </div>
                <div class="form-group" >
                        <label for="pembicara">Pembicara</label><br>
                        <textarea name="pembicara" id=""  class="form-control" title="Pisahkan antara pembicara satu dengan lainnya dengan tanda #" style="max-width:500px" rows="5"><?php echo $hqcs['pembicara'] ?></textarea>
                </div>
                 <div class="form-group" >
                        <label for="pembahasan">Pembahasan</label><br>
                        <textarea name="pembahasan" id=""  class="form-control" style="max-width:500px" rows="5"><?php echo $hqcs['pembahasan'] ?></textarea>
                </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
                <div class="form-group" >
                        <label for="sift">Shift</label>
                        <select name="shift" id="" class="form-control">
                          <?php 
                          
                            $ic=mysql_query("SELECT * FROM shift WHERE id_shift = '$id_sif' ");
                            while ($hic = mysql_fetch_array($ic)) { ?>
                          
                            <option value="<?php echo $hic['id_shift'] ?>"><?php echo $hic['nm_shift'] ?></option>
                          
                          <?php }?>
                          <?php 
                          
                            $c=mysql_query("SELECT * FROM shift");
                            while ($hc = mysql_fetch_array($c)) { ?>

                            <option value="<?php echo $hc['id_shift'] ?>"><?php echo $hc['nm_shift'] ?></option>
                          
                          <?php } ?>
                        </select>
                </div>
                
                <div class="form-group" >
                        <label for="biaya">Biaya</label><br>
                        <input type="number" min="0" name="biaya" value="<?php echo $hqcs['biaya'] ?>"  class="form-control">
                </div>

                <div class="form-group" >
                        <label for="kuota">Kuota</label><br>
                        <input type="number" min="0" name="kuota" value="<?php echo $hqcs['kuota'] ?>"  class="form-control">
                </div>
                
                <div class="form-group" >
                        <label for="tanggal">Tanggal</label><br>
                        <input type="date" name="tanggal" value="<?php echo substr($hqcs['tanggal'], 0,10) ?>"  class="form-control " style="width:150px;float:left">
                        <input type="time" name="jam" value="<?php echo substr($hqcs['tanggal'], 11) ?>"  class="form-control " style="width:150px;float:left">
                </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="messages">
        <br><br>
                
                <div class="form-group col-md-12">
                <div class="col-md-5">
                 
                        <label for="gambar"><img src="../control/assets/img/<?php  echo $hqcs['img'] ?>" alt="" height="100px"></label>
                        <input type="file" name="gambar" class="form-control ">
                </div>
                </div>

                <div class="form-group col-md-12" >
                <div class="col-md-5">
                 
                        <label for="modul">Modul</label><br>
                        <input type="file" name="modul" class="form-control">
                </div>
                </div>
        </div>
         </div>

    </div>
    </form>
    </div>

<?php } }  ?>
<?php 
if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $tema = $_POST['tema'];
  $pembicara = $_POST['pembicara'];
  $pembahasan = $_POST['pembahasan'];
  $shift = $_POST['shift'];
  $biaya = $_POST['biaya'];
  $kuota = $_POST['kuota'];
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $gambar = $_FILES["gambar"]["name"];
  $modul =  $_FILES["modul"]["name"];
  $sekarang = sekarang();

  $tgljm = $tanggal." ".$jam;
  
  $file_tmp1 = $_FILES['gambar']['tmp_name'];
  $file_tmp2 = $_FILES['modul']['tmp_name'];
  
  $folder1 = "../control/assets/img/".$gambar;
  $folder2 = "../control/assets/modul/".$modul;

   if ($gambar == "" && $modul != "") {
   $m = move_uploaded_file($file_tmp2,$folder2);
   if ($m) {
      $qp = mysql_query("UPDATE seminar SET id_shift='$shift',tema='$tema',pembahasan='$pembahasan',pembicara='$pembicara',biaya='$biaya',kuota='$kuota',tanggal='$tgljm',modul='$modul',id_user='$id_user',update_at='$sekarang' WHERE id_seminar = '$id'") ;
      if ($qp) {
        echo "Sukses";
      }else{
        echo "Update Gagal";
      }
   }else{
    echo "Gagal Mengupload Modul";
   }

   }elseif($modul == "" && $gambar != ""){

   $g = move_uploaded_file($file_tmp1,$folder1);
   
   if ($g) {
      $qp = mysql_query("UPDATE seminar SET id_shift='$shift',tema='$tema',pembahasan='$pembahasan',pembicara='$pembicara',biaya='$biaya',kuota='$kuota',tanggal='$tgljm',id_user='$id_user',img='$gambar',update_at='$sekarang'WHERE id_seminar = '$id'") ;
      if ($qp) {echo "Sukses";}
      else{echo "Update Gagal";}
   }else{echo "Gagal Mengupload Gambar";}
  
   }elseif($modul == "" && $gambar == ""){
      $qp = mysql_query("UPDATE seminar SET 
        id_shift='$shift',tema='$tema',pembahasan='$pembahasan',pembicara='$pembicara',biaya='$biaya',kuota='$kuota',tanggal='$tgljm',id_user='$id_user',update_at='$sekarang'WHERE id_seminar = '$id'") ;
       if ($qp) {echo "Sukses";}else{echo "Update Gagal";}

   }else{
     $g = move_uploaded_file($file_tmp1,$folder1);
     $m = move_uploaded_file($file_tmp2,$folder2);
     if ($g && $m) {
        $qp = mysql_query("UPDATE seminar SET 
        id_shift='$shift',tema='$tema',pembahasan='$pembahasan',pembicara='$pembicara',biaya='$biaya',kuota='$kuota',tanggal='$tgljm',modul='$modul',id_user='$id_user',img='$gambar',update_at='$sekarang'WHERE id_seminar = '$id'") ;
       if ($qp) {echo "Sukses";}else{echo "Update Gagal";}
      }else{echo "Gagal Mengupload File";}
    }


 }
 ?>
