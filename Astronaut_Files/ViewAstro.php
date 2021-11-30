<?php #starts PHP code block

require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$Data = $sql = "SELECT * FROM `astronaut`"; #SQL statement to present all data in the astronaut table
echo $Data;
#ends PHP code block
?>
