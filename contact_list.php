<?php

	$connection = mysql_connect('localhost', 'root', ''); 
	mysql_select_db('final_project');

	$query = "SELECT name, email FROM contacts"; 
	$result = mysql_query($query);
	 
	$contact = "";

	while($row = mysql_fetch_array($result)){
	$name = $row['name'];
	$email = $row['email'];  
	$contact .= "<tr><td>". $name . "</td><td></td><td></td>";
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
		<h1><a href="http://localhost/Ted/contact_create.php">Create a new contact</a></h1>
	</div>
</body>
</html>