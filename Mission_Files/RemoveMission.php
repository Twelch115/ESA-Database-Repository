<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$MissName = Validate($_POST["MissName"]); #set data from form as variable

$sql = "DELETE FROM mission WHERE name = '$MissName'"; # create query to remove data from table at given id

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
