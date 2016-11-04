<?php 

if (isset($_GET['res'])) {
	$tema = explode("-", $_GET['res']);
  echo $tems = implode(" ", $tema);


}

 ?>