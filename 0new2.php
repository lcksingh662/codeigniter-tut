<?php

if(isset($_POST['save']))

{

	$f=$_POST['file'];

	$ext=$_POST['ext'];

	$data=$_POST['data'];

	$file=$f.$ext;

	if(file_exists($file))

	{

	echo "<font color='red'>file already exists</font>";

	}

	else

	{

	$fo = fopen($file,"w");

	fwrite($fo,$data);

	echo "your data is saved";

	}

}

?>

<form method="post">