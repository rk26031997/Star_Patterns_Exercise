<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testing_The_Code</title>
</head>
<body>

	<?php 
		$n=30;
	for($i=1;$i<=$n;$i++){
	for($j=1;$j<=(2*$n)-1;$j++){
		if($j>=$n-($i-1) && $j<=$n+($i-1)){
			echo "*";
		}else{
			echo "&nbsp&nbsp";
			//remove spave between & and nbsp
		}
	}
	echo "</br>";
}
	
	 ?>

</body>
</html>