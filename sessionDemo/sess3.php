<?php
session_start();
?>
<html>
<body>

<?php
	session_destroy();
	echo 'Session destroyed';
?>

</body>
</html>