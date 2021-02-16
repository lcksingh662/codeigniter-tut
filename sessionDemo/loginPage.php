<?php
if(isset($_POST['register'])){
	header("Location:register.php");
}
else if(isset($_POST['login'])){
	if($_POST['userName'] != ''){
		if($_POST['pass'] != ''){
			//header("Location:loginVerify.php");
		}
		else{
			echo 'Password cannot be blank';
		}
	}
	else{
		echo 'Username cannot be blank';
	}
session_start(); 

require_once 'config.php';

if(isset($_POST['userName']) && isset($_POST['pass'])){
    $uname = $_POST['userName'];
    $pwd = $_POST['pass'];

    $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if($uname === $row['username'] && $pwd === $row['password']){
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
		    exit();
        }
        else{
            echo 'Incorrect username or password';
        }
    }
    else{
        echo 'Invalid data';
    }
}

}
?>

<html> 
<head> 
  <title>Login Form</title> 
  
</head> 
<body>
    <div class="container" style="color:green"> 
     <h1>Login Form</h1> 
    </div> 
	<div class="container">  
		<form method="post"> 
			<div class="form-group">
				<label for="id1">User Name</label> 
				<input type="text" name="userName" id="id1" placeholder="Enter your User Name"> 
			</div> 
			<br>
			<div class="form-group"> 
				<label for="id2">Password</label> 
				<input type="password" name="pass" id="id2" placeholder="Enter your password"> 
			</div> 
			<br>
			<div class="container"> 
				<input id='btn' name="login" type='submit' value='Login'>
				<input id='btn' name="register" type='submit' value='Register'> 
			</div>
		</form> 
	</div> 
  
</body> 
</html> 