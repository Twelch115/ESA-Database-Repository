<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$TarName = Validate($_POST["TarName"]); #set data from form as variable
$TarFirstDate = $_POST["TarFirst"]; #set data from form as variable
$TarType = Validate($_POST["TarType"]); #set data from form as variable
$TarMissions = $_POST["TarMissions"]; #set data from form as variable

$sql = "INSERT INTO targets(name, first_mission, type, no_missions) VALUES ('$TarName', '$TarFirst', '$TarType', $TarMissions)"; # create query to remove data from table at given id
 
if(!mysqli_query($connection, $sql)){ #IF the connection fails
	die("Error:".mysqli_error($connection)); #end code and print error message
}
else{ #ELSE
	echo "Data Inputed, " ; #print success message
}

mysqli_close($connection); #ends connection with SQL database

echo '<a href = "../index.html">Return </a>' #return to index

#ends PHP code block 
?>
