	<?php

		session_start();
	?>

	<!DOCTYPE html>
<html>
<head>
	<title>page title</title>
</head>

<body>
	<form action="prof..php" method = "POST" novalidate>
	<center>
	<h1>Login</h1>
	<fieldset style="width:300px">
			<legend>
			Account Information:
		</legend>


<table>
	<tr>
		<td><b><label for="Username">Username:</label></b></td>
		<td><input type="text" id="Username" name="Username" required=""> <br></td>
	</tr>
	<tr>
		<td><b><label for="Password">Password:</label></b></td>
		<td><input type="password" id="Password" name="Password" required=""> <br></td>
	</tr>
	
</table>

		</fieldset>
		</table>
	<button name="Login" value = "Register">Login</button>
	<table>
	<tr><td><td></tr>
	<tr><td><label>Don't have an account? Register </label><a href="RPLO.php">here</a><td></tr>
	</table>
	</form>
		</center>