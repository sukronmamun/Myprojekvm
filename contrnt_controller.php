<?php 

$act = @mysql_real_escape_string($_GET['act']);

if ($act == 'fakultas') {
	if (file_exists('fakultas.php')) {
		require_once "fakultas.php";
	}else{
		$pesan = "";
	}

}elseif ($act == 'seminar') {
	
	if (file_exists('seminar.php')) {
		require_once "seminar.php";
	}else{
		$pesan = "";
	}

}elseif ($act == 'detile') {
	
	if (file_exists('detile.php')) {
		require_once "detile.php";
	}else{
		$pesan = "";
	}

}elseif ($act == 'info') {
	
	if (file_exists('fakultas.php')) {
		require_once "fakultas.php";
	}else{
		$pesan = "";
	}

}elseif ($act == 'login') {
	
	if (file_exists('login.php')) {
		require_once "login.php";
	}else{
		$pesan = "";
	}

}else{
	if (file_exists('body.php')) {
		require_once "body.php";
	}else{
		$pesan = "";
	}
}

 
 ?>