<!DOCTYPE html>
<html>
<body>
	<div align="center">
		<h1>Welcome to Ted's Website</h1>
		<h3>Sign in</h3>

		<form action = "login_check.php" method = "post" >
			E-mail: <input type="text" name="email"><p>
			Password: <input type="password" name="password"><p>
			<input type="submit" name="commit" value="Login">
		</form>
	</div>
	
	
	<div align="center">
		<h3>Sign up</h3>

		<form action = "contact_insert.php" method = "post" >
			Name: <input type = "text" name = "name"><p>
			E-mail: <input type="text" name="email"><p>
			Password: <input type="password" name="password"><p>
			<input type="submit">
		</form>
	</div>


</body>
</html>

