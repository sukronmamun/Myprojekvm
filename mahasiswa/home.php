
<?php 
if ($fak != 0) {
$qcs=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' AND  id_shift = '$shf' OR id_shift ='4' ");
while ($hqcs=mysql_fetch_array($qcs)) {
$ex = explode(" ", $hqcs['tema']);
$link = implode("-", $ex);
  ?>

  <div class="col-sm-6 bg_c col-md-12">
        <div class="tema col-md-12">
            <h3 align="center" ><?php echo $hqcs['tema'] ?></h3>
          </div>
        <div class=" col-md-6" style="height:300px;">
          <img src="../control/assets/img/<?php echo $hqcs['img'] ?>" style="width:100%;margin-top:3%;border-radius:3px;overflow: hidden;padding-bottom:30px;" alt="...">
        </div>
        <div class="  col-md-6">
          
          <div class="caption">
           <h4>Pembicara</h4>
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
             </div>
              <hr>
            <div class="pembahasan">
              <h4>Pembahasan</h4>
            <div class="pemisi">
                          <p><?php echo $hqcs['pembahasan'] ?></p>
            </div>
            <div class="btnp">
                <a href="index.php?model=detile&res=<?php echo $link ?>" role="button"> <span class="but_1">Selanjutnya</span></a>
            </div>
            </div>
            </div>
          </div>
     
    </div>
    <?php } }else{

$qcs=mysql_query("SELECT * FROM seminar ");
while ($hqcs=mysql_fetch_array($qcs)) {
$ex = explode(" ", $hqcs['tema']);
$link = implode("-", $ex);   ?>

  <div class="col-sm-6 bg_c col-md-12">
        <div class="tema col-md-12">
            <h3 align="center" ><?php echo $hqcs['tema'] ?></h3>
          </div>
        <div class=" col-md-6" style="height:300px;">
          <img src="../control/assets/img/<?php $hqcs[img] ?>" style="width:100%;margin-top:3%;border-radius:3px;overflow: hidden;border:3px solid #fff;" alt="...">
        </div>
        <div class="  col-md-6">
          
          <div class="caption">
           <h4>Pembicara</h4>
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
             </div>
              <hr>
            <div class="pembahasan">
              <h4>Pembahasan</h4>
            <div class="pemisi">
                          <p><?php echo $hqcs['pembahasan'] ?></p>
            </div>
            <div class="btnp">
                <a href="index.php?model=detile&res=<?php echo $link ?>" role="button"> <span class="but_1">Selanjutnya</span></a>
            </div>
            </div>
            </div>
          </div>
     
    </div>
    <?php } }  ?>

    </div><!-- /container -->