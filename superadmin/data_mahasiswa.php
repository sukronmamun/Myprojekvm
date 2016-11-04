<div class="col-md-12">
  <h2 class="sub-header">Data Peserta Seminar</h2>
  <form action="" method="post">
   <div class="form-group">
     <label for="seminar">Seminar</label>
     <select name="seminar" id="" class="form-control">
       <option value="">--Pilih Tema--</option>
       <?php 
        $q_cari_seminar = mysql_query("SELECT * FROM seminar where id_fakultas = '$idfakultas' ");
        while ($hq_cari_seminar = mysql_fetch_array($q_cari_seminar)) {
          ?>

            <option value="<?php echo $hq_cari_seminar['id_seminar']; ?>"><?php echo $hq_cari_seminar['tema']; ?> </option>
          <?php } ?>
     </select>
   </div> 
   <div class="form-group">
     <input type="submit" name="cari_tema" value="Cari" class="btn btn-primary">
   </div>
  </form>
</div>

<?php 
if (isset($_POST['cari_tema'])) {
  

    require 'data_peserta_seminar.php';

   } ?>