<?php 
7_2011142160.jpe

if (isset($_POST['regis'])) {
	$tema_seminar= $_POST['tema'];
	$ex = explode(" ", $tema_seminar);
	$link = implode("-", $ex);

	if ($_POST['nilaiCaptcha'] === $_SESSION['Captcha']) {
		$id_seminar = $_POST['id_seminar'];
		$id_mahasiswa = $_POST['id_mahasiswa'];
		$nama = $_POST['nama'];
		$semester = $_POST['semester'];
		$kontak = $_POST['kontak'];
		$kelas = $_POST['kelas'];

		$cek =  mysql_query("SELECT count(*) AS total FROM boking WHERE id_seminar = '$id_seminar' AND id_mahasiswa = '$id_mahasiswa' ");
		$r = count($cek);
		
		
		$rand = rand(00000,$id_mahasiswa);
			$hrand = $id_mahasiswa.$rand;
			$m = substr($hrand, 6,8);
			$date = date('Y-m-d H:i:s');


		$cek1 = mysql_query("SELECT kode_boking FROM boking WHERE kode_boking = '$hrand' ");	
		$hcek1 = mysql_num_rows($cek1);

		if ($hcek1 > 0) {
			$rand = rand(00000,$id_mahasiswa);
			$hrand = $id_mahasiswa .= $rand;
			$m = substr($hrand, 6,8);
		}else{
			

			$mm = mysql_query("INSERT INTO boking (id_boking,id_seminar, kode_boking, id_mahasiswa, tgl_boking) VALUES ('','$id_seminar','$m','$id_mahasiswa','$date')");
			if ($mm) {
				header('location:?model=data');
			}else{
				
			}
		}
	}else{
		echo "string";
	}
}

?>