<?php

session_start();


$email="";
$password="";
$fullname="";
$department="";
$aem="";


$errors = array();


$db = mysqli_connect('localhost','root','1234','uth_tutoring');

if (isset($_POST['reg_user'])) {
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$department = mysqli_real_escape_string($db, $_POST['department']);
$aem = mysqli_real_escape_string($db, $_POST['aem']);

if(!filter_var($email,FILTER_VALIDATE_EMAIL) ){array_push($errors, "Please insert a valid email");}
if($password != $cpassword){array_push($errors, "Passwords do not match");}
$user_check_query = "SELECT * FROM user WHERE email= '$email' LIMIT 1";
$result= mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
  if($user['email'] === $email){array_push($errors, "Email already exists");}
}



if (count($errors) == 0){
  $query = "INSERT INTO user (email,password,fullname,department,aem) VALUES ('$email','$password','$fullname','$department','$aem')";
  mysqli_query($db, $query);
  $_SESSION['email'] = $email;
  $_SESSION['success'] = "You are now logged in";
  header('location: redirect.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }


  if (count($errors) == 0) {
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  	$result = mysqli_query($db, $query);

  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

 ?>
