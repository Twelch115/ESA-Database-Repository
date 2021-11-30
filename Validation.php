<?php #starts PHP code block
function Validate($Data) { #sets function name and paramiters
	echo $Data;
	$Data = trim($Data); #removes blank spaces from the given data
	echo $Data;
	$Data = stripslashes($Data); #removes \ from the given data
	echo $Data;
	$Data = htmlspecialchars($Data); #sets special characters to HTML compatable versions.
	return $Data; #returns paramater
}

#ends PHP code block ?>
