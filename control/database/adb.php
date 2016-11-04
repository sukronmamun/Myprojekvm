<!--'a'=>'mysql.idhostinger.com','b'=>'u110386667_usem','c'=>'useminar','d'=>'u110386667_usem'-->

<?php $data=array('a'=>'localhost','b'=>'root','c'=>'','d'=>'mytiket');
function connection($data){
	$z=mysql_connect($data['a'],$data['b'],$data['c']);
	if ($z) {
		$xmy=mysql_select_db($data['d']);
		if (!$xmy) {
			$mes="Maaf Terjadi kesalahan";
		}
}else{
	$mes="Maaf Terjadi kesalahan";}
}connection($data);?>