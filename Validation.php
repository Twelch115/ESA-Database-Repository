<?php #starts PHP code block
function Validate($Data) { #sets function name and paramiters
	$Data = trim($Data); #removes blank spaces from the given data
	$Data = stripslashes($Data); #removes \ from the given data
	$Data = htmlspecialchars($Data); #sets special characters to HTML compatable versions.
	return $Data; #returns paramater
}
echo "poggers";
#ends PHP code block ?>
