    <div class="container">
	<div class=" col-md-12">
		<div class="col-sm-8 ">
	<br>
	<br>
	<br><br>
			<div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-edit"></em>  Edit Profil</h4>
			<p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies, such as the aria-label, aria-labelledby or title attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods is not advised.</p>
 			</div>
			
		</div>
		<div class="col-sm-4">
			<div class=" col-md-12 login-from ">
            <h4><em class="glyphicon glyphicon-edit"></em>  Edit Profil</h4>
 
            		<?php 
           
                   		$data = mysql_query("SELECT * FROM user WHERE id_user = '$idu'");
	                   		$hdata=mysql_fetch_array($data); 
	                 ?>

            <form action="" method="POST">
              <div class="form-group">
                    <label for="">Nama </label><br>
                    <input type="text" class="form-control" value="<?php echo $hdata['nama_dpn'] ?>" name="nmd" placeholder="Nama Depan" style="max-width:120px;float:left" />
                    <input type="text" class="form-control" value="<?php echo $hdata['nama_blk'] ?>" name="nmb" placeholder="Nama Belakang" style="max-width:120px;float:left;margin-left:10px;">
                </div>
                <br>  <br>    
                <div class="form-group" style="clear: both;">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $hdata['email'] ?>" style="max-width:300px"/>
                </div>
                <div class="form-group">
                    <label for="">Ponsel</label>
                    <input type="text" class="form-control" name="kontak" placeholder="Kontak" style="max-width:200px" value="<?php echo $hdata['kontak'] ?>" title="Nomer kontak anda" />
                </div>
                 <div class="form-group">
                    <img src="../gambar.php" alt="gambar" />
                    <input name="nilaiCaptcha" class="form-control" value="" maxlength="6"/>
                </div>
                <div class="text-right">
                    <button name="regis" class="btn btn-primary">Next</button>
                </div>
            </form>
            <br><br>
        </div>
		</div>
    	</div>
        </div>