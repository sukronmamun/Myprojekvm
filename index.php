

<?php 
include "control/database/adb.php";
mysql_query("DELETE FROM `boking` WHERE img = '' AND tgl_boking < NOW()");
include "session.php";
include "header.php";
// include "nav.php";
include "contrnt_controller.php";
include "footer.php";

 ?>