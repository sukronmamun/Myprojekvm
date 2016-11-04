
   
     <div class="content-section-a hm" >



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
	elseif ($act == 'validasi') {
		if (file_exists('validasi_data.php')) {
			require 'validasi_data.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'password') {
		if (file_exists('changePassword.php')) {
			require 'changePassword.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'undian') {
		if (file_exists('undian.php')) {
			require 'undian.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	elseif ($act == 'daftar') {
		if (file_exists('daftar.php')) {
			require 'daftar.php';
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
	}elseif ($act == 'seminar') {
		if (file_exists('seminar.php')) {
			require 'seminar.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}elseif ($act == 'data_detail') {
		if (file_exists('data_detail_peserta_seminar.php')) {
			require 'data_detail_peserta_seminar.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}elseif ($act == 'boking') {
		if (file_exists('data_boking.php')) {
			require 'data_boking.php';
		}else{
			include 'datatidakditemukan.php';
		}
	}
	else{
		include 'datatidakditemukan.php';
	}
}else{
	include 'home.php';
}


 ?>
</div>
