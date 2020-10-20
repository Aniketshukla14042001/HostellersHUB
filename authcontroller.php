<?php
session_start();
require 'db.php';


$errors=array();
$username="";
$email="";
//if user clicks on signup button
   if (isset($_POST['signup-btn'])) { 
    $username = $_POST['username']; 
    $email = $_POST['email'];
	$password = $_POST['password'];
 $passwordConf = $_POST['passwordConf'];
 
 // validation
 if(empty($username))  {
 
 $errors['username']="username required ";
 }
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	 $errors['email']="Email address is invalid ";
 }
  if(empty($email))  {
 
 $errors['email']="Email required ";
 }
  if(empty($password))  {
 
 $errors['password']="password required ";
 }
 if($password!==$passwordConf)
 {
	 $errors['password']="the two password do not match";
 }  
	//flash message
$_SESSION['message']="You are now logged in";
$_SESSION['alert-class']="alert-success";
header('location:Homepage.php ');
exit();
   }else{
	   $errors['db_error']="Database error:failed to register";
   }
   
   
   
   //if user click on login button
     if (isset($_POST['signup-btn'])) { 
    $username = $_POST['username']; 
	$password = $_POST['password'];
 
 
 // validation
 if(empty($username))  {
 
 $errors['username']="username required ";
 }
  if(empty($password))  {
 
 $errors['password']="password required ";
 }
 
 $sql="SELECT *FROM users WHERE email=? OR username=? LIMIT 1";
 $stmt=$conn->prepare($sql);
 $stmt->bind_param('ss',$username,$username);
 $stmt->execute();
 $result=$stmt->get_result();
 $user=$result->fetch_assoc();
 
 if(password_verify($password,$user['password'])) {
	 //login success
	$SESSION['id']=$user['id'];
	$SESSION['username']=$user['username'];
	$SESSION['email']=$user['email'];
	$SESSION['verified']=$user['verified'];
	//flash message
$_SESSION['message']="You are now logged in";
$_SESSION['alert-class']="alert-success";
header('location:Homepage.php ');
exit();
	 
 }else{
	 $errors['login fail']="wrong credentials";
 }
 
	 
	 }
	 ?>