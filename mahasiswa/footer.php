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




<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
 <div class="modal-dialog" style="min-width:250px;">
   <div class="modal-content">

     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Tiket Masuk Anda</h4>
     </div>
     
     <div class="modal-body">
    
  
       
           <form action="" method="POST">
              
               <div class="form-group">
                   <label for="">Buat sandi</label>
                   <input type="password" class="form-control" name="pass" placeholder="Password" style="max-width:300px" title="Minimum 6 karakter" />
               </div>
               <div class="form-group">
                   <label for="">Konfirmasi aandi Anda</label>
                   <input type="password" class="form-control" name="pass1" placeholder="Password" style="max-width:300px" title="Harus sesuai dengan password anda" />
               </div>
                <div class="form-group">
                   <img src="../gambar.php" alt="gambar"  style="margin-bottom:10px;">
                   <input name="nilaiCaptcha" class="form-control" value="" maxlength="6"/>
               </div>
                
        



    </div>
    <div class="modal-footer">
            <button name="ubah_dpass" class="btn btn-primary">Simpan</button>
               
           </form>                
     </div>
     </div>
   </div>
 </div>
</div>
<script src="js/toucheffects.js"></script>
</body>
</html>

<?php 
if (isset($_POST['ubah_dpass'])) {
  $pass=$_POST['pass'];
  $pass1=$_POST['pass1'];
      if ($_SESSION['Captcha'] === $_POST['nilaiCaptcha']) {
        
          if ($pass1 === $pass) {
            $passwordm = md5($pass1);
            $qubah = mysql_query("UPDATE mahasiswa SET password = '$passwordm' WHERE id_mahasiswa = '$idm' ");
          }else{
            echo "gagal";

          }

      }else{
        echo "gagalt";
      }
}

 ?>

<!-- <footer class="inner">
<div class="container">
<div class="row">
<div class="footer-ribon">
<span>Extras</span>
</div>
<div class="col-md-2">
<h4>Mobile First</h4>
<ul class="list icons list-unstyled">
<li><a id="iphone" href="https://itunes.apple.com/om/app/tutorials-point/id914891263?mt=8" target="_blank" rel="nofollow"><img alt="tutorialspoint iPhone App" src="../images/apple_store.png" class="mobile-apps"></a></li>
<li><a id="android" href="https://play.google.com/store/apps/details?id=com.tutorialspoint.onlineviewer" target="_blank" rel="nofollow"><img alt="tutorialspoint Android app" src="../images/google_play.png" class="mobile-apps"></a></li>
<li><a id="microsoft" href="http://www.windowsphone.com/s?appid=91249671-7184-4ad6-8a5f-d11847946b09" target="_blank" rel="nofollow"><img alt="tutorialspoint Windows app" src="../images/windows_store.png" class="mobile-apps"></a></li>
</ul>
</div>
<div class="col-md-2">
<h4>About us</h4>
<ul class="list icons list-unstyled">
<li><i class="icon icon-caret-right"></i> <a href="../about/index.html">Company</a></li>
<li><i class="icon icon-caret-right"></i> <a href="../about/about_team.html">Team</a></li>
<li><i class="icon icon-caret-right"></i> <a href="../about/about_careers.html">Careers</a></li>
<li><i class="icon icon-caret-right"></i> <a href="../about/about_privacy.html">Privacy Policy</a></li>
<li><i class="icon icon-caret-right"></i> <a href="../about/about_terms_of_use.html">Terms of use</a></li>
</ul>
</div>
<div class="col-md-2">
<h4>Extra Links</h4>
<ul class="list icons list-unstyled">
<li><i class="icon icon-caret-right"></i> <a href="http://www.tutorialspoint.com/forums/index.php">Forums</a></li>
<li><i class="icon icon-caret-right"></i> <a href="http://www.tutorialspoint.com/shorttutorials/">Articles</a></li>
<li><i class="icon icon-caret-right"></i> <a href="http://www.tutorialspoint.com/shared-tutorials.php">Shared</a></li>
<li><i class="icon icon-caret-right"></i> <a href="../seo_tools.html">Seo Tools</a></li>
<li><i class="icon icon-caret-right"></i> <a href="../about/contact_us.html">Contact</a></li>
</ul>
</div>
<div class="col-md-3">
<div class="contact-details">
<h4>Contact Us</h4>
<ul class="contact">
<li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> 388-A , Road no 22, Jubilee Hills, Hyderabad Telangana, INDIA-500033</p></li>
<li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="../about/contact_us.html">Click Here</a></p></li>
<li><p><i class="icon icon-dribbble"></i> <strong>Website:</strong> <a href="../index.html">www.tutorialspoint.com</a></p></li>
</ul>
</div>
<div class="social-icons">
<ul class="social-icons">
<li class="facebook"><a href="https://www.facebook.com/tutorialspointindia" target="_blank" data-placement="bottom" title="tutorialspoint @ Facebook">Facebook</a></li>
<li class="googleplus"><a href="https://plus.google.com/u/0/116678774017490391259/posts" target="_blank" data-placement="bottom" title="tutorialspoint @ Google+">Google+</a></li>
<li class="twitter"><a href="http://www.twitter.com/tutorialspoint" target="_blank" data-placement="bottom" title="tutorialspoint @ Twitter">Twitter</a></li>
<li class="rss"><a href="http://feeds.feedburner.com/SharedTutorials" target="_blank" data-placement="bottom" title="tutorialspoint RSS">RSS</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-1">
<a href="../index-2.html" class="logo">
<img alt="Tutorials Point" class="img-responsive" src="../scripts/img/logo-footer.png">
</a>
</div>
<div class="col-md-6">
<p>© Copyright 2015. All Rights Reserved.</p>
</div>
<div class="col-md-4">
<nav id="sub-menu">
<ul>
<li><a href="../about/tutorials_writing.html">Write for us</a></li>
<li><a href="../about/faq.html">FAQ's</a></li>
<li><a href="../about/about_helping.html">Helping</a></li>
<li><a href="../about/contact_us.html">Contact</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</footer>
<script src="../control/assets/js/jquery.js"></script>

   Bootstrap Core JavaScript
   <script src="../control/assets/js/bootstrap.min.js"></script>

</body>

</html> -->