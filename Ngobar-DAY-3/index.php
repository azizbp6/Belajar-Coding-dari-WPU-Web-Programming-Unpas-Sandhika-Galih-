<!DOCTYPE html>
<html>

<body>

<h2>Test HTML dan PHP</h2>

<form action="addData.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
<br>
<table style="width:100%" border="2">
<thead>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
	</tr>
</thead> 
<tbody>
<?php
	include "connection.php";
	$query = "SELECT id, first_name, last_name FROM latihan3";
	$select = mysqli_query($conn, $query) or die (). mysqli_error($select);
	/* var_dump(mysqli_fetch_array($select)); */
		
	while (($data = mysqli_fetch_assoc($select)))			
		{

?>		
	<tr>
		<td><?php echo $data['id'];?></td>
		<td><?php echo $data['first_name'];?></td>
		<td><?php echo $data['last_name'];?></td>
	</tr> 
<?php  } ?>			
			
</tbody>
	
	
</table>
</body>
</html>