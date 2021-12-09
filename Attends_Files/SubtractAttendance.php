<!DOCTYPE html> <!-- sets the type of code to be used in the document -->
<html> <!-- begins the HTML code block -->
  
<head> <!-- opens header tag -->
<title> Remove attendance </title> <!-- Sets Page title -->
<link rel="icon" href="../Images/Rockets.jpg"> <!-- creates icon -->
</head> <!-- closes header tag -->
<body> <!-- opens body tag -->
<p> Remove an astronauts attendance from the database </p> 
<a href = ../index.html> Cancel Removal <a> <br> <br> <!-- links back to the index page -->
<form action = "RemoveAttendance.php" method = "post"> <!-- starts the form, sets the action on submission and the method used -->
<div class="mb-3"> <!-- opens DIV -->
    <label for="type" class="form-label">Name of mission astronaut will be removed from:</label> <br> <!-- sets the description label -->
    <select name="AttName"> <!-- sets name of selection box -->
	  <?php
	  require '../Connection.php'; #the file will not run without Validation.PHP being linked
	  require '../Validation.php'; #the file will not run without Validation.PHP being linked    
	  $sql = "SELECT * FROM mission"; #select all columns from astronaut table
	  $result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
	  mysqli_close($connection); #ends SQL database connection
	  foreach ($result as $row ) { #for each row in $result
	  $thisValue = $row['name']; #set $ThisValue as current row
	  echo "<option value= $thisValue >" . $thisValue . "</option>"; #print row as option
	  }  
	  ?>
    </select> <!-- closes selection -->
</div> <br> <!-- closes DIV -->  
<input type = "submit" name = "AstroSubmit" value = "Submit removal"> <!-- sets the form submission box -->
</form>	 <!-- ends the form -->	
</body>
</html>
