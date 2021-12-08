<html> <!-- begins HTML code block --> 
<head> <!-- opens header -->
<title> Add an astronaut </title> <!-- Sets Page title -->
<link rel="icon" href="../Images/Rockets.jpg"> <!-- creates icon -->	
</head>	<!-- closes header -->
</html>	 <!-- ends HTML code block -->

<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$AstroID = $_POST["AstroID"];

$sql = "DELETE FROM astronaut WHERE astronaut_id='$AstroID'";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data removed, ";
}

mysqli_close($connection);

echo '<a href = "../index.html">Return </a>' #return to infex

#ends PHP code block 
?>
