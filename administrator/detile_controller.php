
<?php 

if (isset($_GET['res'])) {
	$tema = explode("-", $_GET['res']);
  $tems = implode(" ", $tema);



  

	$qcs=mysql_query("SELECT * FROM seminar WHERE tema LIKE '%$tems%'   ");
  $hqcs=mysql_fetch_array($qcs); 
  $ex = explode(" ", $hqcs['tema']);
  $link = implode("-", $ex);
  ?>
 <?php 
      if (@$pesan) {
            echo $pesan;
           }
  ?>
  <div class="col-sd-12">
       
        <h3 align="center"><?php echo $hqcs['tema'] ?></h3>
        <div class="col-md-12">
          
           <div class="col-md-9">
           
             <img src="../control/assets/img/banner-bg.jpg" alt="..." width="100%">
            </div>
           
           <div class="col-md-3">
          
    
                  <div class="con-group-detail">

                    <div class="biaya">
                      <h4><span class="glyphicon glyphicon-tags">&nbsp;</span>Biaya</h4>
                      <div class="content-detail">
                       <p>Rp.<?php echo number_format($hqcs['biaya'],2) ?></p> 
                      </div>
                    </div>
                    
                    <div class="kuota">
                      <h4><span class="glyphicon glyphicon-user">&nbsp;</span>Kuota</h4>
                      <div class="content-detail">
                       <p><?php echo cekkuota($hqcs['kuota'],$hqcs['id_seminar']) ?> Peserta</p>
                      </div>
                    </div>
                    
                     <div class="pelaksanaan">
                       <h4><span class="glyphicon glyphicon-time">&nbsp;</span>Pelaksanaan</h4>
                       <div class="content-detail">
                       <p><?php echo "Tanggal : ".substr($hqcs['tanggal'], 0,10)."<br>";echo "Jam : ".substr($hqcs['tanggal'], 10);?></p>
                      </div>
                     </div>

                 </div>    



           </div>
        
        </div>
     
          <div class="col-md-12 pem">           
          <div style="Background-color:#00d4d1;padding:10px; margin:2px; 0"> 
             <h4 style="background-color:#00d4d1">Pembicara</h4>
             <div class="pembicara">
                <?php 
                $qpem=explode("#", $hqcs['pembicara']);
                if (count($qpem) != 0) {
                     echo "<ol>";
                    foreach ($qpem as $key ) {
                      echo "<li>$key</li>";
                    }
                     echo "</ol>";
                  }
              ?>
             </div></div>

          <div style="background-color: #00d4d1;padding:10px; margin:2px; 0"> 
              <h4  style="background-color:#00d4d1">Pembahasan</h4>
              <p style="font-style:justify"><?php echo $hqcs['pembahasan'] ?></p>
          </div>
          </div>

                    <div class="btn btn-group">
                        <a href="index.php?model=seminar" class="btn btn-default" >Kembali</a> 
                        <a href="index.php?model=seminar&m=peserta&cari=<?php echo $hqcs['id_seminar']; ?>" class="btn btn-default">Data Peserta</a>  
                    </div>
    </div>


<?php }  ?>


<style type="text/css">
.biaya,.kuota,.pelaksanaan {
  padding: 10px ;
  font-size: 12px;
  background-color: #00d4d1;
  margin:1px 1px;
}

</style>