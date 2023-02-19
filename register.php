<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
if (empty($_POST['fname'])) {$_SESSION['msg'] = "fill out first name";}
if (empty($_POST['lname'])) {$_SESSION['msg2'] = "fill out last name";}
if (empty($_POST['fathersname'])) {$_SESSION['msg3'] = "fill out fathers name";}
if (empty($_POST['mothersname'])) {$_SESSION['msg4'] = "fill out mothers name";}
if (!isset($_POST['male']) or !isset($_POST['female']) ) {$_SESSION['msg5'] = "fill out  gender";}
if (!isset($_POST['bg'])) {$_SESSION['msg6'] = "fill out bloodgroup";}
if (empty($_POST['Email'])) {$_SESSION['msg7'] = "fill out email";}
if (empty($_POST['Phone/Mobile'])) {$_SESSION['msg8'] = "fill out Phone/Mobile";}
if (empty($_POST['Website'])) {$_SESSION['msg9'] = "fill out Website";}
if (empty($_POST['Presentaddress'])) {$_SESSION['msg10'] = "fill out Presentaddress";}
if (empty($_POST['Username'])) {$_SESSION['msg11'] = "fill out Username";}
if (empty($_POST['Password'])) {$_SESSION['msg12'] = "fill out Password";}
if (empty($_POST['fname'])) {$_SESSION['msg13'] = "fill out first name";}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>page title</title>
</head>

<body>
	<form action="REGISTER.php" method = "POST" novalidate>
	<center>
	</table>
		
			<h1>Registration Page</h1>
		<table>	
			<td>
		<fieldset style="width:300px">
			<legend>
			General Information:
		</legend>
		<table>
			<tr>
		<td><b><label for="fname">First name:</label></b></td>
		<td><input type="text" id="fname" name="fname" required=""> <br><?php if (isset($_SESSION['msg'])) {echo $_SESSION['msg'];} ?></td>
		
		</tr>
		<tr>
		<td><b><label for="lname">Last name:</label></b></td>
		<td><input type="text" id="lname" name="lname" required=""> <br><?php if (isset($_SESSION['msg2'])) {echo $_SESSION['msg2'];} ?></td>
		</tr>
		<tr>
		<td><b><label for="fathersname">Fathers Name:</label></b></td>
		<td><input type="text" id="fathersname" name="fathersname" required=""> <br><?php if (isset($_SESSION['msg3'])) {echo $_SESSION['msg3'];} ?></td>
		</tr>
		<tr>
		<td><b><label for="mothersname">Mothers Name:</label></b></td>
		<td><input type="text" id="mothersname" name="mothersname" required=""><?php if (isset($_SESSION['msg4'])) {echo $_SESSION['msg4'];} ?></td>
		
		
		<tr>
		<td><b>Gender: </b></td>
		<td><input type="radio" id="male" name="Gender" value="male">
			<label for="male">Male</label>
		
			<input type="radio" id="female" name="Gender" value="female">
			<label for="female">Female</label><?php if (isset($_SESSION['msg5'])) {echo "  " . $_SESSION['msg5'];} ?></td>
		</tr>
			
<tr>
			<td><b>Date of Birth:</b></td>
			<td><input type="Date" id="Date" name="Date" required=""></td>
		</tr>

<tr>
<td><b>Blood Group:</b></td>
<td><select id="bg">
	<option value="" id = "bg">null</option><option>
	<option value="apos" id = "bg">A+</option><option>
		<option value="aneg">A-</option><option>
			<option value="bpos">B+</option><option>
				<option value="aneg">B-</option><option>
					<option value="abpos">AB+</option><option>
						<option value="abneg">AB-</option><option>
							<option value="Opos">O+</option><option>
								<option value="Oneg">O-</option><option><?php if (isset($_SESSION['msg6'])) {echo $_SESSION['msg6'];} ?></td>
								</tr>
		
</div>
			</table>
				</fieldset>
	</td>
	<br>
	<tr>
	<td>
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
		<td><b><label for="Phone/Mobile">Phone/Mobile:</label></b></td>
		<td><input type="text" id="Phone/Mobile" name="Phone/Mobile" required=""> <br><?php if (isset($_SESSION['msg8'])) {echo $_SESSION['msg8'];} ?></td>
	</tr>
	<tr>
		<td><b><label for="Website">Website:</label></b></td>
		<td><input type="text" id="Website" name="Website" required=""> <br><?php if (isset($_SESSION['msg9'])) {echo $_SESSION['msg9'];} ?></td>
	</tr>
	<tr>
		<td><b><label for="Presentaddress">Present Address:</label></b></td>
		<td><textarea type="text" id="Presentaddress" name="Presentaddress" required=""></textarea><?php if (isset($_SESSION['msg10'])) {echo $_SESSION['msg10'];} ?></td>
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