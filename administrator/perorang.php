              <div class='from-area' style="margin-top:50px;padding-bottom:90px;padding-left:5px;padding-right:5px;">
              <form action='index.php?model=data' method="POST" >
              

              <div class='form-group '>
                    <label for=''>Tema Seminar</label><br>
                    <select name='seminar' class='form-control'>
                   <?php 
                   $shift = mysql_query("SELECT seminar.id_seminar AS id ,seminar.tema AS tema FROM seminar,user WHERE seminar.id_fakultas = user.id_fakultas AND user.id_fakultas = '$fak' GROUP BY seminar.tema");
                   		
                   		while($hshift=mysql_fetch_array($shift)){
                   			echo "<option value='".$hshift['id']."'>".$hshift['tema']."</option>" ;
                   		}
                    ?>
           			</select>
                    
              </div>

                <div class='form-group'>
                    <label for=''>Kode Boking</label><br>
                    <input type='text' class='form-control' placeholder='Masukkan Kode Boking' name='kd_boking' style='float:left;width:170px; margin:5px; '>
                
               <input type="submit" style='float:right; margin:5px; margin-right:14%;' class='btn btn-primary ' name="pero" value="Selanjutnya">   
              </div>
              </form></div>