<?php

	$connection = mysql_connect('localhost', 'root', ''); 
	mysql_select_db('final_project');

	$query = "SELECT `id`, `name`, `email` FROM `contacts`"; 
	$result = mysql_query($query);
	 
	$contact = "";

	while($row = mysql_fetch_array($result)){
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];  
	$contact .= "<tr><td>". $id . "</td><td></td><td></td>";
	$contact .= "<td>". $name . "</td><td></td><td></td>";
	$contact .= "<td>". $email . "</td></tr>";   
	}

	mysql_close(); 

	?>

<html>
<body>
	<div align="center">
	<h1>Contact List</h1>
	<div align="center">
	<?php
		echo "<table>";
		echo $contact; 
		echo "</table>";
	?>
		<p>
		<h3><a href="http://localhost/Ted/contact_create.php">Create</a></h3>
		<h3><a href="http://localhost/Ted/contact_edit.html">Edit</a></h3>
		<h3><a href="http://localhost/Ted/contact_delete.html">Delete</a></h3>
	</p>
	
</body>
</html>