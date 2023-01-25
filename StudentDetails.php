<html>
	<head>
		<title>PHP Program 3</title>
	</head>
	<body>
	<center>
	
	<form method="POST">
	
	<table>
	<tr>
		<td>
		Name:</td><td>
		<input type="text" name="sname">
		</td>
	</tr>
	<tr>
		<td>
		Date Of Birth:
		</td>
		<td>
		<input type="date" name="dob">
		</td>
	</tr>
	<tr>
		<td>
		Reg No:</td><td>
		<input type="text" name="regno">
		</td>
	</tr>
	<tr>
		<td>
		Mobile No:</td><td>
		<input type="number" name="mob">
		</td>
	</tr>
	<tr>
		<td>
		Email:</td><td>
		<input type="email" name="mail">
		</td>
	</tr>
	<tr>
		<td>
		<input type="submit" value="show">
		<input type="submit" value="clear">
		</td>
	<tr>
	</table>
	</form>
	</center>
	
	<?php
	if($_POST){
	
	$sname=$_POST["sname"];
	$dob=$_POST["dob"];
	$regno=$_POST["regno"];
	$mob=$_POST["mob"];
	$mail=$_POST["mail"];
	
	echo "<h1><u>Student Details</u></h1>";
	echo "<h3>Name:$sname</h3>";
	echo "<h3>DOB:$dob</h3>";
	echo "<h3>Reg No:$regno</h3>";
	echo "<h3>Mobile No::$mob</h3>";
	echo "<h3>Email:$mail</h3>";
	echo "<script>document.write('');</script>";
	}
	?>
	</body>
</html>
