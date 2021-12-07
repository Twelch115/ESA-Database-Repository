<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$MissName = Validate($_POST["MissName"]);
$MissDestination = Validate($_POST["MissDestination"]);
$MissDeparture = $_POST["MissDeparture"];
$MissType = Validate($_POST["MissType"]);
$MissCrew = $_POST["MissCrew"];
$MissTarget =  $_POST["MissTarget"];

$sql = "INSERT INTO mission(name, destination, launch_date, type, crew_size, target_id) VALUES ('$MissName', '$MissDestination', $MissDeparture, '$MissType', $MissCrew, $MissTarget)"; 

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data Inputed, ";
}

mysqli_close($connection);

echo '<a href = "../index.html">Return </a>' #return to infex

#ends PHP code block 
?>
