  <div class="row">
  <div class="col-md-12 from-area ">
  
  <!-- content kiri -->
    <div class="col-sm-4" style="height:430px;" >
      
    <div class=" col-md-12 ">
            <h4><em class="glyphicon glyphicon-edit"></em>Pembayaran Seminar</h4>
            
            <form action="" method="POST">
              <div class="form-group" style="padding-bottom:80px;">
                    <label for="">Kategori</label><br>
                    
                    <select name="kat" id="" class="form-control" style="margin-top:10px;max-width:200px; width:135px;float:left;" >
                      <option value="kosong">Kategori</option>
                      <option value="sendiri">Per Orangan</option>
                      <option value="Kelas">Perkelas</option>
                    </select>

               <button name="next" style="margin-top:10px;float:left;margin-left:3px;" class="btn btn-primary">Selanjutnya</button>     
              </div>

            </form>
            <?php 
            if (isset($_POST['next'])) {
              
             if ($_POST['kat'] == 'sendiri') {
               include "perorang.php";
             }elseif ($_POST['kat'] == 'Kelas') {
               include "perkelas.php";
             }else{
              echo "<br><div class='alert alert-danger' role='alert'>Anda Belum Memilih</div>";
             }

            }

             ?>
        </div>


    </div>
  <!--Batas Kontent kiri-->
 <!-- content kanana-->
    <div class="col-sm-8" style="height:300px;">
    
    
         <?php 
      $pesan = @$_GET['pesan'];
      if ($pesan == 1) {
        echo "<div class='alert alert-success' role='alert'><p>Sukses..</p><p>Segera lakukan pembayaran Waktu anda 1x24 jam untuk prosess pembayaran jika lebih boking seminar anda akan kami hapus secara otomatis</p> </div>";
      }
       ?>
      <div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-edit"></em> Informasi Calon Peserta</h4>
            <form action="" method="POST">
              <table class="table"> 
              <tr>
                <td>Chek</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Semester</td>
                <td>Reguler</td>
              </tr>
             
                <?php 
                  if (isset($_POST['pero'])) {
                      $kode_boking =$_POST["kd_boking"];
                      $id_smnr = $_POST["seminar"];
                      
                      $cc=mysql_query("SELECT boking.id_boking AS boking,mahasiswa.id_shift AS reguler, mahasiswa.namalengkap AS nama, mahasiswa.kelas AS kelas , mahasiswa.semester AS semester FROM boking,mahasiswa WHERE boking.id_mahasiswa = mahasiswa.id_mahasiswa AND boking.kode_boking = '$kode_boking' AND boking.id_seminar = '$id_smnr'");

                     while ($hchek1 = mysql_fetch_array($cc)) {
                       $id_Sh=$hchek1['reguler'];
                      $reg = mysql_query("SELECT * FROM shift WHERE id_shift = '$id_Sh' ");
                      $hreg = mysql_fetch_array($reg);
                      $nmreguler = $hreg['nm_shift'];
                    echo "<tr><td><input type='checkbox' name='chek[".$hchek1['boking']."]'></td> 
                          <td>".$hchek1['nama']."</td>
                          <td>".$hchek1['kelas']."</td>
                          <td>".$hchek1['semester']."</td>
                          <td>".$nmreguler."</td></tr>";

                        }


                    }elseif (isset($_POST['perk'])) {
                      $m1=$_POST["kelas"];
                      $m2=$_POST["smester"];
                      $m3=$_POST["id_seminar"];
                     $cc=mysql_query("SELECT boking.id_boking AS boking, mahasiswa.id_shift AS reguler, mahasiswa.namalengkap AS nama,mahasiswa.kelas AS kelas ,mahasiswa.semester AS semester                   
                      FROM mahasiswa,boking WHERE
                      boking.id_mahasiswa = mahasiswa.id_mahasiswa AND 
                      boking.id_seminar = '$m3' AND 
                      mahasiswa.kelas LIKE '%$m1%' AND 
                      mahasiswa.semester = '$m2'");

                     while ($hchek1 = mysql_fetch_array($cc)) {
                      $id_Sh=$hchek1['reguler'];
                      $reg = mysql_query("SELECT * FROM shift WHERE id_shift = '$id_Sh' ");
                      $hreg = mysql_fetch_array($reg);
                      $nmreguler = $hreg['nm_shift'];
                    echo "<tr>
                    <td><input type='checkbox' name='chek[".$hchek1['boking']."]'></td>
                    <td>".$hchek1['nama']."</td>
                    <td>".$hchek1['kelas']."</td>
                    <td>".$hchek1['semester']."</td>
                    <td>".$nmreguler."</td>
                    </tr>
                       ";}

                    }

                 ?>
                 
              <tr>
                <td colspan="5">
                  <input type="submit" name="register" value="Daftar" class="btn btn-primary">
                </td>
              </tr>
              </table>
            </form>
        </div>

    </div><!-- Batas Content Kanan-->

    </div><!-- Batas Container-->
    </div>
   <?php 

    function hapus($id){
       $qcm = mysql_query("DELETE FROM boking WHERE id_boking = '$id'");

    }


    function pindah($key,$id_user){
      $qcm = mysql_query("SELECT boking.id_boking AS boking, boking.id_mahasiswa AS id_mahasiswa,boking.id_seminar AS id_seminar,boking.kode_boking AS kd_boking ,mahasiswa.namalengkap AS nama,mahasiswa.kelas AS kelas ,mahasiswa.semester AS semester FROM 
                                  boking,mahasiswa WHERE boking.id_mahasiswa = mahasiswa.id_mahasiswa AND boking.id_boking = '$key'");
      $hqcms = mysql_fetch_array($qcm);
      $id_boking    = $hqcms['boking'];
      $id_mahasiswa = $hqcms['id_mahasiswa'];
      $nama         = $hqcms['nama'];
      $id_seminar   = $hqcms['id_seminar'];
      $kelas        = $hqcms['kelas'];
      $semester     = $hqcms['semester'];
      $kode_boking  = $id_mahasiswa.substr($hqcms['kd_boking'], 4);
      $tgl = sekarang();
      $pindah = mysql_query("INSERT INTO pendaftaran(
                                id_pseminar, 
                                id_seminar, 
                                id_mahasiswa,
                                id_user, 
                                kd_trans,   
                                status, 
                                kelas, 
                                semester, 
                                tgl_daftar ) VALUES (
                                '',
                                '$id_seminar',
                                '$id_mahasiswa',
                                '$id_user',
                                '$kode_boking',
                                'Lunas',
                                '$kelas',
                                '$semester',
                                '$tgl')");

      hapus($id_boking);

    }
    if (isset($_POST['register'])) {
     $cheks = $_POST['chek'];
     $total_m = count($cheks);
     
     foreach ($cheks as $key => $value ) {
      pindah($key,$id_user); 
     }

    }

     ?>

  