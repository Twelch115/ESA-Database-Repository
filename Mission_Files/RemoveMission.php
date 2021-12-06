<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$MissName = Validate($_POST["MissName"]);

$sql = "DELETE FROM mission WHERE name = '$MissName'";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data removed,";
}

mysqli_close($connection);

echo '<a href = "../index.html"> Return </a>' #return to infex

#ends PHP code block 
?>