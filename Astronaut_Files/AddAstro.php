<?php #starts PHP code block

require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked


$AstroName = $_POST["AstroName"];
$AstroMissions =  $_POST["AstroMissions"];
$AstroID = $_POST["AstroID"];


$sql = "INSERT INTO astronaut(astronaut_id, name, no_missions) VALUES ($AstroID, '$AstroName', $AstroMissions)";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data Inputed";
}

mysqli_close($connection);

#ends PHP code block 
?>
