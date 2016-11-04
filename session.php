
<?php 



@session_start();
if (@$_SESSION['id'] != "") {
$idm = $_SESSION['id'];
$nam = $_SESSION['name']; 

$nav ="<li class='dropdown'>
<a href = '' class ='dropdown-toggle' data-toggle ='dropdown' role='button' aria-expanded='false'>$nam<span class='caret'></span></a>
  <ul class='dropdown-menu' role='menu'>
    <li><a href='mahasiswa/index.php'>Dasboard</a></li>   
    <li><a href='logout.php'>Logout</a></li>
  </ul>
</li>";

}elseif (@$_SESSION['idu'] != "") {
$idm = $_SESSION['idu'];
$nam = "Panitia"; 

$nav ="<li class='dropdown'>
<a href = '' class ='dropdown-toggle' data-toggle ='dropdown' role='button' aria-expanded='false'>$nam<span class='caret'></span></a>
  <ul class='dropdown-menu' role='menu'>
    <li><a href='administrator/index.php'>Dasboard</a></li>   
    <li><a href='logout.php'>Logout</a></li>
  </ul>
</li>";


}elseif (@$_SESSION['id_user'] != "") {
$idm = $_SESSION['id_user'];
$nam = "Ketua Panitia"; 

$nav ="<li class='dropdown'>
<a href = '' class ='dropdown-toggle' data-toggle ='dropdown' role='button' aria-expanded='false'>$nam<span class='caret'></span></a>
  <ul class='dropdown-menu' role='menu'>
    <li><a href='superadmin/index.php'>Dasboard</a></li>   
    <li><a href='logout.php'>Logout</a></li>
  </ul>
</li>";


}else{$nav='<li><a href="index.php?act=login">Login</a></li>';}
$e=mysql_query("SELECT * FROM fakultas"); 
$navbar="";
while ($ew=mysql_fetch_array($e)) {
						$fakultas1 = explode(" ", $ew['nm_fakultas']);
                        $link1 = implode("-", $fakultas1); 
	$navbar .= "<li><a href='index.php?act=fakultas&q=".$link1."'>$ew[nm_fakultas]</a></li>";

}



?>