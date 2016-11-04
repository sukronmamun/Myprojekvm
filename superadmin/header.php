<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../control/icon/favicon1.png">
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>


    <title>U-seminar</title>


    <!-- Bootstrap core CSS -->
    <link href="../control/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <script src="../control/assets/js/jquery.js"></script>

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    

    <script src="../control/js/footable.js" type="text/javascript"></script> 
    <link href="../control/css/footable/footable.core.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    <link type="text/css" href="../control/css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <style>
    .list_information li{
        margin: 1px 1px;
        padding: 7px 5px;
        list-style:none;
        border-radius: 3px;
        background-color: #bce8f1;
    }
    .profil>.poto,.profil>.data_profil{
        float: left;
    }
    .profil>.poto{
        background-color: #fff;
        overflow: hidden;
        margin-top: 10px;
        margin-left: 30px;
        width: 60px;
        border-radius: 100%
    }
    .profil>.data_profil{
        
    }
    .profil>.data_profil>ul{
     position: relative;
     margin-left:5px;
     top: 15px;
    }
    .profil>.data_profil>ul>li>a{
        color: #fff;
        line-height: 30px;
        padding: 5px 10px;
    }
    .profil>.data_profil>ul>li>a:hover{
    background-color: rgba(255,255,255,0);
    }

    .profil{
           
            top: -20px;
            position: relative;
            height: 80px;
            margin-bottom: -21px;
            background-color:#00bcd4;            
            color: #000;
        
    }
    .head_content{
        background-color: #fff;
        height: 80px;
        border-radius: 3px 3px 0 0;
        color: #000;
        line-height: 80px;
        text-align: center;
    }
        
    .sidbar{
        background-color: #2d2b32;
        
    }
 .sidbar.menu_nav{
    margin-top: -20px;
 }

    ul>li>a{
        color: #767676;
    }
    .form-horizontal .control-group, .form-vertical .control-group {
        margin-bottom: 0
    }
    .form-horizontal .control-group+.control-group, .form-vertical .control-group+.control-group {
        margin-top: 13px;
        padding-top: 13px;
        border-top: 1px solid #f5f5f5
    }
    input[type="text"]{
        border-radius: 3px;
        border:1px solid #bbb;
        height: 30px;
        
    }
    input[type="text"]:active{
        border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .sidbar>ul>li{
        border-bottom: 1px solid #444;
    }
    
    <style>
.boking{
    float:left;
    background-color: #fff;
    border:1px solid #eee;
    width:200px;
    color: #5cb85c;
    padding: 3px 5px;
}
.terdaftar{
    float:left;
    background-color: #fff;
    border:1px solid #eee;
    width:200px;
    color: #f0ad4e;;
    padding: 3px 5px;
}
.kosong{
    float:left;
    background-color: #fff;
    border:1px solid #eee;
    width:200px;
    color: #d9534f;
    padding: 3px 5px;
}
.boking>.simbol{
    background-color: #5cb85c;
    padding: 0.1em 9px;
    border-radius: 100%;
}
.terdaftar>.simbol{
    background-color: #f0ad4e;
    padding: 0.1em 9px;
    border-radius: 100%;
}
.kosong>.simbol{
    background-color: #d9534f;
    padding: 0.1em 9px;
    border-radius: 100%;
}
.clear{
    padding-top: 10px;
    clear: both;
}

</style>
    </style>

  </head>

  <body>

        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="border-bottom:1px solid #ddd">
        <div class="container topnav">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand topnav" href="../index.php"><img src="../control/icon/logo cdr.png" width="150px" style="margin-top:-5px;margin-left:-60px;" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right head_menu" >
                     <li class="dropdown">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $nama ?> </a>
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
  