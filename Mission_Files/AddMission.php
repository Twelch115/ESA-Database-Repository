<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$MissName = Validate($_POST["MissName"]); #set data from form as variable
$MissDestination = Validate($_POST["MissDestination"]); #set data from form as variable
$MissDeparture = $_POST["MissDeparture"]; #set data from form as variable
$MissType = Validate($_POST["MissType"]); #set data from form as variable
$MissCrew = $_POST["MissCrew"]; #set data from form as variable
$MissTarget =  $_POST["MissTarget"]; #set data from form as variable

$sql = "INSERT INTO mission(name, destination, launch_date, type, crew_size, target_id) VALUES ('$MissName', '$MissDestination', $MissDeparture, '$MissType', $MissCrew, $MissTarget)"; 
# ^ create query to remove data from table at given id

if(!mysqli_query($connection, $sql)){ #IF the connection fails
	die("Error:".mysqli_error($connection)); #end code and print error message
}
else{ #ELSE
	echo "Data Inputed, "; #print success message
}

mysqli_close($connection); #ends connection with SQL database

echo '<a href = "../index.html">Return </a>' #return to infex

#ends PHP code block 
?>
