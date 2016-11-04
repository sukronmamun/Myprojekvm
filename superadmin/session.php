<?php 

session_start();
 $id_user = $_SESSION['id_user'];
 if ($id_user != "") {
    $id_user = $_SESSION['id_user'];
  $nama = $_SESSION['nama'];

    $mysq=mysql_query("SELECT * FROM user WHERE id_user ='$id_user' AND nama_dpn ='$nama' ");
    while ($hq = mysql_fetch_array($mysq)) {
      $idadm = $hq["id_user"];
      $nama = $hq["nama_dpn"]." ".$hq["nama_blk"];
      $email = $hq["email"];
      $tlp = $hq["kontak"];  
      $idfakultas = $hq['id_fakultas'];
      $fa=mysql_query("SELECT * FROM fakultas WHERE id_fakultas = '$idfakultas'");
      $hfa = mysql_fetch_array($fa);

        $nmfakultas = $hfa['nm_fakultas'];
    
    }


    function sekarang(){
        $jj = new DateTime( null, new DateTimeZone('Asia/Jakarta'));
        foreach ($jj as $key => $value) {
            if ($key == 'date') {
              $waktu = substr($value, 0,19);
            }
          }
        
        return $waktu;
      }
    function cekkuota($x,$y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    
    $kuota = ($x-($hm1+$hm));

    return $kuota;

  }


 }else{
  header('location:../index.php');
 }
 



 ?>