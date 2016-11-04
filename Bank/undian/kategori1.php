<?php
//mysql_connect("localhost", "root", "master");
mysql_connect("localhost", "root", "");
mysql_select_db("mytiket");
ini_set('memory_limit', '-1');

$id =  $_GET["res"];

$sqlCount = mysql_query("SELECT COUNT(id_pseminar) FROM pendaftaran  ");
$count = mysql_result($sqlCount, 0);

$sqlData = mysql_query("SELECT id_pseminar FROM pendaftaran  ORDER BY RAND()");

while ($row = mysql_fetch_array($sqlData)){
	$arr[] = $row[0];
}

$arrs = '["' . implode('", "', $arr) . '"]';
?>

<?php 
if (isset($_POST['simpan'])) {
	echo $_POST['hah'];
} ?>

<?php print_r($arrs); ?>
Jumlah Data : <?php echo $count; ?> Data
<p style="font-size:150px"><span id="timespan" ></span></p>

<input type="submit" id="submit" value="Start" onclick="countdown()">
<input type="submit" id="submit" value="Stop" onclick="cdpause()">
<span id="tm"></span>


<script src="jquery.min.js"></script>
<script type="text/javascript">

	var t, count,xx;
	$('#tm').hide();	
	

	function cddisplay() {
		document.getElementById('timespan').innerHTML = count;
	
		document.getElementById('tm').innerHTML = count;

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
			t = setTimeout(countdown, 200);
		}
	}
	
	function cdpause() {
		// pauses countdown
		clearTimeout(t);
		$('#tm').show();	

	}


	acak = 99999;
	urut = 0;
	count = <?php echo $count; ?>;
	jumlah = <?php echo $count; ?>;
	cddisplay();
</script>

