<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

echo '<a href = "../index.html"> Return <a> <br> <br>'; #link to return to index

$sql = "SELECT mission_name, astronaut_id FROM attends"; #select all columns from targets table
$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable

if (mysqli_num_rows($result) > 0) { #IF there is more than 0 rows of data in result
	
  while($row = mysqli_fetch_assoc($result)) { #WHILE there are unused rows in result, fetch them and put them into £row
    echo "<b> Mission Name: </b>" . $row["mission_name"]. "<b> - Astronauts ID: </b>" . $row["astronaut_id"]. "<br>";
  } # ^ pull each value from each row of $row, and add to echo
} else { #else echo 
  echo "0 result";
}

mysqli_close($connection); #close connection
#ends PHP code block
?>