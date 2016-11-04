<?php 
include '../../control/database/adb.php';

if (isset($_POST['act'])) {	
	echo $email=$_POST['email'];
	echo $password=md5($_POST['pass']); 
	$sql1 = mysql_query("SELECT * from user where email = '$email' AND password = '$password' AND id_jabatan = '1' ");
	if (mysql_num_rows($sql1) == 1) {
		$ad=mysql_fetch_array($sql1);
		
		session_start();

		$_SESSION['id_user'] = $ad['id_user'];
		$_SESSION['nama'] = $ad['nama_dpn'];

		header("location:../../superadmin/index.php");	
	
	}

}else{
	header("location:../index.php");
}

/*elseif (isset($_POST['regis'])) {
		session_start();
	if ($_SESSION["Captcha"] == $_POST['nilaiCaptcha']) {
		if (strlen($_POST['pass']) >= 6) {
			if (($_POST['nim'] != "" ) &&($_POST['name'] != "" ) && ($_POST['semester'] != "") &&($_POST['email'] != "") &&($_POST['kelas'] != "") &&($_POST['kontak'] != "") &&($_POST['pass'] != "") &&($_POST['pass1'] != "") ){
			$chek = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$_POST[nim]' OR email = '$_POST[email]' ");
				if (mysql_num_rows($chek) == 0) {
					if ($_POST['pass'] == $_POST['pass1']) {
						$sql=mysql_query("INSERT INTO mahasiswa VALUES('$_POST[nim]','$_POST[shift]','$_POST[fakultas]','$_POST[name]','$_POST[semester]','$_POST[jk]','$_POST[kelas]','$_POST[kontak]','$_POST[email]',md5('$_POST[pass]'),now(),now())");
						if ($sql) {
						header("location:../login.php");
						}else{header("location:../registrasi.php?error=salah");}
					}else{header("location:../registrasi.php?error=samepassword");}
				}else{header("location:../registrasi.php?error=tersedia");}
			}else{header("location:../registrasi.php?error=kosong");}
		}else{header("location:../registrasi.php?error=minimum");}
	}else{header("location:../registrasi.php?error=captcha");}
		

	

}*/

/*
			

*/

 ?>

<!--INSERT INTO `mahasiswa`(`id_mahasiswa`, `id_shift`, `id_fakultas`, `namalengkap`, `semester`, `jk`, `kelas`, `kontak`, `email`, `password`, `created_at`, `updated_at`) VALUES ('2011142146','1','4','Ahmad Sukron','9','lk','9D','0881194519','ahmadsukron@gmail.com',md5('sukron'),now(),now())  -->