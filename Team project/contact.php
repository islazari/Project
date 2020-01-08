<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="contact.css">
</head>
<body>

	<div class="logo">
		<img src="profile.png">
	</div>

	<div class="row">
		<ul class="main-nav">
			<li> <a href= "home.php"> HOME </a> </li>
			<li> <a href="find.php"> BOOK A TUTOR </a> </li>
			<li> <a href="tutorReg.php"> BECOME A TUTOR </a> </li>
			<li class= "active"> <a hreff "">  CONTACT US </a> </li>
			<li> <a href= "logout.php"> LOGOUT </a> </li>
		</ul>

	  	<form class="contact-box"  action="contact_handler.php" method="post" >

<h1>Contact us</h1>
		  <div class="textbox">
				<i class="fas fa-envelope"></i>
				<input type="text" placeholder="E-mail" name="email" required>
				</div>

				<div class="textbox">
			    <i class="fas fa-user"></i>
			    <input type="text" placeholder="Full name" name="fullname" required>
			  </div>

				<div class="textbox">
				<i class="fas fa-pen"></i>
				 	<textarea type="text" placeholder="Write us something" name="subject" type></textarea>
					 </div>
				<button type="submit" class="btn" name="send">Submit</button>
			 <input type="button" onclick="window.location.href= 'home.php';" class="btn2" value="Cancel">


</form>
</body>
</html>