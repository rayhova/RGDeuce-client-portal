<?php

//Start session
	session_start();
 
	//Include database connection details
	require_once('dbconnect.php');


// checking the user

if(isset($_POST['login'])){

$username = mysqli_real_escape_string($conn,$_POST['username']);

$password = mysqli_real_escape_string($conn,$_POST['password']);

$sel_user = "select * from clients where username='$username' AND password='$password'";

$run_user = mysqli_query($conn, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['username']=$username;


echo "<script>window.open('home.php','_self')</script>";

}

else {

echo "<script>alert('Username or password is not correct, try again!')</script>";
echo "<script>window.open('index.php','_self')</script>";
}

}

?>