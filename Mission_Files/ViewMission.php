<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

echo '<a href = "../index.html"> Return <a> <br> <br>'; #link to return to index

$sql = "SELECT name, destination, launch_date, type, crew_size, target_id FROM mission"; #select all columns from missions table
$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable

if (mysqli_num_rows($result) > 0) { #IF there is more than 0 rows of data in result
	
  while($row = mysqli_fetch_assoc($result)) { #WHILE there are unused rows in result, fetch them and put them into £row
    echo "<b> Mission Name: </b>" . $row["name"]. "<b> - Destination: </b>" . $row["destination"]. "<b> - Launch Date: </b>" . $row["launch_date"]. "<b> - Type: </b>" . $row["type"]. "<b> - Crew Size: </b>" . $row["crew_size"]. "<b> - Target ID: </b>" . $row["target_id"]. "<br>";
  } # ^ pull each value from each row of $row, and add to echo
} else { #else echo 
  echo "0 result";
}

mysqli_close($connection); #close connection
#ends PHP code block
?>