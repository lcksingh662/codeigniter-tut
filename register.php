<?php
if(isset($_POST['register'])){
	header("Location:register.php");
}
?>

<html> 
<head> 
  <title>Registration Form</title> 
  
</head> 
<body> 
    <div class="container" style="color:green"> 
     <h1>Registration Form</h1> 
    </div> 
<div class="container">  
    <form method="post"> 
		<div class="form-group">
            <label for="id1">Name</label> 
            <input type="text" id="id1" placeholder="Enter your Name"> 
        </div> 
		<br>
		
        <div class="form-group">
            <label for="id1">Email id</label> 
            <input type="text" id="id1" placeholder="Enter your Email-id"> 
        </div> 
		<br>
        <div class="form-group"> 
            <label for="id2">Password</label> 
            <input type="password" id="id2" placeholder="Enter your password"> 
        </div> 
		<br>
        <div class="container"> 
		<input id='btn' name="register" type='submit' value='Register'>
        </div>
    </form> 
</div> 
  
</body> 
</html> 