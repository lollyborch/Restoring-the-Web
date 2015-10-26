<?php
include_once("../base.php");
?>
<?php
	error_log("Something happened");
	$html = $_POST['data'];
	error_log($html);

	$saveData = mysql_query("UPDATE restorations SET RestoredHTML = '$html' WHERE WebsiteID = '1' AND UserID = '19' AND CompID = '1';")
?>
