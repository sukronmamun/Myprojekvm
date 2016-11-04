            <div class="row">

              <div id="navv" class="col-md-12 seminar-nav" >
                 <ul >
                          <li><a href="index.php?model=seminar&m=seminar" >Seminar</a></li>
                          <li><a href="index.php?model=seminar&m=peserta" >Peserta Seminar</a></li>
                  </ul>
              </div>
              <button class="m btn btn-default" onclick="auto()"><span class="glyphicon glyphicon-triangle-top x" aria-hidden="true"></span></button>

              <div class="netral"></div>
              <div class="col-md-12">

               <?php 
               $m = @$_GET['m'];
               if ($m == 'peserta' ) { ?>
                  <br><br>  
                  <div class="container">
                    <div id="peserta"><?php require "data_peserta_seminar.php"; ?></div>
                  </div>
               
               <?php }elseif ($m == 'seminar' ) {?>
               <br><br>
               <div class="container">
                   <div id="seminar"><?php require "data_seminar.php"; ?></div>
              </div>
               <?php }else{?>
               <br><br>
               <div class="container">
                   <div id="seminar"><?php require "data_seminar.php"; ?></div>
              </div>
               <?php } ?>
              </div>


            </div>
            <script type="text/javascript">
                 function auto(){
                  $('#navv').slideToggle();
                    }

            </script>
