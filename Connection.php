<?php #starts the PHP code block
define ("DB_NAME", "ESA_Database");
define ("DB_USER", "admin");
define ("DB_PASSWORD", "backEND12345");
define ("DB_HOST", "localhost");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD); #attempts connection to the database portal (PHPmyadmin)

if(!$connection) { # IF connection fails
	die('couldn`t connect:'.mysqli_error()); #quit and print error message
}

$db_selected = mysqli_select_db($connection, DB_NAME); #attempts connection to specific database

if(!$db_selected) { #IF connection fails
	die('can`t use '.DB_NAME.':'.mysqli_error($connection)); #quit and print error message
}

#ends the PHP code block ?> 
