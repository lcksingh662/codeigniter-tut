<?php

if(isset($_POST['continue'])){
	if(isset($_POST['fname'])){
		$fileName = $_POST['fname'];
		$arr=file($fileName) or die('ERROR: cannot open file');
		$count = 0;
		foreach($arr as $line){
			echo $line."<br>";
			$count = 1;
		}
		/*
		$itr = new ArrayIterator($arr);
		$itr -> rewind();
		echo "Iterator<br>";
		while($itr -> valid()){
			echo $itr -> current()."<br>";
			$itr -> next();
		}

		for($i = 0; $i < count($arr); $i++){
			echo $arr[$i]."<br>";
		}
		*/
	}
	else{
		echo 'Flie name do not exist';
	}
}
?>

<html>
<head>
<title>File Read</title>
</head>
<body>
<div class="main">

<h2>File Read</h2>
<form method="post">
  
  <div class="form-group">
  <label for="exampleFormControlInput1">Enter file name</label>
    <input type="text" name="fname" id="exampleFormControlInput1" placeholder="Filename">
  </div>
  
  <input type="submit" value="continue" name="continue"/>
  
  
</form>
</div>
</body>
</html>
