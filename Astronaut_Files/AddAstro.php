<?php #starts PHP code block
include 'Connection.php'; #the file will not run without Connection.PHP being linked
include 'Validation.php'; #the file will not run without Validation.PHP being linked


$AstroName = $_POST["AstroName"];
$AstroMissions = Validate($AstroMissions =  $_POST["AstroMissions"]);
$AstroID = $_POST["AstroID"];



$sql = "INSERT INTO astronaut(astronaut_id, name, no_missions) VALUES ($AstroID, '$AstroName', $AstroMissions)";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data Inputed";
}

mysqli_close($connection);

echo <a href = "../index.html"> Return </a> #return to infex

#ends PHP code block 
?>
