<html>
<body>
	<?php
	include "connection.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	//Insert data
	$sql = "INSERT INTO signin(email, password)
	VALUE('$email', '$password')";

	if ($conn->query($sql) === TRUE) {
   		echo " ";
	} else {
   		echo "Error creating database: " . $conn->error;
	}

	$conn->close();
	?>

	<div align="center">
		<h1>Sign up Success</h1>
		<h1><a href="http://localhost/Ted/contact_list.php">Go to contact</a></h1>
	</div>
</body>
</html>