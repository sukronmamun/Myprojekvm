<?php include '../control/database/adb.php'; ?>

<?php 
$id =  $_POST['id'];



$data = mysql_query("SELECT seminar.id_seminar, mahasiswa.id_mahasiswa,boking.kode_boking,boking.img as img,mahasiswa.kelas,mahasiswa.semester FROM boking,seminar,mahasiswa WHERE seminar.id_seminar = boking.id_seminar AND mahasiswa.id_mahasiswa = boking.id_mahasiswa AND boking.id_boking = '$id' ");
$hdata = mysql_fetch_array($data);

?>
<img src="../control/assets/img/<?php echo $hdata['img'] ?>" style="width:100%;" alt="">
<input type="hidden" name="id_seminar" value="<?php echo $hdata['id_seminar']; ?>">
<input type="hidden" name="id_mahasiswa" value="<?php echo $hdata['id_mahasiswa']; ?>">
<input type="hidden" name="kode_boking" value="<?php echo $hdata['kode_boking']; ?>">
<input type="hidden" name="kelas" value="<?php echo $hdata['kelas']; ?>">
<input type="hidden" name="semester" value="<?php echo $hdata['semester']; ?>">