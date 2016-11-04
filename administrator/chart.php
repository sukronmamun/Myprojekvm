<?php

header('Content-Type: image/jpeg') or die("Tidak suport");

$bidang =imagecreate(500, 500) ;
imagecolorallocate($bidang, 224, 225, 225);
$warna_garis = imagecolorallocate($bidang, 0, 0, 0);
$isi_warna = imagecolorallocate($bidang, 0, 206,209);
$kordinat = array(0,0,100,150,300,150);

imageellipse($bidang, 100, 300, 100, 100, $isi_warna);
imagefilledpolygon($bidang, $kordinat, 3,$isi_warna);
imagepolygon($bidang, $kordinat, 3,$warna_garis);


imagejpeg($bidang);

// Free up memory
imagedestroy($bidang);
?>
