<?php #starts PHP code block
require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

echo '<a href + "../index.html"> Return </a>; 

$sql = "SELECT astronaut_id, name, no_missions FROM astronauts";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["astronaut_id"]. " - Name: " . $row["name"]. "Number of missions: " . $row["no_missions"]. "<br>";
  }
} else {
  echo "0 results";
}
  
mysqli_close($conn);
#ends PHP code block
?>
