<div class="container">
    <?php 
    $qcs=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' ORDER BY id_seminar DESC ");
    while ($hqcs=mysql_fetch_array($qcs)) {
    $ex = explode(" ", $hqcs['tema']);
    $link = implode("-", $ex);

      ?>

      <div class="col-sm-6 col-md-4">
            <div class="thumbnail bg_c">
              <h3 align="center"><?php echo $hqcs['tema'] ?></h3>
              <div class="content1">
                  <img src="../control/assets/img/<?php echo $hqcs['img'] ?>" alt="...">
              </div>
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
                    <a href="index.php?model=detile&res=<?php echo $link ?>" role="button"> <span class="but_1">Lanjut Baca</span></a>
                </div>
                </div>
              </div>
            </div>
        </div>
        <?php }  ?>
</div>