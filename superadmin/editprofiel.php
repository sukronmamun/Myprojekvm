<div class="row" style="margin-top:-30px;">
    <div class="col-md-12">
        <h2>Edit Profile</h2>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
    <?php 
   

        if(isset($_POST['editp'])){
            if ($_POST['nilaiCaptcha'] === $_SESSION['Captcha']) {              
                
                $email=$_POST['email'];
                $tlp=$_POST['tlp'];        
                

                $update_dp = mysql_query("UPDATE user SET email ='$email', kontak ='$tlp' WHERE id_user = '$id_user'"); 
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

</div>
<br><br>
        <div class=" col-md-12 ">
        
        <div class="col-sm-8" >
            
            <div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-edit"></em>  Ubah Profil</h4>
            <p>Lakukan perubahan setiap kali kontak anda berubah agar kami dapat menghubungi anda.</p>
            </div>
            <br>
            <br>       

        </div>
            <div class="col-sm-4" >
               <div class=" col-md-12 login-from  bg_c" style="border:1px solid #ddd;">
                    <h4><em class="glyphicon glyphicon-edit"></em>  Edit Profil</h4>
                    <hr>
         
                            <?php 
                   
                                $data = mysql_query("SELECT * FROM user WHERE id_user = '$id_user'");
                                    $hdata=mysql_fetch_array($data); 
                             ?>

                      <form action="" method="POST">

                        <div class="form-group">
                            <label for="">Nama Depan</label>
                            <input type="text" required class="form-control" value="<?php echo $hdata['nama_dpn'] ?>" readonly name="nm_dpn" placeholder="Nama Depan" style="max-width:200px"/>

                        </div>
                        <div class="form-group">
                            <label for="">Nama Belakang</label>
                            <input type="text" required class="form-control" value="<?php echo $hdata['nama_blk'] ?>" readonly name="nm_blk" placeholder="Nama Belakang" style="max-width:200px"/>
                        </div>
                        <div class="form-group">
                            <label for="">Ponsel</label>
                            <input type="number"  required class="form-control" name="tlp" placeholder="Email" value="<?php echo $hdata['kontak'] ?>" style="max-width:300px"/>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="telepon" style="max-width:200px" value="<?php echo $hdata['email'] ?>" title="Nomer kontak anda" />
                        </div>
                         <div class="form-group">
                            <img src="../gambar.php" alt="gambar" /><br/><br/>
                            <input name="nilaiCaptcha" required class="form-control" value="" maxlength="6"/>
                        </div>
                        <div class="text-right">
                            <button name="editp" class="btn btn-primary">Next</button>
                        </div>
                      </form>
                    <br>
                </div>
            </div>
        </div>
