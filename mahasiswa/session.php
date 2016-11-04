<?php 
include '../control/database/adb.php';
mysql_query("DELETE FROM `boking` WHERE img = '' AND tgl_boking < NOW()");


session_start();

if (isset($_SESSION['name']) || isset($_SESSION['id'])) {

$idm = $_SESSION['id'];
$nam = $_SESSION['name']; 
$qa = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$idm' ");
$identitas = mysql_fetch_array($qa);
$naml = $identitas['namalengkap'];
$fak = $identitas['id_fakultas'];
$shf = $identitas['id_shift'];
$smstr = $identitas['semester'];
$kontak = $identitas['kontak'];
$kls = $identitas['kelas'];


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
  }/*
  function ceknum($a){
     $b = ;
    if (is_numeric($b)) {
        return "yes";
      }elseif ($b == "") {
        return "null";
      }else{
        return "no";
      }
  }*/
  function cekchar($a){
    $b = preg_replace('/[a-zA-Z]/', '', $a);
      if (is_string($b)) {
        return "yes";
      }else{
        return "no";
      }
  }


}else{
  header("location:../index.php");
}


 ?>