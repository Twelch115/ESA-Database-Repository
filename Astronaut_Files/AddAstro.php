<?php #starts PHP code block

require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$AstroName = $_POST["AstroName"]
$AstroMissions =  $_POST["AstroMissions"]

$sql = "INSTERT INTO astronaut(name, no_missions) VALUES ('$AstroName', $AstroMissions)";



#ends PHP code block ?>
