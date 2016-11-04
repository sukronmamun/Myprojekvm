<!-- Carousel
    ================================================== -->     
    <!-- FOOTER -->
     

    </div>
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
                  <li><div class="con_f"><img class="img" src="control/icon/22.jpg" alt=""><div style="color:#fff">&nbsp;JL. Surya Kencana No.1 Pamulang Barat, Tangerang Selatan, Banten, 15417</div></div></li>
                  <li><div class="con_f"><img class="img" src="control/icon/23.jpg" alt=""><div style="color:#fff">&nbsp;Telp   : (021) 74709855</div></div></li>
                  <li><div class="con_f"><img class="img" src="control/icon/23.jpg" alt=""><div style="color:#fff">&nbsp;Fax    : (021) 7412566</div></div></li>
                  <li><div class="con_f"><img class="img" src="control/icon/24.jpg" alt=""><div style="color:#fff">&nbsp;info@unpam.ac.id</div></div></li>
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
                    <li><a href="index.php?act=detile&q=<?php echo $link; ?>" style="color:#fff"><img class="img" src="control/icon/25.jpg" alt=""><?php echo substr($hnq['tema'],0,30) ?></a></li>

                      <?php } ?>

                </ul>
              </div>
              
              </div>

              <div class="col-md-12 copy_r">
                <center><p class="copy">&copy; 2015 Sukron Ma'mun. </p></center> 
              </div>
            </div>
           </div>
    </footer>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="control/dist/js/bootstrap.min.js"></script>
    <script src="scriptw.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
   
  </body>
</html><!-- 
 -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " id="tentangkami" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " style="width:90%">
    <div class="modal-content">
      <div class="modal-header navbar-inverse">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title f_head" id="myModalLabel">Visi Dan Misi</h4>
      </div>
      <div class="modal-body">
<h2 class="f_head">Visi</h2>
<ul>
  <li>Bermutu dalam pengembangan pendidikan, penelitian, dan pengabdian terjangkau seluruh lapisan masyarakat, berlandaskan ridha tuhan yang maha esa.</li>
</ul>

<h2 class="f_head">Misi</h2>
<ul>
  <li>Menyelenggarakan pembelajaran keilmuan dan keterampilan, riset beriring pengabdian pada masyarakat yang berkualitas dengan mempertimbangkandaya jangkau semua kalangan.</li>
  <li>Melakukan kerjasama lintas lembaga menunjang sinerjitas dan motivasi kompetitif kajian dan implementasi Tri Darma Perguruan Tinggi.</li>
  <li>Mengintensifkan studi nilai-nilai dan norma-norma religiusitas terkait ketuhanan, peribadatan, akhlak mulia, keilmuan, dan kehidupan yang hasilnya diintegrasikan mengaura ke dalam mata kuliah secara relevan.</li>
  <li>Meningkatkan kualitas pelayanan menggapai tata kelola universitas modern pada tahun 2020.</li>
  <li>Menciptakan lulusan (Ahli Madya, Sarjana, Master, dan Doktor) profesional dalam kompetensinya, berjiwa mandiri dan berakhlak mulia yang dilandasi nilai dan norma keimanan dan ketakwaan kepada Tuhan Yang Maha Esa.</li>
</ul>
      </div>
      <div class="modal-footer navbar-inverse">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="kontak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " style="width:90%">
    <div class="modal-content">
      <div class="modal-header navbar-inverse">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title f_head" id="myModalLabel">Kontak Kami</h4>
      </div>
      <div class="modal-body">
                <ul style="list-style:none">
                  <li><img class="img" style="border-radius:5px;margin-top:5px;" src="control/icon/22.jpg" alt="">&nbsp;JL. Surya Kencana No.1 Pamulang Barat, Tangerang Selatan, Banten, 15417</li>
                  <li><img class="img" style="border-radius:5px;margin-top:5px;" src="control/icon/23.jpg" alt="">&nbsp;Telp   : (021) 74709855</li>
                  <li><img class="img" style="border-radius:5px;margin-top:5px;" src="control/icon/23.jpg" alt="">&nbsp;Fax    : (021) 7412566</li>
                  <li><img class="img" style="border-radius:5px;margin-top:5px;" src="control/icon/24.jpg" alt="">&nbsp;info@unpam.ac.id</li>
                </ul>
      </div>
      <div class="modal-footer navbar-inverse">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

