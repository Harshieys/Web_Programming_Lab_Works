<html>
	<head>
		<title>Calc</title>
	</head>
	<body>
	<form method="POST">
	<h1>Calculator</h1>
	<label>Value 1</label>
		<input type="number" name="num1"><br><br>
	<label>Value 2</label>
		<input type="number" name="num2"><br><br>
		
	<input type="submit" value="+" name="add">
	<input type="submit" value="-" name="sub">
	<input type="submit" value="*" name="mul">
	<input type="submit" value="/" name="divi">
	</form>
	
	<?php
	if($_POST){
	$v1=$_POST["num1"];
	$v2=$_POST["num2"];
	
	$a=$v1+$v2;
	$b=$v1-$v2;
	$c=$v1*$v2;
	$d=$v1/$v2;
	
	if($_POST["add"]){
		echo"$v1+$v2=$a";
		break;
	}
	else if($_POST["sub"]){
		echo"$v1-$v2=$b";
		break;
	}
	else if($_POST["mul"]){
		echo"$v1*$v2=$c";
	}
	else if($_POST["divi"]){
		echo"$v1/$v2=$d";
	}
	
	}
		
	?>
</body>
</html>
