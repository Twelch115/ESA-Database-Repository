<!DOCTYPE html> <!-- sets the type of code to be used in the document -->
<html> <!-- begins the HTML code block -->

<head> <!-- opens header tag -->
	<title> Add an Attendance </title> <!-- Sets Page title -->
</head> <!-- closes header tag -->
<body>
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
