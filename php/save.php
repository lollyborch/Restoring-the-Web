<?php
include_once("../base.php");
?>
<?php
	$html = $_POST['data'];
	$saveData = mysql_query("UPDATE restorations SET RestoredHTML = '$html' WHERE WebsiteID = '$_SESSION[webID]' AND UserID = '19' AND CompID = '$_SESSION[componentID]';");
?>
