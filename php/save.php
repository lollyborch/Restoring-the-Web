<?php
include_once("../base.php");
?>
<?php
	$html = $_POST['data'];
	$saveData = mysql_query("UPDATE restorations SET RestoredHTML = '$html' WHERE WebsiteID = '$_SESSION[webID]' AND UserID = '$_SESSION[userID]' AND CompID = '$_SESSION[componentID]';");
	$test = mysql_affected_rows();
	if ($test == 0) {
		$insertData = mysql_query("INSERT INTO `restorations` VALUES ('$_SESSION[webID]','$_SESSION[userID]','$_SESSION[componentID]','$html','someCSS');");
	}
	$styleCss = $_POST['cssData'];
//	$cssStyleFront = substr($styleCss,7);
	//$cssNoStyle = chop($styleCss,"</style>");
	$saveData = mysql_query("UPDATE restorations SET RestoredCSS = '$styleCss' WHERE WebsiteID = '$_SESSION[webID]' AND UserID = '$_SESSION[userID]' AND CompID = '$_SESSION[componentID]';");
?>
