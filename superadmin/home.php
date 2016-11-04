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
                              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $nama ?><span class="caret"></span> </a>
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
            <li><a href="index.php">Halaman Utama</a></li>
            <li><a href="index.php?model=website">Website</a></li>
            <li><a href="index.php?model=panitia">Panitia</a></li>
            <li><a href="index.php?model=unggahmahasiswa">Data Mahasiswa</a></li>
            <li><a href="index.php?model=mahasiswa">Data Peserta</a></li>
            <li><a href="index.php?model=seminar">Data Seminar</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <?php 
        if (isset($_POST['ubah_dpass'])) {
              $pass=$_POST['pass'];
              $pass1=$_POST['pass1'];
                  if ($_SESSION['Captcha'] === $_POST['nilaiCaptcha']) {
                    
                      if ($pass1 === $pass) {
                        $passwordm = md5($pass1);
                        $qubah = mysql_query("UPDATE user SET password = '$passwordm' WHERE id_user = '$id_user' ");
                        if (!$qubah) {
                       
                          echo "data gagal di ubah";
                        }

                      }else{
                        echo "Password tidak sama";

                      }

                  }else{
                    echo "Captcha Tidak cocok";
                  }
          }

         ?>
          
            <?php 
              if (isset($_GET['model'])) {
                $act=$_GET['model'];
                
                if ($act == 'editacc') {
                  if (file_exists('editprofiel.php')) {
                    require 'editprofiel.php';
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
                }elseif ($act == 'panitia') {
                  if (file_exists('data_panitia.php')) {
                    require 'data_panitia.php';
                  }else{
                    include 'datatidakditemukan.php';
                  }
                }elseif ($act == 'website') {
                  if (file_exists('data_website.php')) {
                    require 'data_website.php';
                  }else{
                    include 'datatidakditemukan.php';
                  }
                }
                elseif ($act == 'mahasiswa') {
                  if (file_exists('data_mahasiswa.php')) {
                    require 'data_mahasiswa.php';
                  }else{
                    include 'datatidakditemukan.php';
                  }

                }elseif ($act == 'seminar') {
                  if (file_exists('data_seminar.php')) {
                    require 'data_seminar.php';
                  }else{
                    include 'datatidakditemukan.php';
                  }
                }elseif ($act == 'tambahseminar') {
                  if (file_exists('tambahseminar.php')) {
                    require 'tambahseminar.php';
                  }else{
                    include 'datatidakditemukan.php';
                  }
                }elseif ($act == 'tambah_panitia') {
                  if (file_exists('tambah_data_panitia.php')) {
                    require 'tambah_data_panitia.php';
                  }else{
                    require 'datatidakditemukan.php';
                  }
                }
                elseif ($act == 'data_seminar') {
                  if (file_exists('seminar.php')) {
                    require 'seminar.php';
                  }else{
                    require 'datatidakditemukan.php';
                  }
                }
                elseif($act == "unggahmahasiswa"){
                      if (file_exists('unggah_data_mahasiswa.php')) {
                    require 'unggah_data_mahasiswa.php';
                  }else{
                    require 'datatidakditemukan.php';
                  }
                }
                elseif ($act == 'aksi') {
                  if (file_exists('aktive.php')) {
                    require 'aktive.php';
                  }else{
                    include 'datatidakditemukan.php';
                  }
                }
                else{
                  include 'datatidakditemukan.php';
                }
              }else{
                include 'data_seminar.php';
              }

          ?> 
        </div>
      </div>
    </div>
