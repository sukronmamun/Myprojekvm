

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="control/icon/favicon1.ico">

    <title>U-Seminar.com</title>

    <!-- Bootstrap core CSS -->
    <link href="control/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="control/assets/css/style.css" rel="stylesheet">
     <link rel="shortcut icon" href="control/icon/Untitled-1.png">


     

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="control/assets/js/jquery.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="control/assets/css/carousel.css" rel="stylesheet">

  </head>
  <!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper" >
      <div class="container" >
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

      </div>
    </div>