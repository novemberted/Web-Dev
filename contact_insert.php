<html>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "final_project";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Insert data
	$sql = "INSERT INTO contacts(name, email, password)
	VALUE('$name', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
   		echo "Database created successfully";
	} else {
   		echo "Error creating database: " . $conn->error;
	}

	$conn->close();
	?>

	<div align="center">
		<h1>Create contact Success</h1>
		<h1><a href="http://localhost/Ted/contact_list.php">Go to contact</a></h1>
	</div>
</body>
</html>