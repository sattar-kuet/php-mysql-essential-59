<?php
session_start();
include('../../database/connect.php');
include('../../helper/function.php');

// Login 
extract($_POST);
$email = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection,$password);
$password = sha1($password);


$sql = "SELECT id,name,email FROM users WHERE email='$email' AND password='$password'";


$result = mysqli_query($connection,$sql);


$user = mysqli_fetch_assoc($result);


if($captcha != $_SESSION['captcha']){
	set_flush_message('Captcha is incorrect','alert-danger');
	header('Location:../login.php');
	die();

}

if(mysqli_num_rows($result)==1){
  // login
  // redirect to dashboard
	$_SESSION['user'] = $user;
	header('Location:../dashboard.php');
}else{
	set_flush_message('Email/Password incorrect','alert-danger');
	header('Location:../login.php');
}

?>