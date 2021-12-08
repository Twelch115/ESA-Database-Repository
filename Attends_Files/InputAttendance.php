<!DOCTYPE html> <!-- sets the type of code to be used in the document -->
<html> <!-- begins the HTML code block -->
<head> <!-- opens header tag -->
<title> Add an Attendance </title> <!-- Sets Page title -->
</head> <!-- closes header tag -->

<body>
<p> Input a new attendance into the database </p> 
<a href = ../index.html> Cancel Addition </a> <br> <br> <!-- links back to the index page -->
<div class="mb-3"> <!-- opens DIV -->
    	<label for="type" class="form-label">Name of Mission:</label> <br>
	<select name="AttName">
		<?php
		require '../Connection.php'; #the file will not run without Validation.PHP being linked
		require '../Validation.php'; #the file will not run without Validation.PHP being linked
		$sql = "SELECT * FROM mission"; #select all columns from astronaut table
		$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
		foreach ($result as $row ) {
		$thisValue = $row['name'];
		echo "<option  value= $thisValue >" . $thisValue . "</option>";
		}  
		?>
        </select> 
</div> <br> <!-- closes DIV -->
<div class="mb-3"> <!-- opens DIV -->
    	<label for="type" class="form-label">ID of Attending Astronaut:</label> <br>
	<select name="AttId">
		<?php
		$sql = "SELECT * FROM astronaut"; #select all columns from astronaut table
		$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
		mysqli_close($connection); #ends SQL database connection
		foreach ($result as $row ) {
		$thisValue = $row['astronaut_id'];
		echo "<option  value= $thisValue >" . $thisValue . "</option>";
		}  
		?>
        </select> 
</div> <br> <!-- closes DIV -->
<input type = "submit" name = "AttSubmit" value = "Submit addition"> <!-- sets the form submission box -->
</form>	 <!-- ends the form -->	
</body>
</html>
