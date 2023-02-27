
<?php 
session_start();
/*
if (isset($_SESSION['msg'])) {echo $_SESSION['msg'];}
if (isset($_SESSION['msg7'])) {echo $_SESSION['msg7'];}
if (isset($_SESSION['msg11'])) {echo $_SESSION['msg11'];}
if (isset($_SESSION['msg12'])) {echo $_SESSION['msg12'];}

*/

?>






<!DOCTYPE html>
<html>
<head>
	<title>page title</title>
</head>

<body>
	<form action="prof..php" method = "POST" novalidate>
	<center>
	</table>
		
			<h1>Registration Page</h1>
	
		<fieldset style="width:300px">
			<legend>
			Contact Information:
		</legend>


<table>
	<tr>
		<td><b><label for="Email">Email:</label></b></td>
		<td><input type="text" id="Email" name="Email" required=""> <br><?php if (isset($_SESSION['msg7'])) {echo $_SESSION['msg7'];} ?></td>
	</tr>
	<tr>
		<td><b><label for="fname">First Name:</label></b></td>
		<td><input type="text" id="fname" name="fname" required=""> <br><?php if (isset($_SESSION['msg'])) {echo $_SESSION['msg'];} ?></td>
	</tr>
	</table>

		</fieldset>
	</td>
</tr>
<tr>

	<td>
		<fieldset style="width:300px">
			<legend>
			Account Information:
		</legend>


<table>
	<tr>
		<td><b><label for="Username">Username:</label></b></td>
		<td><input type="text" id="Username" name="Username" required=""> <br><?php if (isset($_SESSION['msg11'])) {echo $_SESSION['msg11'];} ?></td>
	</tr>
	<tr>
		<td><b><label for="Password">Password:</label></b></td>
		<td><input type="password" id="Password" name="Password" required=""> <br><?php if (isset($_SESSION['msg12'])) {echo $_SESSION['msg12'];} ?></td>
	</tr>
	
</table>

		</fieldset>
	</td>

</tr>

	</table>
	<button name="Register" value = "Register">Register</button>
	<table>
	<tr><td><td></tr>
	<tr><td><label>Already have an account? Login </label><a href="Login.html">here</a><td></tr>
	</table>
</form>
	</center>