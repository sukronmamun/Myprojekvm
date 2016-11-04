
     <div class="content-section-a hm" >

        <div class="container">

<?php 

if (isset($_GET['model'])) {
	$act=mysql_real_escape_string($_GET['model']);
	if ($act == 'editacc') {
		if (file_exists('editprofiel.php')) {
			require 'editprofiel.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'password') {
		if (file_exists('ubahpassword.php')) {
			require 'ubahpassword.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'data') {
		if (file_exists('dataseminar.php')) {
			require 'dataseminar.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'pesan') {
		if (file_exists('pesanseminar.php')) {
			require 'pesanseminar.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}elseif ($act == 'pesantiket') {
		if (file_exists('pesantiket.php')) {
			require 'pesantiket.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	
	elseif ($act == 'dafseminar') {
		if (file_exists('daftarsemianr.php')) {
			require 'daftarsemianr.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'detile') {
		if (file_exists('detile_controller.php')) {
			require 'detile_controller.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}else{
		include 'datatidakditemukan.php';
	}
}else{
	include 'home.php';
}


 ?>
 </div></div>