<html> <!-- begins HTML code block --> 
<head> <!-- opens header -->
<link rel="icon" href="../Images/Rockets.jpg"> <!-- creates icon -->	
</head>	<!-- closes header -->
</html>	 <!-- ends HTML code block -->

<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$AstroName = Validate($_POST["AstroName"]);
$AstroMissions = $_POST["AstroMissions"];

$sql = "INSERT INTO astronaut(name, no_missions) VALUES ('$AstroName', $AstroMissions)";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data Inputed, ";
}

mysqli_close($connection);

echo '<a href = "../index.html">Return </a>' #return to index

#ends PHP code block 
?>
