<br><br><br><br>
<div class="col-md-12">
    <?php 
   

        if(isset($_POST['editp'])){
            if ($_POST['nilaiCaptcha'] === $_SESSION['Captcha']) {
                require "functions.php";
                $kelas=$_POST['kelas'];
                $semester=$_POST['semester'];
                $email=$_POST['email'];
                $kontak=$_POST['kontak'];

                
             
                

                $update_dp = mysql_query("UPDATE mahasiswa SET kelas = '$kelas', semester ='$semester',email ='$email', kontak ='$kontak' WHERE id_mahasiswa = '$idm'"); 
                if ($update_dp) {
                    ?>
                    
                    <div class="alert alert-success alert-dismissible col-md-5" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Sukses!</strong> Data Berhasil diubah.
                    </div><br>

                    <?php
                    
                }else{
                    ?>
                    <div class="alert alert-warning alert-dismissible col-md-5" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Pringatan!</strong> Data Gagal diubah.
                    </div><br>

                    <?php
                    }

            }else{
                    ?>
                    <div class="alert alert-warning alert-dismissible col-md-5" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Pringatan!</strong> Captcha tidak sesuai.
                    </div><br>


                    <?php
                }
        }
         ?> 
</div>

    <div class=" col-md-12 ">
   
    	<div class="col-sm-8" style="margin-top:-30px;">
			<div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-edit"></em>  Ubah Profil</h4>
			<p>Lakukan perubahan setiap kali kontak anda berubah agar kami dapat menghubungi anda.</p>
 			</div>
            <br>
            <br>       

		</div>
		<div class="col-sm-4" style="margin-top:-110px;">
			<div class=" col-md-12 login-from  bg_c">
            <h4><em class="glyphicon glyphicon-edit"></em>  Ubah Profil</h4>
 
            		<?php 
           
                   		$data = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$_SESSION[id]'");
	                   		$hdata=mysql_fetch_array($data); 
	                 ?>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" class="form-control" value="<?php echo $hdata['id_mahasiswa'] ?>" readonly name="nim" placeholder="NIM" style="max-width:200px" title="Nomer Induk Anda" />
                </div>
                
                <?php if($fak != 0 ){ ?>


                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text"  class="form-control" value="<?php echo $hdata['kelas'] ?>" name="kelas" placeholder="Kelas" style="max-width:200px" title="Kelas Anda Saat ini" />
                </div>

                
                <div class="form-group">
                    <label for="">Semester</label>
                    <input type="number" class="form-control" min="1" max="12" name="semester" value="<?php echo $hdata['semester'] ?>" placeholder="Semester" style="max-width:200px" title="Semester Saat ini" />
                </div> <?php } ?>
                
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" placeholder="Email" value="<?php echo $hdata['email'] ?>" style="max-width:300px"/>
                </div>
                <div class="form-group">
                    <label for="">Ponsel</label>
                    <input type="tel" class="form-control" name="kontak" placeholder="Kontak" style="max-width:200px" value="<?php echo $hdata['kontak'] ?>" title="Nomer kontak anda" />
                </div>
                 <div class="form-group">
                    <img src="../gambar.php" alt="gambar" /><br/><br/>
                    <input name="nilaiCaptcha" class="form-control" value="" maxlength="6"/>
                </div>
                <div class="text-right">
                    <button name="editp" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <br><br>
        </div>
		</div>
		</div>
