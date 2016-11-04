
<?php
					$sekarang = sekarang();  
					    $newsq=mysql_query("SELECT * FROM seminar WHERE id_fakultas ='$fak' AND tanggal > '$sekarang'  ORDER BY tanggal ");
					    $chek = mysql_num_rows($newsq);
					    if ($chek > 0 ) {
					    
					    while ($hnewsq=mysql_fetch_array($newsq)) {
					    $newl = explode(" ", $hnewsq['tema']);
					    $newlink = implode("-", $newl);

			      ?>
        				
        				<div class="col-md-12" style="margin:1px 1px;border-left:10px solid #cb4b4b;border-bottom:1px solid #cb4b4b;border-top:1px solid #cb4b4b;padding:5px 0;">
        					
        					<div class="col-md-3" style="overflow:hidden"><img src="../control/assets/img/<?php echo $hnewsq['img'] ?>" style="width:100%;margin:10px 0;border-radius: 5px;" ></div>
							<div class="col-md-9">
								
								<div class="tema"><h2><?php echo $hnewsq['tema'] ?></h2></div>
								
								<div class="des"> <p style=" font-style: justify;"><?php echo $hnewsq['pembahasan'] ?></p></div>
								
								<b>Waktu :</b> <p><?php echo $hnewsq['tanggal'] ?></p>
								<div class="form-group">
								<div class="progress">
										  <div class="progress-bar progress-bar-success  progress-bar-striped" style="width: <?php echo (data_pendaftar($hnewsq['id_seminar'])*100)/$hnewsq['kuota'] ?>%">
										    <span class="sr-only">35% Complete (success)</span>
										  </div>
										  <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: <?php echo (data_boking($hnewsq['id_seminar'])*100)/$hnewsq['kuota']  ?>%">
										    <span class="sr-only">20% Complete (warning)</span>
										  </div>
										  <div class="progress-bar progress-bar-danger  progress-bar-striped" style="width: <?php echo (cekkuota($hnewsq['kuota'],$hnewsq['id_seminar'] )*100)/$hnewsq['kuota']  ?>%">
										    <span class="sr-only">10% Complete (danger)</span>
										  </div>
										</div>

										<div class="boking"><span class="simbol"></span> &nbsp;Sedang Boking &nbsp;:<?php echo data_pendaftar($hnewsq['id_seminar']) ?> // <?php echo (data_pendaftar($hnewsq['id_seminar'])*100)/$hnewsq['kuota'] ?>% </div>
										<div class="terdaftar"><span class="simbol"></span> &nbsp;Telah daftar&nbsp;: <?php echo data_boking($hnewsq['id_seminar']) ?>  //  <?php echo (data_boking($hnewsq['id_seminar'])*100)/$hnewsq['kuota']  ?>%</div>
										<div class="kosong"><span class="simbol"></span>&nbsp; Kursi Kosong&nbsp;:  <?php echo cekkuota($hnewsq['kuota'],$hnewsq['id_seminar'] )  ?>  // <?php echo (cekkuota($hnewsq['kuota'],$hnewsq['id_seminar'] )*100)/$hnewsq['kuota']  ?>%</div>
								</div>
								<div class="clear"></div>
									<a href="<?php echo ASSET_ROOT; ?>index.php?model=detile&res=<?php echo $newlink ?>" role="button" > <span class="btn btn-info ">Selanjutnya</span></a>
							
							
							
							</div>
        				
        				</div>

		        <?php }
		    		}else{
						
						

		    			require "tidak_ada_seminar.php";

					    }  ?>

<style>
.boking{
	float:left;
	background-color: #fff;
	border:1px solid #eee;
	width:200px;
	color: #5cb85c;
	padding: 3px 5px;
}
.terdaftar{
	float:left;
	background-color: #fff;
	border:1px solid #eee;
	width:200px;
	color: #f0ad4e;;
	padding: 3px 5px;
}
.kosong{
	float:left;
	background-color: #fff;
	border:1px solid #eee;
	width:200px;
	color: #d9534f;
	padding: 3px 5px;
}
.boking>.simbol{
	background-color: #5cb85c;
	padding: 0.1em 9px;
	border-radius: 100%;
}
.terdaftar>.simbol{
	background-color: #f0ad4e;
	padding: 0.1em 9px;
	border-radius: 100%;
}
.kosong>.simbol{
	background-color: #d9534f;
	padding: 0.1em 9px;
	border-radius: 100%;
}
.clear{
	padding-top: 10px;
	clear: both;
}

</style>