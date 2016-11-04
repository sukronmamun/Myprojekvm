<?php 

if (isset($_POST['simpan'])) {
	echo $_POST['hasil'];
}

 ?>



<center>
<div id="content_logo"><img src="../control/images/u1.jpg" /></div>
<div id="content">
	<p>Undian Berhadian UNIVERSITAS PAMULANG</p> 
	<p><?php echo strtoupper($namfak) ?></p>

<?php
//mysql_connect("localhost", "root", "master");

ini_set('memory_limit', '-1');

$id =  $_GET["res"];

$sqlCount = mysql_query("SELECT COUNT(id_pseminar) FROM pendaftaran WHERE id_seminar = '$id' ");
$count = mysql_result($sqlCount, 0);

$sqlData = mysql_query("SELECT id_mahasiswa FROM pendaftaran WHERE id_seminar = '$id'  ORDER BY RAND()");

while ($row = mysql_fetch_array($sqlData)){
	$arr[] = $row[0];
}

$arrs = '["' . implode('", "', $arr) . '"]';
?>



Jumlah Data : <?php echo $count; ?> Data
<p style="font-size:150px"><span id="timespan" ></span></p>

<div class="btn-group">
	<button id="submit" class="btn btn-default" onclick="countdown()">Mulai</button>
	<button id="submit" class="btn btn-default" onclick="cdpause()">Berhenti</button>

<form action="" method="POST">
	<input type="submit" id="m" style="margin-top:20px;" class="btn btn-primary" name="simpan" value="Simpan">
	<input type="hidden" id="tm" name="hasil" value="">	
	</form>


</div>

<script src="jquery.min.js"></script>
<script type="text/javascript">

	var t, count,xx;
	$('#tm').hide();
	$('#m').hide();

	

	function cddisplay() {
		document.getElementById('timespan').innerHTML = count;
	
		document.getElementById('tm').value = count;

	}
	
	function countdown() {
		// starts countdown
		cddisplay();
		if (acak === 0) {
			// time is up
		} else {
			var myArrs = <?php echo $arrs; ?>;
			acak--;
			count = myArrs[urut];
			urut++;
			if (urut == jumlah) urut = 0;
			t = setTimeout(countdown, 30);
		}
	}
	
	function cdpause() {
		// pauses countdown
		clearTimeout(t);
		$('#tm').show();
		$('#m').show();	

	}


	acak = 99999;
	urut = 0;
	count = <?php echo $count; ?>;
	jumlah = <?php echo $count; ?>;
	cddisplay();
</script>




</div>
</center>
<script language="javascript" src="jquery.min.js"></script>

