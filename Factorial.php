<html>
	<head>
		<title>PHP Program 1</title>
	</head>
	<body>
	
	<form method="POST">
	Enter Value:
	<input type="number" name="num">
	<input type="submit" value="show">
	</form>
	
	<?php
	if($_POST){
	
		$v=$_POST["num"];
		$fact=1;
		
		for($i=1;$i<=$v;$i++){
		
			$fact=$fact*$i;
		}
		echo "Factorial of $v is $fact.";
	}
	?>
	</body>
</html>
