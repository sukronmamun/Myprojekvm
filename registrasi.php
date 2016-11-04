<?php 
include "control/database/adb.php";
include "session.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="control/assets/css/style.css" rel="stylesheet">
    <link href="control/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .brand_tiket{
        background-image: url('/img/brand.png');

    }
    .login-from {
    margin-top: 80px;
    border: 1px solid #ddd;
}
 
.login-from h4 {
    font-size: 26px;
    margin-bottom: 20px;
    margin-top: 20px;
}
 
p.return-home {
    margin: 20px 0;
}
footer{
	margin-top: 110px;
}
    </style>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top" >
          <div class="container"  >
            <div class="navbar-header" >
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="control/icon/logo cdr.png" width="150px" style="margin-top:-6px" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" >
              <ul class="nav navbar-nav navbar-right" style="margin-right:50px;" >
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="" data-toggle="modal" data-target="#tentangkami">About</a></li>
                <li><a href="" data-toggle="modal" data-target="#kontak">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fakultas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                   <?php echo $navbar ?>

                   <!--  <li><a href="#">Action</a></li>
                   <li><a href="#">Another action</a></li>
                   <li><a href="#">Something else here</a></li>
                   <li role="separator" class="divider"></li>
                   <li class="dropdown-header">Nav header</li>
                   <li><a href="#">Separated link</a></li>
                   <li><a href="#">One more separated link</a></li> -->
                  
                  </ul>
                </li>
                 <li><?php echo $nav ?></li>
              </ul>
              
          </div>
        </nav>

    <!-- Header -->
    <a name="about"></a>
   <div class="container">
   <br>
   <br>
   <br>
    <div class="row">
    	<div class=" col-md-12">
		<div class="col-sm-8 ">
	<br>
	<br>
	<br><br>
			<div class=" col-sm-12" style="border:1px soild #000">
            <h4><em class="glyphicon glyphicon-log-in"></em>  Halaman Registrasi</h4>
			<p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the .sr-only class. There are further alternative methods of providing a label for assistive technologies, such as the aria-label, aria-labelledby or title attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods is not advised.</p>
 			</div>
			
		</div>
		<div class="col-sm-4">
			<div class=" col-md-12 login-from ">
            <h4><em class="glyphicon glyphicon-log-in"></em>  Halaman Registrasi</h4>
 
            <?php 
            /**
             * Pesan Error Bila terjadi kegagalan dalam login
             */
            if (isset($_GET['error']) && $_GET['error'] == 'salah') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Isikan sesuai dengan Identitas Anda 
                       </div>'; 
            }elseif (isset($_GET['error']) && $_GET['error'] == 'samepassword') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Password Tidak Sama
                       </div>'; 
            }elseif (isset($_GET['error']) && $_GET['error'] == 'kosong') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Ada dorm yang belum diisi<br>
                        <strong>Wrong ! </strong> Form harus terisi semua
                       </div>'; 
            }elseif (isset($_GET['error']) && $_GET['error'] == 'tersedia') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Maaf ID Anda Sudah Terdaftar Silahkan Gunakan Form Login<br>
                       </div>'; 
            }elseif (isset($_GET['error']) && $_GET['error'] == 'minimum') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong Password ! </strong> minimum 6 karakter<br>
                       </div>'; 
            }elseif (isset($_GET['error']) && $_GET['error'] == 'captcha') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Captcha tidak sesuai<br>
                       </div>'; 
            }
?>
            <form action="logactiv/loginactive.php" method="POST">
                <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" class="form-control" name="nim" placeholder="NIM" style="max-width:200px" title="Nomer Induk Anda" />
                </div>
                
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" style="max-width:300px" title="Nama anda yang tercatat diuniversitas pamulang" />
                </div>

                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" name="kelas" placeholder="Kelas" style="max-width:200px" title="Kelas Anda Saat ini" />
                </div>

                <div class="form-group">
                    <label for="">Shift</label>
                   <select name="shift" id="" class="form-control" style="max-width:200px" title="Shift dimana Anda terdaftar" >
                   	<?php 
                   		$shift = mysql_query("SELECT * FROM shift");
                   		while($hshift=mysql_fetch_array($shift)){
                   			echo "<option value='$hshift[id_shift]'>$hshift[nm_shift]</option>";
                   		}
                   		
                   	 ?>
                   </select>
                </div>

                <div class="form-group">
                    <label for="">Semester</label>
                    <input type="text" class="form-control" name="semester" placeholder="Semester" style="max-width:200px" title="Semester Saat ini" />
                </div>
                
                <div class="form-group">
                    <label for="">Fakultas</label>
                   <select name="fakultas" id="" class="form-control" style="max-width:200px">
                   	<?php 
                   		$fak = mysql_query("SELECT * FROM fakultas");
                   		while($hfak=mysql_fetch_array($fak)){
                   			echo "<option value='$hfak[id_fakultas]'>$hfak[nm_fakultas]</option>";
                   		}
                   		
                   	 ?>
                   </select>
                </div>
                 <div class="form-group">
                    <label for="">Gender</label>
                   <select name="jk" id="" class="form-control" style="max-width:200px">
                   	<option value="1">Laki-laki</option>
                   	<option value="2">Perempuan</option>
                   	
                   </select>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" style="max-width:300px"/>
                </div>
                <div class="form-group">
                    <label for="">Ponsel</label>
                    <input type="text" class="form-control" name="kontak" placeholder="Kontak" style="max-width:200px" title="Nomer kontak anda" />
                </div>
                <div class="form-group">
                    <label for="">Buat sandi</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" style="max-width:300px" title="Minimum 6 karakter" />
                </div>
                <div class="form-group">
                    <label for="">Konfirmasi aandi Anda</label>
                    <input type="password" class="form-control" name="pass1" placeholder="Password" style="max-width:300px" title="Harus sesuai dengan password anda" />
                </div>
                 <div class="form-group">
                    <img src="gambar.php" alt="gambar" />
                    <input name="nilaiCaptcha" class="form-control" value="" maxlength="6"/>
                </div>
                <div class="text-right">
                    <button name="regis" class="btn btn-primary">Next</button>
                </div>
            </form>
            <p class="return-home"><a href="./../"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>      
        </div>
		</div>
		

		
    	</div>
      
    </div>
</div> <!-- End container -->

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<?php 

include "footer2.php";
 ?>
