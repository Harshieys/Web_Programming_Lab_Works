<html>
	<head>
		<title>PHP Program 2</title>
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
		
		if($v%2==0){
		
			echo "$v is a even number.";
		}
		else echo "$v is odd number.";
	}
	?>
	</body>
</html>
