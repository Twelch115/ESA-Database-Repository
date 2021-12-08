<html> <!-- begins HTML code block --> 
<head> <!-- opens header -->
<title> Add an astronaut </title> <!-- Sets Page title -->	
<link rel="icon" href="../Images/Rockets.jpg"> <!-- creates icon -->	
</head>	<!-- closes header -->
</html>	 <!-- ends HTML code block -->

<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

echo '<a href = "../index.html"> Return <a> <br> <br>'; #link to return to index

$sql = "SELECT astronaut_id, name, no_missions FROM astronaut"; #select all columns from astronaut table
$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable

if (mysqli_num_rows($result) > 0) { #IF there is more than 0 rows of data in result
  
  while($row = mysqli_fetch_assoc($result)) { #WHILE there are unused rows in result, fetch them and put them into £row
    echo "<b> ID: </b>" . $row["astronaut_id"]. "<b> - Name: </b>" . $row["name"]. "<b> - Number of missions: </b>" . $row["no_missions"]. "<br>"; #pull each value from each row of $row, and add to echo
  }
} else { #else echo 
  echo "0 result";
}
  
mysqli_close($connection); #close connection
#ends PHP code block
?>
