<?php 
session_start();
    
if( isset($_SESSION['idu'])){

    $idu = $_SESSION['idu'];
    $fak=$_SESSION['fakultas'];
    $namfak = $_SESSION['nm_fakultas'];

      $qa = mysql_query("SELECT * FROM user WHERE id_user = '$idu' AND id_fakultas = '$fak' ");
      $identitas = mysql_fetch_array($qa);
      $nam = $identitas['nama_dpn']." ".$identitas['nama_blk']; 
      $id_user = $identitas['id_user']; 

      //get data sekarang

      function sekarang(){
        $jj = new DateTime( null, new DateTimeZone('Asia/Jakarta'));
        foreach ($jj as $key => $value) {
            if ($key == 'date') {
              $waktu = substr($value, 0,19);
            }
          }
        
        return $waktu;
      }


      //get data Besok
      function besok(){
        $jj = new DateTime( null, new DateTimeZone('Asia/Jakarta'));
        foreach ($jj as $key => $value) {
          if ($key == 'date') {
            $besok = date('Y-m-d', strtotime('+1 day'));
            $jam = substr($value, 10,9);
          }
        }
        
        return $besok.$jam;
        }

  function cekkuota($x,$y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    $kuota = ($x-($hm1+$hm));
    return $kuota;
  }
  
  function data_pendaftar($y){
    $m1 = mysql_query("SELECT * FROM pendaftaran WHERE id_seminar ='$y'");
    $hm1=mysql_num_rows($m1);
    return $hm1;
  }

   function data_boking($y){
    $m=mysql_query("SELECT * FROM boking WHERE id_seminar ='$y'");
    $hm=mysql_num_rows($m);
    return $hm;
  }



}else{
  header("location:../index.php");
}
define('ASSET_ROOT',
    'http://'.$_SERVER['HTTP_HOST']. 
    str_replace($_SERVER['DOCUMENT_ROOT'], 
    '',
    str_replace('\\', '/', dirname(__DIR__).'/'.'administrator/')
    ));

 ?>