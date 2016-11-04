  <div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar sidbar">
          
  
          <ul class="nav nav-sidebar">
            <li>
              <div class="profil nav nav-sidebar">
                <div class="poto">
                 <img src="images/user.png" width="100%" alt="">
                </div>
                <div class="data_profil">
                  
                <ul class="nav navbar-nav navbar-right menu_nav">
                          <li class="dropdown">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $nam ?><span class="caret"></span> </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="?model=editacc">Profile</a></li>
                                  <li><a href="" data-toggle="modal" data-target="#password">Change Password</a></li>
                                  <li><a href="../logout.php">Logout</a></li>
                                </ul>
                          </li>
                          
                      </ul>
                </div>
            </div>
            </li>
                    <li><a href="index.php"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp; Halaman Utama</a></li>
                    <li><a href="?model=data"> <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> &nbsp; Pembayaran</a></li>
                    <li><a href="?model=validasi"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> &nbsp; Validasi</a></li>
                    <li><a href="?model=seminar"> <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> &nbsp; Seminar</a></li>
                    <li><a href="?model=daftar"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp; Daftar</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
        <div class="content-section-a hm" >



<?php 

if (isset($_GET['model'])) {
  $act=mysql_real_escape_string($_GET['model']);
  if ($act == 'editacc') {
    if (file_exists('editprofiel.php')) {
      require 'editprofiel.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'validasi') {
    if (file_exists('validasi_data.php')) {
      require 'validasi_data.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'password') {
    if (file_exists('changePassword.php')) {
      require 'changePassword.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'undian') {
    if (file_exists('undian.php')) {
      require 'undian.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'daftar') {
    if (file_exists('daftar.php')) {
      require 'daftar.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'data') {
    if (file_exists('dataseminar.php')) {
      require 'dataseminar.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'pesan') {
    if (file_exists('pesanseminar.php')) {
      require 'pesanseminar.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }elseif ($act == 'pesantiket') {
    if (file_exists('pesantiket.php')) {
      require 'pesantiket.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  
  elseif ($act == 'dafseminar') {
    if (file_exists('daftarsemianr.php')) {
      require 'daftarsemianr.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  elseif ($act == 'detile') {
    if (file_exists('detile_controller.php')) {
      require 'detile_controller.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }elseif ($act == 'seminar') {
    if (file_exists('seminar.php')) {
      require 'seminar.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }elseif ($act == 'data_detail') {
    if (file_exists('data_detail_peserta_seminar.php')) {
      require 'data_detail_peserta_seminar.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }elseif ($act == 'boking') {
    if (file_exists('data_boking.php')) {
      require 'data_boking.php';
    }else{
      include 'datatidakditemukan.php';
    }
  }
  else{
    include 'datatidakditemukan.php';
  }
}else{
  include 'utama.php';
}


 ?>
</div>


        </div>
      </div>
    </div>
