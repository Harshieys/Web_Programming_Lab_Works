<html>
	<head>
		<title>PHP Program 1</title>
	</head>
	<body>
	<form method="POST">
	Enter Number:
	<input type="number" name="num">
	<input type="submit" value="show">
	
	</form>
	<?php
	if($_POST){
		$n=$_POST["num"];
		$sum=0;
		$t=$n;
		while($t!=0){
			$r=$t%10;
			$sum=$sum+($r*$r*$r);
			$t=$t/10;
		}
		if($sum==$n){
			echo"$n is an Armstrong Number.";
		}
		else{
			echo"$n is not an Armstrong Number.";
		}
	}
	?>
	</body>
</html>
