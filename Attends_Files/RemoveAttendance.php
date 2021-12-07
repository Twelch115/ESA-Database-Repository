<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$AttName = Validate($_POST["AttName"]);
$AttId = $_POST["AttId"];

$sql = "DELETE FROM attends WHERE mission_name = '$AttName' AND astronaut_id = $AttId";

$sql_get_astro = mysqli_query($connection,"SELECT no_missions FROM astronaut WHERE astronaut_id = $AttId");
$result = mysqli_fetch_assoc($sql_get_astro);
$new_no_missions = $result['no_missions'] - 1;
mysqli_query($connection, "UPDATE astronaut SET no_missions = $new_no_missions WHERE astronaut_id =  $AttId ");

$sql_get_miss = mysqli_query($connection, "SELECT crew_size FROM mission WHERE name = '$AttName'");
$results = mysqli_fetch_assoc($sql_get_miss);
$new_no_crew = $results['crew_size'] - 1;
mysqli_query($connection, "UPDATE mission SET crew_size = $new_no_crew WHERE name = '$AttName'");

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
