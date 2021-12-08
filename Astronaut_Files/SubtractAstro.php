<!DOCTYPE html> <!-- sets the type of code to be used in the document -->
<html> <!-- begins the HTML code block -->
  
<head> <!-- opens header tag -->
<title> Add an astronaut </title> <!-- Sets Page title -->
<link rel="icon" href="../Images/Rockets.jpg"> <!-- creates icon -->
</head> <!-- closes header tag -->
<body> <!-- opens body tag -->
<p> Remove an astronaut from the database </p> 
<a href = ../index.html> Cancel Removal <a> <br> <br> <!-- links back to the index page -->
<form action = "RemoveAstro.php" method = "post"> <!-- starts the form, sets the action on submission and the method used -->
<div class="mb-3"> <!-- opens DIV -->
    <label for="type" class="form-label">ID of astronaut to be removed:</label> <br> <!-- sets the description label -->
    <select name="AstroID"> <!-- sets name of selection box -->
	<?php
	$sql = "SELECT * FROM astronaut"; #select all columns from astronaut table
	$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
	mysqli_close($connection); #ends SQL database connection
	foreach ($result as $row ) { #for each row in $result
	$thisValue = $row['astronaut_id']; #set $ThisValue as current row
	echo "<option value= $thisValue >" . $thisValue . "</option>"; #print row as option
	}  
	?>
    </select> <!-- closes selection -->
</div> <br> <!-- closes DIV -->  
<input type = "submit" name = "AstroSubmit" value = "Submit removal"> <!-- sets the form submission box -->
</form>	 <!-- ends the form -->	
</body>
</html>
