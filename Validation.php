<?php #starts PHP code block
function Validate($Data) { #sets function name and paramiters
	echo $Data; <br>
	$Data = trim($Data); #removes blank spaces from the given data
	echo $Data; <br>
	$Data = stripslashes($Data); #removes \ from the given data
	echo $Data; <br>
	$Data = htmlspecialchars($Data); #sets special characters to HTML compatable versions.
	return $Data; #returns paramater
}

#ends PHP code block ?>
