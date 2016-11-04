<div class='col-md-12 from-area' style=" padding-bottom:80px;">
              <form action='' method="POST">
               <div class='form-group' style="">
                    <label for=''>Tema Seminar</label><br>
                    <select name='id_seminar' class='form-control ' >
	                   <?php 
	                   $shift = mysql_query("SELECT seminar.id_seminar AS id ,seminar.tema AS tema FROM seminar,user WHERE seminar.id_fakultas = user.id_fakultas AND user.id_fakultas = '3' GROUP BY seminar.tema");
	                   		while($hshift=mysql_fetch_array($shift)){
	                   			echo "<option value='".$hshift['id']."'>".$hshift['tema']."</option>" ;
	                   		}
	                    ?>
           			</select>  
              </div>
                <div class='form-group'>
                    <label for=''>Data Kelas</label><br>
                    <input type='text' class='form-control ' name='kelas' placeholder='Kelas' style='float:left; width:100px;margin-top:10px;'>   
                    <input type='text' class='form-control ' name='smester' placeholder='Semester' style='float:left;margin-left:5px; width:100px;margin-top:10px;'> 
                    <button name='perk' style='float:left;margin-left:5px; margin-top:10px;' class='btn btn-primary'>Cari</button> 
              </div>
 </form></div>