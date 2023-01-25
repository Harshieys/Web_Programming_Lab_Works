<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="styles/WB_style.css">
</head>
<body>
<form method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter Email" name="fname" id="fname" required>
    
    <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Email" name="lname" id="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="WBLogin.php">Login</a>.</p>
  </div>
</form>

<?php
include "dbconnection.php";

if($_POST){
	
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$pass=$_POST["pass"];
	$mail=$_POST["email"];


	$sql = "INSERT INTO WBLog(firstname, lastname, email, pass)
	VALUES ('$fname', '$lname', '$mail', '$pass');";

	if ($conn->query($sql) === TRUE) {

	echo "New profile created successfully<br>";
	} else {
	echo "Error: <br>" . $conn->error;
	}


	$conn->close();
	
}
?>

</body>
</html>
