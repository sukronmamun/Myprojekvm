<?php 


if (isset($_GET['q'])) {
	$tema = explode("-", $_GET['q']);
  $tems = implode(" ", $tema);

  function cekkuota($x,$y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    $kuota = ($x-($hm1+$hm));
    return $kuota;
  }

$qcs=mysql_query("SELECT * FROM seminar WHERE tema LIKE '$tems'   ");

while ($hqcs=mysql_fetch_array($qcs)) { 
  $ex = explode(" ", $hqcs['tema']);
  $link = implode("-", $ex);
  $id_sif = $hqcs['id_shift'];
  ?>
  
    <div class="container">
    <br><br>
    <div class="col-md-12">
      <div class="col-md-10 col-md-offset-1">
        
        <a href="#" class="thumbnail">
          <img src="control/assets/img/<?php echo $hqcs['img'] ?>" alt="">
        </a>

        <div class="thumbnail">
          <h3 align="center"><?php echo $hqcs['tema'] ?></h3>
         
          <div class="caption">
           <h4>Pembicara</h4>
             <div class="pembicara">
                <?php 
                $qpem=explode("#", $hqcs['pembicara']);
                if (count($qpem) != 0) {
                     echo "<ol class='olme'>";
                    foreach ($qpem as $key ) {
                      echo "<li>$key</li>";
                    }
                     echo "</ol>";
                  }
              ?>
             </div>
             <h4>Pembahasan</h4>
            <p><?php echo $hqcs['pembahasan'] ?></p>
             <div class="col-md-12">
              <div class="col-md-4 con-detile">
              <div class="con-group">
                <h4><span class="glyphicon glyphicon-tags">&nbsp;</span>Biaya</h4>
                <p style="font-size:1.3em">Rp.<?php echo number_format($hqcs['biaya'],2) ?></p> 
              </div>    
              </div>


             <div class="col-md-4 con-detile">
              <div class="con-group">
               <h4><span class="glyphicon glyphicon-user">&nbsp;</span>Sisa Kuota</h4>
                <p style="font-size:1.3em"><?php echo cekkuota($hqcs['kuota'],$hqcs['id_seminar']) ?> Peserta</p>
              </div>
             </div>
             
              <div class="col-md-4 con-detile">
              <div class="con-group">
               <h4><span class="glyphicon glyphicon-time">&nbsp;</span>Pelaksanaan</h4>
               <p style="font-size:1.3em"><?php echo "Tanggal : ".substr($hqcs['tanggal'], 0,10)."<br>";echo "Jam : ".substr($hqcs['tanggal'], 10);?></p>
              </div>
               </div>
             </div>

            
           
            
                    <div class="btn btn-group">
                    <a href="index.php" class="btn btn-default" >Kembali</a>   
                    </div>
              
  
          </div>
        </div>


          
      


      </div>
    </div> 
    </div>

<?php } }  ?>