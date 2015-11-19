<html>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "final_project";
	$tbname = "contacts";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);
	$sql="IF EXIST (SELECT * FROM $tbname WHERE email='$email' and password='$password')";
	$result=mysql_query($sql);
	if($count = TRUE){
    	session_start();
    	$_SESSION['loggedin'] = true;
    	$_SESSION['email'] = $email;
	}
	?>
	
	<div align="center">
		<h1>Create contact Success</h1>
		<h1><a href="http://localhost/Ted/contact_list.php">Go to contact</a></h1>
	</div>

</body>
</html>