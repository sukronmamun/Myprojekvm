<?php 


if (isset($_GET['q'])) {
  $tema = explode("-", $_GET['q']);
  $tems = implode(" ", $tema);

$qcs1=mysql_query("SELECT * FROM fakultas WHERE nm_fakultas = '$tems'   ");

$hnn=mysql_fetch_array($qcs1);
$id_fakultas=$hnn['id_fakultas'];

  $qcs = mysql_query("SELECT * FROM identitas WHERE id_fakultas = '$id_fakultas' ");
  $hqcs=mysql_fetch_array($qcs)
  ?>
  
    <div class="container">
    <br><br>
    <div class="col-md-12">
      <div class="col-md-10 col-md-offset-1">
        
        <a href="#" class="thumbnail">
          <img src="control/assets/img/<?php echo $hnn['img'];  ?>" alt="">
        </a>

        <div class="thumbnail">
          <h3 align="center"><?php echo $hnn['nm_fakultas']; ?></h3>
         
             <h4>&nbsp;&nbsp;Visi</h4>
            <p><?php echo $hqcs['visi'] ?></p>
             
          <div class="caption">
          
          <h4>Misi</h4>
          <div class="misi">
                <?php 
                echo $hqcs['misi'];
              ?>
             </div>
            
           
            
                    <div class="btn btn-group">
                    <a href="index.php" class="btn btn-default" >Kembali</a>   
                    </div>
              
  
          </div>
        </div>


          
      


      </div>
    </div> 
    </div>

<?php }   ?>