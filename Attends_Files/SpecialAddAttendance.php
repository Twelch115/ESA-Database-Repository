<?php
echo "hello";
require '../Connection.php'; #the file will not run without Validation.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked
echo "hello2";
$sql = "SELECT * FROM targets"; #select all columns from astronaut table
$result = mysqli_query($connection, $sql); #place connection and sql into a query in result variable
print_r($result);



// $result = mysqli_query($connection, "SELECT * FROM targets");
// 	print_r($result);
// 	mysqli_close($connection);
//                 foreach ($result as $row ) {
//                 $thisValue = $row['target_id'];
// 		echo $thisValue;
//                 echo "<option  value= $thisValue >" . $thisValue . "</option>";
//                 }  
?>

<!DOCTYPE html> <!-- sets the type of code to be used in the document -->
<html> <!-- begins the HTML code block -->

<head> <!-- opens header tag -->
	<title> Add an Attendance </title> <!-- Sets Page title -->
</head> <!-- closes header tag -->
<body>
<div class="mb-3">
    <label for="type" class="form-label">Target ID:</label>
	<select id="target_id" name="target_id">
        </select> 
</div>
</body>
</html>
