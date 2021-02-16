<?php

if(isset($_POST['save'])){
	$fname = $_POST['file'];
	$ext = $_POST['exten'];
	$content = $_POST['cont'];
	
	$fileName = $fname.$ext;
	
	if(file_exists($fileName)){
		echo "File exists<br>";
	}
	else{
	$fo = fopen($fileName,"w");
	fwrite($fo,$content);
	echo "your data is saved";
	}

}

?>


<html>
<head>
<title>File Write</title>
</head>
<body>
<div class="main">

<h2>File Write</h2>
<form method="post">
  
  <div class="form-group">
  <label for="exampleFormControlInput1">Enter file name</label>
    <input type="text" name="file" id="exampleFormControlInput1" placeholder="Filename">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">choose extension</label>
    <select class="form-control" name="exten" id="exampleFormControlSelect1">
	  <option value="">choose extension</option>
      <option>.txt</option>
      <option>.doc</option>
      <option>.pdf</option>
    </select>
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">File content</label>
    <textarea class="form-control" name="cont" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <input type="submit" value="save" name="save"/>
  
</form>
</div>
</body>
</html>
