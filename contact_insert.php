<html>
<body>
	<?php
	include "connection.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = mysql_real_escape_string($name);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);

	//Insert data
	$sql = "INSERT INTO contacts(name, email, password)
	VALUE('$name', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
   		echo "Database created successfully";
	} else {
   		echo "Error creating database: " . $conn->error;
	}

	$conn->close();
	header("Location: contact_list.php");
	?>
</body>
</html>