<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="=UTF-8">
	<title>PHP Basics</title>
</head>

<body>
	<?php
		$arrayName = array('apple', 'banana', 'pear');

		for($i=0; $i<3; $i++) {
			echo "<p>";
			echo $arrayName[$i];
			echo "</p>";
		}
		include_once "phpobjects.php";
	?>
</body>

</html>