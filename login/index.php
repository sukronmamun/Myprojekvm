<?php 
include "../control/database/adb.php";
include "../session.php";
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
    <link href="../control/assets/css/style.css" rel="stylesheet">
    <link href="../control/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .brand_tiket{
        background-image: url('control/assets/img/brand.png');

    }
    .login-from {
    margin-top: 20px;
    border: 1px solid #ddd;
}
.bg{
    padding-top: 80px;
   padding-bottom: 50px;
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
}

    </style>

    <!-- Custom Fonts -->
  
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
              <a class="navbar-brand" href="#"><img src="../control/icon/logo cdr.png" width="150px" style="margin-top:-6px" alt=""></a>
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
<div id="main"> 
    <div class="container bg">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 login-from mm">
            <h4><em class="glyphicon glyphicon-log-in"></em>  Halaman Login</h4>
 
            <?php 
            /**
             * Pesan Error Bila terjadi kegagalan dalam login
             */
            if (isset($_GET['error']) && $_GET['error'] == 'salah') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Username dan Password tidak ditemukan
                       </div>'; 
            }?>

            <form action="logactiv/active.php" method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="email" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" />
                </div>
                <div class="text-right">
                    <button name="act" class="btn btn-primary">Login</button>
                </div>
            </form>
            <p class="return-home"><a href="./../"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>    
        </div>
    </div>
</div> 
</div><!-- End container -->

    <!-- Footer -->
    <!-- Footer -->
    <footer>
         <div class="row fut_h">
              <div class="container">              
              <div class="col-md-12 ">
              
              <div class="col-md-4 ">
                <h4 class="f_head">Visi Dan Misi</h4>
                <ul class="col-md-6">
                  <li style="color:#fff"><a href="" style="color:#fff" data-toggle="modal" data-target="#tentangkami"><span class="glyphicon glyphicon-education" style="color:#fff;font-size:2em;padding-right:15px;margin-top:11px;margin-left:45px;"></span>Visi</a></li>
                  <li style="color:#fff"><a href="" style="color:#fff" data-toggle="modal" data-target="#tentangkami"><span class="glyphicon glyphicon-education" style="color:#fff;font-size:2em;padding-right:15px;margin-top:11px;margin-left:45px;"></span>Misi</a></li>
                </ul>
              </div>

                <div class="col-md-4 ">
                <h4 class="f_head">Kontak Kami</h4>
                <ul>
                  <li><div class="con_f"><img class="img" src="../control/icon/22.jpg" alt=""><div style="color:#fff">&nbsp;JL. Surya Kencana No.1 Pamulang Barat, Tangerang Selatan, Banten, 15417</div></div></li>
                  <li><div class="con_f"><img class="img" src="../control/icon/23.jpg" alt=""><div style="color:#fff">&nbsp;Telp   : (021) 74709855</div></div></li>
                  <li><div class="con_f"><img class="img" src="../control/icon/23.jpg" alt=""><div style="color:#fff">&nbsp;Fax    : (021) 7412566</div></div></li>
                  <li><div class="con_f"><img class="img" src="../control/icon/24.jpg" alt=""><div style="color:#fff">&nbsp;info@unpam.ac.id</div></div></li>
                </ul>
              </div>
              <div class="col-md-4 ">
                <h4 class="f_head">Seminar Terbaru</h4>
                <ul>
                  <?php 
                    $ns=mysql_query("SELECT * FROM seminar ORDER BY created_at LIMIT 5");
                    while ($hnq = mysql_fetch_array($ns)) {
                       $ex = explode(" ", $hnq['tema']);
                       $link = implode("-", $ex); 
                      ?>
                    <li><a href="index.php?model=detile&res=<?php echo $link; ?>" style="color:#fff"><img class="img" src="../control/icon/25.jpg" alt=""><?php echo substr($hnq['tema'],0,30) ?></a></li>

                      <?php } ?>

                </ul>
              </div>
              
              </div>

              <div class="col-md-12 copy_r">
                <center><p class="copy" >&copy; 2015 Sukron Ma'mun. </p></center>
              </div>
            </div>
           </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
