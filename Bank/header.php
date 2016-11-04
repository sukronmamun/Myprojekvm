<!DOCTYPE html>
<html lang="en">

<head>   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../control/icon/favicon1.png">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700|Open+Sans+Condensed:700" />
        

    <title>U-seminar</title>


    <!-- Bootstrap Core CSS -->
    <link type="text/css" href="../control/assets/css/dasboard.css" rel="stylesheet">
    <link type="text/css" href="../control/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../control/css/basic-template.css" rel="stylesheet" />
    <link type="text/css" href="../control/css/footable/footable.core.css" rel="stylesheet" />
    <link type="text/css" href="../control/css/theme.css" rel="stylesheet">   
    <link type="text/css" href="../control/css/admin.css" rel="stylesheet">  
   
      
    <script src="../control/assets/js/jquery.js"></script>
    <script src="../control/js/footable.js" type="text/javascript"></script>
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="../control/assets/js/bootstrap.min.js"></script>   

    <!-- Custom CSS -->
    <!--  <link href="../control/assets/css/landing-page.css" rel="stylesheet"> -->
    <!-- Custom Fonts -->
    <!--  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand topnav" href="index.php"><img src="../control/icon/logo cdr.png" width="150px" style="margin-top:-5px;margin-left:-60px;" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Halaman Utama</a></li>
                    <li><a href="?model=data">Pembayaran</a></li>
                    <li><a href="?model=validasi">Validasi</a></li>
                    <li><a href="?model=seminar">Seminar</a></li>
                    <li><a href="?model=daftar">Daftar</a></li>
                    
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo $nam ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="?model=editacc">Profile</a></li>
                          <li><a href="" data-toggle="modal" data-target="#password">Change Password</a></li>
                          <li><a href="../logout.php">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
      
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
   <br>
   <br>
