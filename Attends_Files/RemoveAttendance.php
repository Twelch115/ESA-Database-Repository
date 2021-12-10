<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$AttName = Validate($_POST["AttName"]); #set data from form as variable
$AttId = $_POST["AttId"]; #set data from form as variable

$sql = "DELETE FROM attends WHERE mission_name = '$AttName' AND astronaut_id = $AttId"; # create query to remove data from table at given id

$sql_get_astro = mysqli_query($connection,"SELECT no_missions FROM astronaut WHERE astronaut_id = $AttId"); #create query to select all data from table relating to ID
$result = mysqli_fetch_assoc($sql_get_astro); #perform above query and set result as $result
$new_no_missions = $result['no_missions'] - 1; #set $new_no_missions as result minus one
mysqli_query($connection, "UPDATE astronaut SET no_missions = $new_no_missions WHERE astronaut_id =  $AttId "); #update mission number in table

$sql_get_miss = mysqli_query($connection, "SELECT crew_size FROM mission WHERE name = '$AttName'"); #create query to select all data from table at given name
$results = mysqli_fetch_assoc($sql_get_miss); #perform above query and set result as $results
$new_no_crew = $results['crew_size'] - 1; #set $new_no_crew as results minus one
mysqli_query($connection, "UPDATE mission SET crew_size = $new_no_crew WHERE name = '$AttName'"); #update crew size in table

if(!mysqli_query($connection, $sql)){ #IF the connection fails
	die("Error:".mysqli_error($connection)); #end code and print error message
}
else{ #ELSE
	echo "Data removed, "; #print success message
}

mysqli_close($connection); #ends connection with SQL database

echo '<a href = "../index.html">Return </a>' #return to index

#ends PHP code block 
?>
