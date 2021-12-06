<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

echo '<a href = "../index.html"> Return <a> <br> <br>'; #link to return to index

$sql = "SELECT target_id, name, first_mission, type, no_missions FROM targets"; #select all columns from targets table
$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable

if (mysqli_num_rows($result) > 0) { #IF there is more than 0 rows of data in result
	
  while($row = mysqli_fetch_assoc($result)) { #WHILE there are unused rows in result, fetch them and put them into £row
    echo "<b> Target Name: </b>" . $row["name"]. "<b> - First Mission: </b>" . $row["first_mission"]. "<b> - Type: </b>" . $row["type"]. "<b> - Number of missions: </b>" . $row["no_missions"]. "<br>";
  } # ^ pull each value from each row of $row, and add to echo
} else { #else echo 
  echo "0 result";
}

mysqli_close($connection); #close connection
#ends PHP code block
?>