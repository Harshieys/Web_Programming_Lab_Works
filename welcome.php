<?php
session_start();
$con=mysqli_connect("localhost","root","","harshdb");
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$id=$_COOKIE['id'];
$sql="select * from users where user_id=$id";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
	$row = mysqli_fetch_row($result);
	echo "<html>
<body>
Welcome $row[3]
</body>
</html>
";
}
?>


