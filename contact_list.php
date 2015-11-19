<html>
<body>
<div align="center">
<h1>Contact List</h1>
<?php

	$connection = mysql_connect('localhost', 'root', ''); 
	mysql_select_db('final_project');

	$query = "SELECT * FROM contacts"; 
	$result = mysql_query($query);
	
	echo "<table>"; 

	while($row = mysql_fetch_array($result)){   
	echo "<tr><td>" . $row['name'] . "</td><td></td><td></td><td></td><td>" . $row['email'] . "</td><td></td><td></td><td></td><td>" . $row['password'] . "</td></tr>";  
	}
	
	echo "</table>"; 

	mysql_close(); 

	?>
</div>
</body>
</html>