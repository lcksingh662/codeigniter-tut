<?php
session_start();
?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$_SESSION['favColor'] = 'Blue';
	$_SESSION['favAnimal'] = 'Dog';
	echo 'Session variables set';
	?>
	
</body>
</html>