<?php 
define ("DB_NAME", "ESA_Database");
define ("DB_USER", "admin");
define ("DB_PASSWORD", "backEND12345");
define ("DB_HOST", "localhost");

function Validate(Data) {
	Data = trim(Data);
	Data = stripslashes(Data);
	Data = htmlspecialchars(Data);
	return Data 
}

Text = " \a the $*$% best \n"
echo "Valdiate(Text)";
?>