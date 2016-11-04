  <div id="myCarousel myheading" class="carousel slide" data-ride="carousel">
          <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
      

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill"><img src="control/images/2.jpg"   style="width:100%;background-size:cover"  alt=""></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            
        </div>

        <!-- Controls -->
      

    </header>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img" src="control/images/u1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Universitas Pamulang</h2>
          <p>Universitas Pamulang adalah sebuah perguruan tinggi swasta yang maju dan berkembang yang terdapat di Jalan Surya Kencana.</p>
          <p><a class="btn btn-default" href="http://www.unpam.ac.id" role="button">Menuju Website</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="control/images/u2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Cara menjalankan Aplikasi</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
          <img class="img-circle" src="control/images/tlp.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Scan Barcode</h2>
          <p>Dalam Proses kelola data siswa semianr, kami menggunakan tiket <i>QR-code</i> Untuk kemudahan dalam mengelola data tiket dari hasil pemindaian tiket semianr <i>QR-code</i> bilamana diadakannya  pengundian bagi peserta seminar</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="row">
        <?php 


        $nnn = mysql_query("SELECT nm_fakultas, id_fakultas FROM fakultas");
        
        while ( $hnn = mysql_fetch_array($nnn)) {
          $id_fakultass = $hnn['id_fakultas'];  

          $mmm = mysql_query("SELECT * FROM seminar WHERE id_fakultas = '$id_fakultass' AND tanggal = ( SELECT MAX(tanggal) AS tanggal FROM seminar WHERE id_fakultas = '$id_fakultass' ) ");
                 
                  while ( $hmm = mysql_fetch_array($mmm)) {
                    if ($hmm['tema'] != '') {
                       $ex = explode(" ", $hmm['tema']);
                       $link = implode("-", $ex); 
                    
                  ?>





                  <div class="col-sm-6 bg_c col-md-12">
        <div class="tema col-md-12">
          <h3 align="center"> <?php echo $hmm['tema'] ?></h3>
        </div>
        
        <div class="col-md-6">
            
           <div style="width:100%;height:50%; overflow:hidden;">          <img src="control/assets/img/<?php echo $hmm['img']; ?>" style="width:100%;margin-top:3%;border-radius:3px;overflow: hidden;border:3px solid #fff;" alt="..."></div>      

        </div>
        <div class="col-md-6 mm">  
          <div class="caption">
           <h4>Pembicara</h4>

             <div class="pembicara">
                <?php 
                $qpem=explode("#", $hmm['pembicara']);
                
                if (count($qpem) != 0) {
                     echo "<ol >";
                    foreach ($qpem as $key ) {
                      echo "<li>$key</li>";
                    }
                     echo "</ol>";
                  }
              ?>
             </div>
              
              <div class="pembahasan">
              <h4>Pembahasan</h4>
            <div class="pemisi">
                          <p><?php echo $hmm['tanggal'] ?></p>
                          <p><?php echo substr($hmm['pembahasan'], 0,200) ?>...~</p>
            </div>
            <div class="btnp">
                <?php 
                  if (@$_SESSION['id'] != NULL) {
                    ?>
                      <a href="mahasiswa/index.php?model=detile&res=<?php echo $link ?>" role="button"> <span class="but_1">Selengkapnya</span></a>
           <?php }else{ ?>
                    <a href="index.php?act=detile&q=<?php echo $link ?>" role="button"> <span class="but_1">Selengkapnya</span></a>
                 <?php } ?>
                
            </div>
            </div>
            </div>
        </div>
    </div>




                  <?php
              }
            }
        }
?>

      </div>

      <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->

