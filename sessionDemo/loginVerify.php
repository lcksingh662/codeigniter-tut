<?php
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

?>