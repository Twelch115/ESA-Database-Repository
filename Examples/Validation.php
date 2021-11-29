<?php 
function Validate($Data) {
	$Data = trim($Data);
	$Data = stripslashes($Data);
	$Data = htmlspecialchars($Data);
	return $Data;
}


$myData = "This is some <b>bold</b> text.";
echo htmlspecialchars($myData);

Validate($myData);
echo $myData;
?>
