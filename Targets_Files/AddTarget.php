<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$TarName = Validate($_POST["TarName"]);
$TarFirstDate = $_POST["TarFirstDate"];
$TarType = Validate($_POST["TarType"]);
$TarMissions = $_POST["TarMissions"];

$sql = "INSERT INTO targets(name, first_mission, type, no_missions) VALUES ('$TarName', $TarFirstDate, '$TarType', $TarMissions)";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data Inputed, " ;
}

mysqli_close($connection);

echo '<a href = "../index.html">Return </a>' #return to index

#ends PHP code block 
?>
