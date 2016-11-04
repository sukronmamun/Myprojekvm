<?php 

function cek_string($d){
  $hasil = preg_replace('/[^a-z]/','', $d);
  if (is_string($hasil)) {
    $hasil = 'ya';
  }else{
    $hasil = 'no';
  }
}

function cek_num($d){
  $hasil = preg_replace('/[^0-9]/','', $d);
  if (is_string($hasil)) {
    $hasil = 'ya';
  }else{
    $hasil = 'no';

  }

}

function cek_kombinasi($d){
  $hasil = preg_replace('/[^a-zA-Z0-9]/','', $d);
  if (is_string($hasil)) {
    $hasil = 'ya';
  }else{
    $hasil = 'no';

  }
}


 ?>