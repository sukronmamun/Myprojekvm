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
    <link href="../control/assets/css/custom.css" rel="stylesheet">
    <link href="../control/assets/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Custom CSS -->
    <link href="../control/assets/css/landing-page.css" rel="stylesheet">        
    <link href="../control/css/css/footable/footable.core.css" rel="stylesheet" />
    <link href="../control/css/mahasiswa.css" rel="stylesheet" />
  
  
   <script src="js/modernizr.custom.js"></script>
   <script src="../control/js/footable.js"></script> 
   <script src="../control/assets/js/jquery.js"></script>
   <script src="../control/assets/js/bootstrap.min.js"></script>


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <style>
    .pelaksanaan{
         min-width: 90%;
        border-radius: 4px 4px 0px 0px;
        min-height: 135px;
        background-color: #885c06;
    }
    .biaya{
        min-width: 90%;
        border-radius: 4px 4px 0px 0px;
        min-height: 135px;
        background-color: #40bae1;
    }
     .biaya >h4{
        font-size: 
          width: 100%;
        background-color: #18637b;
        padding: 5px;
        color: #fff;
        border-radius: 4px 4px 0px 0px;
        text-decoration: underline; 
    }
     .pelaksanaan>h4>span{
        font-size: 50px;
        color: #fff;
     }
    .pelaksanaan >h4{
        font-size: 
          width: 100%;
        background-color: #f9b222;
        padding: 5px;
        color: #fff;
        border-radius: 4px 4px 0px 0px;
        text-decoration: underline; 
    }
    </style>
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
              <a class="navbar-brand topnav" href="#"><img src="../control/icon/logo cdr.png" width="150px" style="margin-top:-5px;" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="index.php">Halaman Utama</a>
                    </li>
                    <li>
                        <a href="?model=data">Seminar Ku</a>
                    </li>
                   
                    
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $identitas['namalengkap'] ?> <span class="caret"></span></a>
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

    </nav>


    <!-- Header -->
   <br>
   <br>
