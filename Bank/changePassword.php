	<div class=" col-md-12">
		<div class="col-sm-8 ">
	<br>
	<br>
	<br><br>
			<div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-edit"></em>  Ubah Password</h4>
			<p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies, such as the aria-label, aria-labelledby or title attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods is not advised.</p>
 			</div>
			
		</div>
		<div class="col-sm-4">
			<div class=" col-md-12 login-from ">
            <h4><em class="glyphicon glyphicon-edit"></em>  Ubah Password</h4>
 
            		<?php 
           
                   		$data = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$_SESSION[id]'");
	                   		$hdata=mysql_fetch_array($data); 
	                 ?>

            <form action="logactiv/loginactive.php" method="POST">
                <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" class="form-control" value="<?php echo $hdata['id_mahasiswa'] ?>" readonly name="nim" placeholder="NIM" style="max-width:200px" title="Nomer Induk Anda" />
                </div>
                
                <div class="form-group">
                    <label for="">Password Lama</label>
                    <input type="password" class="form-control" name="o_password" placeholder="old Password" style="max-width:200px" value="<?php echo $hdata['kontak'] ?>" title="Nomer kontak anda" />
                </div>
                <div class="form-group">
                    <label for="">Password Baru</label>
                    <input type="password" class="form-control" name="n_Password" placeholder="new Password" style="max-width:200px" value="<?php echo $hdata['kontak'] ?>" title="Nomer kontak anda" />
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
