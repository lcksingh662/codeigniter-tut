<?php
if(isset($_POST['back'])){
	header("Location:loginPage.php");
}
if(isset($_POST['register'])){
	if($_POST['nme'] != ''){
		if($_POST['userName'] != ''){
			if($_POST['password'] != ''){
				//header("Location:registerVerify.php");
			}
			else{
				echo 'Password cannot be blank';
			}
		}
		else{
			echo 'Username cannot be blank';
		}
	}
	else{
		echo 'Name cannot be blank';
	}
}

session_start(); 

require_once 'config.php';
$showAlert = false;

if(isset($_POST['nme']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['cpass'])){


    $name = $_POST['nme'];
    $uname = $_POST['userName'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpass'];
    $exists = false;


	$sql = "SELECT * FROM user WHERE username='$uname'";
    $result = mysqli_query($link, $sql);

	if(mysqli_num_rows($result) == 1){
		echo 'This username or password already exists';
		session_destroy();
	}




    if(($pwd === $cpwd) && $exists == false){
        $sql = "INSERT INTO `user`(`name`, `username`, `password`, `created`) VALUES ('$name', '$uname', '$pwd', current_timestamp())";
        $result = mysqli_query($link, $sql);
        if($result){
            echo 'Account created Login to continue';
        }
    }
    else{
        echo 'Password do not match confirm password';
    }
 
}
else{
    echo 'Invalid no. of arguments';
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
            <input type="text" name="nme" id="id1" placeholder="Enter your Name"> 
        </div> 
		<br>
		
        <div class="form-group">
            <label for="id2">Email id</label> 
            <input type="text" name="userName" id="id2" placeholder="Enter your Email-id"> 
        </div> 
		<br>
        <div class="form-group"> 
            <label for="id3">Password</label> 
            <input type="password" name="password" id="id3" placeholder="Enter your password"> 
        </div> 
		<br>
		<div class="form-group"> 
            <label for="id4">Confirm Password</label> 
            <input type="password" name="cpass" id="id4" placeholder="Enter your password"> 
        </div> 
		<br>
        <div class="container"> 
		<input id='btn' name="back" type='submit' value='Back'>
		<input id='btn' name="register" type='submit' value='Register'>
        </div>
    </form> 
</div> 
  
</body> 
</html> 