<?php
session_start(); 

require_once 'config.php';
$showAlert = false;

if(isset($_POST['nme']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['cpass'])){


    $name = $_POST['nme'];
    $uname = $_POST['userName'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpass'];
    $exists = false;

    if(($pwd === $cpwd) && $exists == false){
        $sql = "INSERT INTO `user`(`name`, `username`, `password`, `created`) VALUES ('$name', '$uname', '$pwd', current_timestamp())";
        $result = mysqli_query($link, $sql);
        if($result){
            $showAlert = true;
        }
    }
    else{
        echo 'Password do not match confirm password';
    }

    





    $sql = "INSERT INTO `user`(`name`, `username`, `password`, `created`)
    VALUES ('$name', '$uname', '$pwd', current_timestamp())";
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
else{
    echo 'Invalid no. of arguments';
}
?>



<!-- <?php

require_once 'config.php';



$emailid = '';
$password = '';
$confirm_password = '';
$emailid_err = '';
$password_err = '';
$confirm_password_err = '';
$name = 'jasjit';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
    // Validate mail id
    if(empty(trim($_POST['eid']))){
        $emailid_err = 'Please enter a Email-id.';
    } else{
        // Prepare a select statement
        $sql = 'SELECT id FROM user WHERE email = ?';
        
        if($stmt = mysqli_prepare($link, $sql)){
			
			// Set parameters
            $param_username = trim($_POST['eid']);
			
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 's', $param_email);
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $emailid_err = 'This username is already taken.';
                } else{
                    $emailid = trim($_POST['eid']);
                }
            } else{
                echo 'Oops! Something went wrong. Please try again later.';
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
	
	//Password validate
	if(empty(trim($_POST['pass']))){
		$password_err = 'Please enter a Password.';
	}
	else{
		$password = trim($_POST['pass']);	
	}
	
	//Confirm password validate
	if(empty(trim($_POST['cpass']))){
		$confirm_password_err = 'Please Confirm Password.';
	}
	else{
		$confirm_password = trim($_POST['cpass']);
		if(empty($password_err) && $password != $confirm_password){
			$confirm_password_err = 'Password did not match';
		}
	}
	
	//check before insertion
	 if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
		 $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
		 
		 if($stmt = mysqli_prepare($link, $sql)){
			 mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_password);
			 $param_name = $name;
			 $param_email = $emailid;
             $param_password = password_hash($password, PASSWORD_DEFAULT); 
			 
             if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header('location: loginPage.php');
            } else{
                echo 'Something went wrong. Please try again later.';
            }

            // Close statement
            mysqli_stmt_close($stmt);
			 
		 }
	 }

     // Close connection
    mysqli_close($link);
}

?> -->