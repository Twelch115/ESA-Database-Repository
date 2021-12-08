<!DOCTYPE html> <!-- sets the type of code to be used in the document -->
<html> <!-- begins the HTML code block -->

<head> <!-- opens header tag -->
	<title> Add a Mission </title> <!-- Sets Page title -->
</head> <!-- closes header tag -->
<body>
<p> Input a new mission into the database </p> 
<a href = ../index.html> Cancel Addition </a> <br> <br> <!-- links back to the index page -->
<form action = "AddMission.php" method = "post"> <!-- starts the form, sets the action on submission and the method used -->
<label for="type" class="form-label">Mission Name:</label> <br> <!-- sets the description label -->	
<input type = "text" style = "width:250px;" name = "MissName"  minlength = "1" maxlength = "30" required> <br> <br> <!-- sets the name input box, with it's name, style and length -->
<label for="type" class="form-label">Mission Departure Date (DDMMYYYY):</label> <br> <!-- sets the description label -->	
<input type = "number" style = "width:250px;" name = "MissDeparture" min = "00000001" max = "99999999"> <br> <br> <!-- sets the departure date input box, with it's name and min/max values -->
<label for="type" class="form-label">Mission type:</label> <br> <!-- sets the description label -->	
<input type = "text" style = "width:250px;" name = "MissType" minlength = "1" maxlength = "30" required> <br> <br> <!-- sets the mission type input box, with it's name, style and length -->
<label for="type" class="form-label">Mission Crew size:</label> <br> <!-- sets the description label -->		
<input type = "number" style = "width:250px" name = "MissCrew" min = "1" required> <br> <br> <!-- sets the crew size input box, with it's name, style and min value -->	
<div class="mb-3">
    	<label for="type" class="form-label">Target ID:</label>
	<select id="target_id" name="target_id">
		<?php
		require '../Connection.php'; #the file will not run without Validation.PHP being linked
		require '../Validation.php'; #the file will not run without Validation.PHP being linked
		$sql = "SELECT * FROM targets"; #select all columns from astronaut table
		$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
		mysqli_close($connection);
		foreach ($result as $row ) {
		$thisValue = $row['target_id'];
		echo "<option  value= $thisValue >" . $thisValue . "</option>";
		}  
		?>
        </select> 
</div>	
<div class="mb-3">
    	<label for="type" class="form-label">Target ID:</label>
	<select id="target_id" name="target_id">
		<?php
		require '../Connection.php'; #the file will not run without Validation.PHP being linked
		require '../Validation.php'; #the file will not run without Validation.PHP being linked
		$sql = "SELECT * FROM targets"; #select all columns from astronaut table
		$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
		mysqli_close($connection);
		foreach ($result as $row ) {
		$thisValue = $row['target_id'];
		echo "<option  value= $thisValue >" . $thisValue . "</option>";
		}  
		?>
        </select> 
</div>
</body>
</html>
