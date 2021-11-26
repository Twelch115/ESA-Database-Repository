<?php
define ("DB_NAME", "new");
define ("DB_USER", "root");
define ("DB_PASSWORD", "");
define ("DB_HOST", "localhost");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$connection) {
	die('couldn`t connect:'.mysqli_error());
}

$db_selected = mysqli_select_db($connection, DB_NAME);

if(!$db_selected) {
	die('can`t use '.DB_NAME.':'.mysqli_error($connection));
}

$firstname = $_POST["Forname"];
$secondname = $_POST["Surname"];
$age = $_POST["Age"];

$sql = "INSERT INTO demo_table(Forname, Surname, Age) VALUES ('$firstname','$secondname',$age)";

if(!mysqli_query($connection, $sql)){
	die("Error:".mysqli_error($connection));
}
else{
	echo "Data Inputed";
}

mysqli_close($connection);

?>