<?php
include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$name = mysql_real_escape_string($name);
$email = mysql_real_escape_string($email);
	
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

<html>
<body>
<div align="center">
	<h1>Sign up Success</h1>
	<h1><a href="http://localhost/Ted/contact_list.php">Go to contact</a></h1>
</div>
</body>
</html>