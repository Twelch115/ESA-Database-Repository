<?php 
function Validate(Data) {
	Data = trim(Data);
	Data = stripslashes(Data);
	Data = htmlspecialchars(Data);
	return Data 
}

Text = " \a the $*$% best \n"
echo "Valdiate(Text)";
?>
