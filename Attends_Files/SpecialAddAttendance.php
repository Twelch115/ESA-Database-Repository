<?php
echo " I am here";
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
            <?php
		require '../Validation.php'; #the file will not run without Validation.PHP being linked
		$result = mysqli_query($connection, "SELECT * FROM targets");
		print_r($result);
                foreach ($result as $row ) {
                $thisValue = $row['target_id'];
		echo $thisValue;
                echo "<option  value= $thisValue >" . $thisValue . "</option>";
                }  
		mysqli_close($connection);
            ?>
        </select>  
</div>
</body>
</html>
