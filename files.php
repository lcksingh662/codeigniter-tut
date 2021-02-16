<?php
//include "include/redirect.php";
if(isset($_POST['Read'])){
	header("Location:fileRead.php");
}
else if(isset($_POST['Write'])){
	header("Location:fileWrite.php");
}
?>

<html>
<head>
<title>Files Demo</title>
</head>
<body>
<div class="main">

<h2>File Read/Write</h2>

<div class="first">

<form id="#form" method="post" name="#form">
<input id='btn' name="Read" type='submit' value='Read'>
</form>
</div>

<div class="second">
<form id="#form" method="post" name="#form">
<input id='btn' name="Write" type='submit' value='Write'>
</form>
</div>
</div>
</body>
</html>
