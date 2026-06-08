<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Hello World</title>
</head>
<body>
	<p>Welcome to my homepage</p>
	<?php
		$today=date("F j, Y");
		$username="someUserName";
		$password="mySecretPass";
		echo "<p>Today is: $today</p>"
	?>
</body>
</html>