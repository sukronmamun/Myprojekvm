
	<div class=" col-md-12">
		<div class="col-sm-8 ">
        	<br>
        	<br>
        	<br><br>
			<div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-edit"></em>  Ubah Profil</h4>
            <p>Lakukan perubahan setiap kali kontak anda berubah agar kami dapat menghubungi anda.</p>
            </div>
			
		</div>
		<div class="col-sm-4" style="margin-top: 80px;">
			<div class=" col-md-12 login-from ">
            <h4><em class="glyphicon glyphicon-edit"></em>  Edit Profil</h4>
 
            		<?php 
           
                   		$data = mysql_query("SELECT * FROM user WHERE id_user = '$idu'");
	                   		$hdata=mysql_fetch_array($data); 
	                 ?>

            <form action="" method="POST">
              <div class="form-group">
                    <label for="">Nama </label><br>
                    <input type="text" readonly class="form-control" value="<?php echo $hdata['nama_dpn'] ?>" name="nmd" placeholder="Nama Depan" style="max-width:120px;float:left" />
                    <input type="text" readonly class="form-control" value="<?php echo $hdata['nama_blk'] ?>" name="nmb" placeholder="Nama Belakang" style="max-width:120px;float:left;margin-left:10px;">
                </div>
                <br>  <br>    
                <div class="form-group" style="clear: both;">
                    <label for="">Email</label>
                    <input type="email"  required class="form-control" name="email" placeholder="Email" value="<?php echo $hdata['email'] ?>" style="max-width:300px"/>
                </div>
                <div class="form-group">
                    <label for="">Ponsel</label>
                    <input type="number" required  class="form-control" name="kontak" placeholder="Kontak" style="max-width:200px" value="<?php echo $hdata['kontak'] ?>" title="Nomer kontak anda" />
                </div>
                 <div class="form-group">
                    <img src="../gambar.php" alt="gambar"  />
                    <input name="nilaiCaptcha" required class="form-control" style="margin-top: 10px;" value="" maxlength="6"/>
                </div>
                <div class="text-right">
                    <button name="regis"  class="btn btn-primary">Next</button>
                </div>
            </form>
            <br><br>
        </div>
		</div>
    	</div>